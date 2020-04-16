<?php

namespace App\Repositories;

use App\Models\TipoRefeicao;
use App\Repositories\BaseRepository;

/**
 * Class TipoRefeicaoRepository
 * @package App\Repositories
 * @version April 15, 2020, 6:48 pm UTC
*/

class TipoRefeicaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome'
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
        return TipoRefeicao::class;
    }
}
