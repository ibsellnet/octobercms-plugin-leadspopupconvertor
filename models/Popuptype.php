<?php namespace Ibsellnet\Leadspopupconvertor\Models;

use Model;

/**
 * Model
 */
class Popuptype extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ibsellnet_leadspopupconvertor_popuptypes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

//    public $hasMany = [
//        'popup'=>['Ibsellnet\Leadspopupconvertor\Models\Popups', 'key' => 'popuptype_id', 'otherKey' => 'id']
//    ];
}
