<?php namespace Ibsellnet\Leadspopupconvertor;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'LeadsPopupConvertor',
            'description' => 'Will show popups on the screen depending on your settings',
            'author'      => 'IbsellNET',
            'icon'        => 'icon-search'
        ];
    }

    public function registerComponents()
    {
        return [
            'Ibsellnet\Leadspopupconvertor\Components\Popupconvertor' => 'Popupconvertor'
        ];
    }

    public function registerSettings()
    {
    }
}
