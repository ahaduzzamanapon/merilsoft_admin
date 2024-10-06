<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Test
 * @package App\Models
 * @version October 2, 2024, 9:33 am UTC
 *
 * @property string $tet
 */
class Test extends Model
{

    public $table = 'tests';
    



    public $fillable = [
        'tet'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tet' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
