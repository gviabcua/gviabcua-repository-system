<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaRepositoryThemes extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_repository_themes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('theme', 5000);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_repository_themes');
    }
}
