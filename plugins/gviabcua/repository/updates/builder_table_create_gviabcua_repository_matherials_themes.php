<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaRepositoryMatherialsThemes extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_repository_matherials_themes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('themes_id');
            $table->integer('matherials_id');
            $table->primary(['themes_id','matherials_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_repository_matherials_themes');
    }
}
