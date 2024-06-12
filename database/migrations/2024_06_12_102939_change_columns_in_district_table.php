<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ChangeColumnsInDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Using DB::statement to change column character set and collation
        Schema::table('district', function (Blueprint $table) {
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
        Schema::table('district', function (Blueprint $table) {
            // Reverting the charset and collation changes
            $table->string('name', 255)->charset('utf8')->collation('utf8_unicode_ci')->change();
            $table->string('bn_name', 255)->charset('utf8')->collation('utf8_unicode_ci')->nullable()->default(null)->change();
            $table->string('slug', 255)->charset('utf8')->collation('utf8_unicode_ci')->change();
        });
    }
}
