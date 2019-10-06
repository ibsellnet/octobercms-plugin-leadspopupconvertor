<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbsellnetLeadspopupconvertorPopups2 extends Migration
{
    public function up()
    {
        Schema::table('ibsellnet_leadspopupconvertor_popups', function($table)
        {
            $table->integer('type1_seconds')->default(10)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ibsellnet_leadspopupconvertor_popups', function($table)
        {
            $table->integer('type1_seconds')->default(null)->change();
        });
    }
}
