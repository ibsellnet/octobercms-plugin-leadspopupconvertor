<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbsellnetLeadspopupconvertorPopups extends Migration
{
    public function up()
    {
        Schema::table('ibsellnet_leadspopupconvertor_popups', function($table)
        {
            $table->integer('type1_seconds');
            $table->string('type2_selector');
        });
    }
    
    public function down()
    {
        Schema::table('ibsellnet_leadspopupconvertor_popups', function($table)
        {
            $table->dropColumn('type1_seconds');
            $table->dropColumn('type2_selector');
        });
    }
}
