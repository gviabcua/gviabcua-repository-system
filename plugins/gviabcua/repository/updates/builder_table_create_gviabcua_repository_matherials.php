<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaRepositoryMatherials extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_repository_matherials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title_orig', 8000);
            $table->string('title_eng', 8000);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_repository_matherials');
    }
}
