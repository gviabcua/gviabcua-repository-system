<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateGviabcuaRepositoryViews extends Migration
{
    public function up()
    {
        Schema::table('gviabcua_repository_views', function($table)
        {
            $table->string('date', 0)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('gviabcua_repository_views', function($table)
        {
            $table->dateTime('date')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
