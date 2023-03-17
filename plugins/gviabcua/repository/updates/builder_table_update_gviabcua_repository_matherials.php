<?php namespace Gviabcua\Repository\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateGviabcuaRepositoryMatherials extends Migration
{
    public function up()
    {
        Schema::table('gviabcua_repository_matherials', function($table)
        {
            $table->integer('year');
            $table->text('bibliographic')->nullable();
            $table->text('bibliographic')->nullable();
            $table->text('publisher')->nullable();
            $table->text('description')->nullable();
            $table->string('key_words')->nullable();
            $table->string('isbn', 500)->nullable();
            $table->string('issn', 500)->nullable();
            $table->string('udc', 500)->nullable();
            $table->string('bbc', 500)->nullable();
            $table->string('doi', 500)->nullable();
            $table->string('copyright_sign', 100)->nullable();
            $table->text('copyrights')->nullable();
            $table->boolean('active')->default(0);
            $table->integer('views')->default(0);
            $table->text('description_full')->nullable();
            $table->text('title_orig')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('title_eng')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('gviabcua_repository_matherials', function($table)
        {
            $table->dropColumn('bibliographic');
            $table->dropColumn('publisher');
            $table->dropColumn('description');
            $table->dropColumn('key_words');
            $table->dropColumn('isbn');
            $table->dropColumn('issn');
            $table->dropColumn('udc');
            $table->dropColumn('bbc');
            $table->dropColumn('doi');
            $table->dropColumn('copyright_sign');
            $table->dropColumn('copyrights');
            $table->dropColumn('active');
            $table->dropColumn('description_full');
            $table->string('title_orig', 8000)->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('title_eng', 7000)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}