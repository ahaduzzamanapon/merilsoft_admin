<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Slider
 * @package App\Models
 * @version October 3, 2024, 11:45 am UTC
 *
 * @property string $titel
 * @property string $image
 */
class Slider extends Model
{

    public $table = 'sliders';
    



    public $fillable = [
        'titel',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'titel' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
