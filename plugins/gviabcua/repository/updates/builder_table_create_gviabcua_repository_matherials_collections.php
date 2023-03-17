<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaRepositoryMatherialsCollections extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_repository_matherials_collections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('collections_id');
            $table->integer('matherials_id');
            $table->primary(['collections_id','matherials_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_repository_matherials_collections');
    }
}
