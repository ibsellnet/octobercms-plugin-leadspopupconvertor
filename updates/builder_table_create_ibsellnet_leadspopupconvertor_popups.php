<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIbsellnetLeadspopupconvertorPopups extends Migration
{
    public function up()
    {
        Schema::create('ibsellnet_leadspopupconvertor_popups', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('name');
            $table->string('content');
            $table->integer('popuptype_id')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ibsellnet_leadspopupconvertor_popups');
    }
}
