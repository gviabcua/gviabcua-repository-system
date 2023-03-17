<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaRepositoryMatherialsAuthors extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_repository_matherials_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('authors_id');
            $table->integer('matherials_id');
            $table->primary(['authors_id','matherials_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_repository_matherials_authors');
    }
}