<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbsellnetLeadspopupconvertorModaltypes extends Migration
{
    public function up()
    {
        Schema::rename('ibsellnet_leadspopupconvertor_modaltype', 'ibsellnet_leadspopupconvertor_modaltypes');
    }
    
    public function down()
    {
        Schema::rename('ibsellnet_leadspopupconvertor_modaltypes', 'ibsellnet_leadspopupconvertor_modaltype');
    }
}
