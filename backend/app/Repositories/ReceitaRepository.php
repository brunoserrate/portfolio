<?php

namespace App\Repositories;

use App\Models\Receita;
use App\Repositories\BaseRepository;

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

    private function tratarDados($dados) {

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

}
