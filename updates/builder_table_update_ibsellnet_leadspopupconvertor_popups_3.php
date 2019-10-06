<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateIbsellnetLeadspopupconvertorPopups3 extends Migration
{
    public function up()
    {
        Schema::table('ibsellnet_leadspopupconvertor_popups', function($table)
        {
            $table->string('name', 65535)->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('content')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ibsellnet_leadspopupconvertor_popups', function($table)
        {
            $table->text('name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('content', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
