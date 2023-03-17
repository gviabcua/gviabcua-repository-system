<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateGviabcuaRepositoryMatherials2 extends Migration
{
    public function up()
    {
        Schema::table('gviabcua_repository_matherials', function($table)
        {
            $table->string('url', 9000)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('gviabcua_repository_matherials', function($table)
        {
            $table->dropColumn('url');
        });
    }
}
