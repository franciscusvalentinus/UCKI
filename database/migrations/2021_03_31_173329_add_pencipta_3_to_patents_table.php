<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPencipta3ToPatentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patents', function (Blueprint $table) {
            $table->unsignedBigInteger('pencipta_3')->index()->after('id')->nullable();
            $table->foreign('pencipta_3')->references('id')->on('lecturers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patents', function (Blueprint $table) {
            $table->dropColumn('pencipta_3');
        });
    }
}
