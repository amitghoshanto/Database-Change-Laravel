<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnsInAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('area', function (Blueprint $table) {
            $table->string('name', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->change();
            $table->string('bn_name', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable()->default(null)->change();
            $table->string('slug', 255)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area', function (Blueprint $table) {
            // Reverting the charset and collation changes
            $table->string('name', 255)->charset('utf8')->collation('utf8_unicode_ci')->change();
            $table->string('bn_name', 255)->charset('utf8')->collation('utf8_unicode_ci')->nullable()->default(null)->change();
            $table->string('slug', 255)->charset('utf8')->collation('utf8_unicode_ci')->change();
            $table->integer('districtid')->unsigned()->change();
        });
    }
}
