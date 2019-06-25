<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Persona
 * @package App\Models
 * @version June 25, 2019, 6:29 pm UTC
 *
 * @property string rut
 * @property string nombre
 * @property string apellido
 * @property string correo
 * @property string imagen
 */
class Persona extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'rut',
        'nombre',
        'apellido',
        'correo',
        'imagen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rut' => 'string',
        'nombre' => 'string',
        'apellido' => 'string',
        'correo' => 'string',
        'imagen' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rut' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'correo' => 'required'
    ];

    
}
