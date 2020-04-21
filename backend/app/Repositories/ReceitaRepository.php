<?php

namespace App\Repositories;

use App\Models\Receita;
use App\Repositories\BaseRepository;
use DB;

/**
 * Class ReceitaRepository
 * @package App\Repositories
 * @version April 15, 2020, 6:42 pm UTC
*/

class ReceitaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'img',
        'titulo',
        'ingredientes',
        'tipo_refeicao_id',
        'porcoes',
        'dificuldade',
        'etapas',
        'tempo_preparo',
        'criado_por'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Receita::class;
    }

    public function all($search = [], $skip = null, $limit = null, $columns = ['*'])
    {
        $query = $this->allQuery($search, $skip, $limit);

        $query->leftJoin('tipo_refeicao', 'tipo_refeicao.id', '=', 'receita.tipo_refeicao_id');

        $columns = ['receita.*', 'tipo_refeicao.nome AS tipo_refeicao'];

        return $query->get($columns);
    }

    public function create($input)
    {
        $result = $this->tratarDados($input);

        $model = $this->model->newInstance($result);

        $model->save();

        return $model;
    }

    public function update($input, $id)
    {
        $result = $this->tratarDados($input);

        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        $model->fill($result);

        $model->save();

        return $model;
    }


    private function tratarDados($dados, $api = false) {

        if(!$api){
            $ingredientes = str_replace(array("\n", "\r"), "", $dados['ingredientes']);
            $ingredientes = explode(";", $ingredientes);

            $etapas = str_replace(array("\n", "\r"), "", $dados['etapas']);
            $etapas = explode(";", $etapas);

            if(end($ingredientes) == ""){
                array_pop($ingredientes);
            }

            if(end($etapas) == ""){
                array_pop($etapas);
            }

            $dados['ingredientes'] = json_encode($ingredientes);
            $dados['etapas'] = json_encode($etapas);

            return $dados;
        }
        else {

            $api = $dados->meals;

            for ($i=0; $i < count($api); $i++) {

                $etapas = str_replace(array("\n", "\r"), "", $api[$i]->strInstructions);

                $etapas = explode(".", $etapas);

                if(end($etapas) == ""){
                    array_pop($etapas);
                }

                $ingredientes = [
                    0 => $api[$i]->strMeasure1 . " " . $api[$i]->strIngredient1,
                    1 => $api[$i]->strMeasure2 . " " . $api[$i]->strIngredient2,
                    2 => $api[$i]->strMeasure3 . " " . $api[$i]->strIngredient3,
                    3 => $api[$i]->strMeasure4 . " " . $api[$i]->strIngredient4,
                    4 => $api[$i]->strMeasure5 . " " . $api[$i]->strIngredient5,
                    5 => $api[$i]->strMeasure6 . " " . $api[$i]->strIngredient6,
                    6 => $api[$i]->strMeasure7 . " " . $api[$i]->strIngredient7,
                    7 => $api[$i]->strMeasure8 . " " . $api[$i]->strIngredient8,
                    8 => $api[$i]->strMeasure9 . " " . $api[$i]->strIngredient9,
                    9 => $api[$i]->strMeasure10 . " " . $api[$i]->strIngredient10,
                    10 => $api[$i]->strMeasure11 . " " . $api[$i]->strIngredient11,
                    11 => $api[$i]->strMeasure12 . " " . $api[$i]->strIngredient12,
                    12 => $api[$i]->strMeasure13 . " " . $api[$i]->strIngredient13,
                    13 => $api[$i]->strMeasure14 . " " . $api[$i]->strIngredient14,
                    14 => $api[$i]->strMeasure15 . " " . $api[$i]->strIngredient15,
                    15 => $api[$i]->strMeasure16 . " " . $api[$i]->strIngredient16,
                    16 => $api[$i]->strMeasure17 . " " . $api[$i]->strIngredient17,
                    17 => $api[$i]->strMeasure18 . " " . $api[$i]->strIngredient18,
                    18 => $api[$i]->strMeasure19 . " " . $api[$i]->strIngredient19,
                    19 => $api[$i]->strMeasure20 . " " . $api[$i]->strIngredient20
                ];

                $ingredientes = array_filter($ingredientes, function($value) {
                    return !is_null($value) && $value !== '' && $value !== " "; 
                });
                
                $receita[$i] = [
                    'id' => $api[$i]->idMeal,
                    'img' => $api[$i]->strMealThumb,
                    'titulo' => $api[$i]->strMeal,
                    'porcoes' => 1,
                    'tempo_preparo' => 60,
                    'tipo_refeicao_id' => 5,
                    'dificuldade' => 'medio',
                    'criado_por' => 'The Meal DB',
                    'ingredientes' => json_encode($ingredientes),
                    'etapas' => json_encode($etapas)
                ];

            }

            return $receita;

        }


    }

    public function filtro($input) {

        if($input['externo'] == 'true') {
            // create & initialize a curl session
            $curl = curl_init();

            // set our url with curl_setopt()
            curl_setopt($curl, CURLOPT_URL, "https://www.themealdb.com/api/json/v1/1/search.php?s=" . $input['titulo']);

            // return the transfer as a string, also with setopt()
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            // curl_exec() executes the started curl session
            // $output contains the output string
            $output = json_decode(curl_exec($curl));

            // close curl resource to free up system resources
            // (deletes the variable made by curl_init)
            curl_close($curl);

            if($output->meals == null){
                return [];
            }

            $dados = $this->tratarDados($output, true);

            return $dados;

        }

        $query = DB::table('receita')->select('*')
                    ->where('titulo', 'LIKE', '%' . $input['titulo'] . '%');

        return $query->distinct()->limit(9)->orderBy('id')->get();

    }

}
