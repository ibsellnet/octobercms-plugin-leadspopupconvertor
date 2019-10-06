<?php namespace Ibsellnet\Leadspopupconvertor\Models;

use Model;

/**
 * Model
 */
class Popups extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ibsellnet_leadspopupconvertor_popups';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'popuptype'=>['Ibsellnet\Leadspopupconvertor\Models\Popuptype', 'key' => 'popuptype_id', 'otherKey' => 'id']
    ];

}
