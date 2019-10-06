<?php namespace Ibsellnet\Leadspopupconvertor\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Popuptype extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ibsellnet.Leadspopupconvertor', 'main-menu-item-popups', 'side-menu-item-popuptypes');
    }
}
