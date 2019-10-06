<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbsellnetLeadspopupconvertorPopuptypes extends Migration
{
    public function up()
    {
        Schema::rename('ibsellnet_leadspopupconvertor_modaltypes', 'ibsellnet_leadspopupconvertor_popuptypes');
    }
    
    public function down()
    {
        Schema::rename('ibsellnet_leadspopupconvertor_popuptypes', 'ibsellnet_leadspopupconvertor_modaltypes');
    }
}
