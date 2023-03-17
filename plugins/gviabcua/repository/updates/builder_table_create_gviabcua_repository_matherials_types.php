<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaRepositoryMatherialsTypes extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_repository_matherials_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('types_id');
            $table->integer('matherials_id');
            $table->primary(['types_is','matherials_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_repository_matherials_types');
    }
}