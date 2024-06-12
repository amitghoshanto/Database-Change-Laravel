<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOldIdToMultipleTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->integer('country_id')->default(1)->after('id');
            $table->integer('old_id')->default(0)->after('id');
        });

        Schema::table('district', function (Blueprint $table) {
            $table->integer('old_id')->default(0)->after('id');
        });

        Schema::table('area', function (Blueprint $table) {
            $table->integer('old_id')->default(0)->after('id');
        });

        Schema::table('sub_area', function (Blueprint $table) {
            $table->integer('old_id')->default(0)->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->dropColumn('old_id');
        });

        Schema::table('district', function (Blueprint $table) {
            $table->dropColumn('old_id');
        });

        Schema::table('area', function (Blueprint $table) {
            $table->dropColumn('old_id');
        });

        Schema::table('sub_area', function (Blueprint $table) {
            $table->dropColumn('old_id');
        });
    }
}
