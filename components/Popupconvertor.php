<?php namespace Ibsellnet\Leadspopupconvertor\Components;

use Cms\Classes\ComponentBase;
use Event;
use Ibsellnet\Leadspopupconvertor\Models\Popups;

class Popupconvertor extends ComponentBase
{

    public $page;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $canonical_url;
    public $redirect_url;
    public $robot_index;
    public $robot_follow;

    public function componentDetails()
    {
        return [
            'name'        => 'Will create a popup',
            'description' => 'Based on the id you need to set up on the idpopup parameter'
        ];
    }

    public function defineProperties()
    {
        return [
            "idpopup" => [
                "title" => "ID Popup",
                "default" => "1"
            ]
        ];
    }


    public function onRender(){
        $idPopup = $this->property('idpopup',1);
        $arrPopupInfo = Popups::find($idPopup);
        $idPopupHTML = 'ibsmodal_'.$idPopup.rand(1000,5000000);




        $this->page['arrPopupInfo'] = $arrPopupInfo;
        $this->page['idPopupHTML'] = $idPopupHTML;
    }

    public function onRun(){
        //plugin's scripts: model here https://www.w3schools.com/howto/howto_css_modals.asp
        $this->addJs('assets/js/leadspopupconvertor.js');
        $this->addCss('assets/css/leadspopupconvertor.css');


    }

}
