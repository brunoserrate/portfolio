<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoRefeicao
 * @package App\Models
 * @version April 15, 2020, 6:48 pm UTC
 *
 * @property string nome
 */
class TipoRefeicao extends Model
{

    public $table = 'tipo_refeicao';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required'
    ];

    
}
