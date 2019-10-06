<?php namespace Ibsellnet\Leadspopupconvertor\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIbsellnetLeadspopupconvertorModaltype extends Migration
{
    public function up()
    {
        Schema::create('ibsellnet_leadspopupconvertor_modaltype', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ibsellnet_leadspopupconvertor_modaltype');
    }
}
