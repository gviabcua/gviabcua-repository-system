<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateGviabcuaRepositoryMatherials3 extends Migration
{
    public function up()
    {
        Schema::table('gviabcua_repository_matherials', function($table)
        {
            $table->integer('downloads')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('gviabcua_repository_matherials', function($table)
        {
            $table->dropColumn('downloads');
        });
    }
}
