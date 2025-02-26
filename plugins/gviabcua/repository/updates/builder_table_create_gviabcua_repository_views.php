<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateGviabcuaRepositoryViews extends Migration
{
    public function up()
    {
        Schema::create('gviabcua_repository_views', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->dateTime('date')->nullable()->index('date');
            $table->string('ip')->index('ip');
            $table->integer('count')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('gviabcua_repository_views');
    }
}
