<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreStatToGolfCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('golf_course', function (Blueprint $table) {
            $table->string('par3_strokes_tot', 10);
            $table->string('par4_strokes_tot', 10);
            $table->string('par5_strokes_tot', 10);
			$table->string('par3_total', 10);
            $table->string('par4_total', 10);
            $table->string('par5_total', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('golf_course', function (Blueprint $table) {
            //
        });
    }
}
