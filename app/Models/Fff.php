<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fff
 * @package App\Models
 * @version October 2, 2024, 1:47 pm UTC
 *
 * @property string $test
 */
class Fff extends Model
{

    public $table = 'fffs';
    



    public $fillable = [
        'test'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'test' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
