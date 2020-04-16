<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Receita
 * @package App\Models
 * @version April 15, 2020, 6:42 pm UTC
 *
 * @property string img
 * @property string titulo
 * @property string ingredientes
 * @property integer tipo_refeicao_id
 * @property integer porcoes
 * @property string dificuldade
 * @property string etapas
 * @property integer tempo_preparo
 * @property string criado_por
 */
class Receita extends Model
{

    public $table = 'receita';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'img' => 'string',
        'titulo' => 'string',
        'ingredientes' => 'string',
        'tipo_refeicao_id' => 'integer',
        'porcoes' => 'integer',
        'dificuldade' => 'string',
        'etapas' => 'string',
        'tempo_preparo' => 'integer',
        'criado_por' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'img' => 'required',
        'titulo' => 'required',
        'ingredientes' => 'required',
        'tipo_refeicao_id' => 'required',
        'porcoes' => 'required',
        'dificuldade' => 'required',
        'etapas' => 'required',
        'tempo_preparo' => 'required',
        'criado_por' => 'required'
    ];

    
}
