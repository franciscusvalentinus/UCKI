<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPencipta9ToCopyrightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('copyrights', function (Blueprint $table) {
            $table->unsignedBigInteger('pencipta_9')->index()->after('id')->nullable();
            $table->foreign('pencipta_9')->references('id')->on('lecturers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('copyrights', function (Blueprint $table) {
            $table->dropColumn('pencipta_9');
        });
    }
}
