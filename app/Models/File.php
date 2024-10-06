<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class File
 * @package App\Models
 * @version October 2, 2024, 2:04 pm UTC
 *
 * @property string $test
 */
class File extends Model
{

    public $table = 'files';
    



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
