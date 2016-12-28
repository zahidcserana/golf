<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatToGolfCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('golf_course', function (Blueprint $table) {
            $table->string('par3_scoring', 10);
            $table->string('par4_scoring', 10);
            $table->string('par5_scoring', 10);
            $table->string('hash_par3', 10);
            $table->string('hash_par4', 10);
            $table->string('hash_par5', 10);
            $table->string('eagles', 10);
            $table->string('birdies', 10);
            $table->string('pars', 10);
            $table->string('bogeys', 10);
            $table->string('dblbogeys', 10);
            $table->string('others', 10);
            $table->string('fairways', 10);
            $table->string('fir_percentage', 10);
            $table->string('greens', 10);
            $table->string('gir_percentage', 10);
            $table->string('played_holes_equation', 10);
            $table->string('hole_rds_18', 10);
            $table->string('scramble_opp_equation', 10);
            $table->string('scramble_sav_equation', 10);
            $table->string('scramble_percentage', 10);
            $table->string('sand_opp_equation', 10);
            $table->string('sand_sav_equation', 10);
            $table->string('sand_sav_percentage', 10);
            $table->string('missed_gir', 10);
            $table->string('put_1_nogir', 10);
            $table->string('avg_dist_chip', 10);
            $table->string('total_putts', 10);
            $table->string('putts_div_hole', 10);
            $table->string('avg_score', 10);
            $table->string('putt_opp_5_equation', 10);
            $table->string('putt_opp_5_9_equation', 10);
            $table->string('putt_opp_10_19_equation', 10);
            $table->string('putt_opp_20_29_equation', 10);
            $table->string('putt_opp_30_equation', 10);
            $table->string('putt_make_5_equation', 10);
            $table->string('putt_make_5_9_equation', 10);
            $table->string('putt_make_10_19_equation', 10);
            $table->string('putt_make_20_29_equation', 10);
            $table->string('putt_make_30_equation', 10);
            $table->string('make_percentage_5', 10);
            $table->string('make_percentage_5_9', 10);
            $table->string('make_percentage_10_19', 10);
            $table->string('make_percentage_20_29', 10);
            $table->string('make_percentage_30', 10);
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
            $table->double('par3_scoring');
            $table->double('par4_scoring');
            $table->double('par5_scoring');
            $table->double('hash_par3');
            $table->double('hash_par4');
            $table->double('hash_par5');
            $table->double('eagles');
            $table->double('birdies');
            $table->double('pars');
            $table->double('bogeys');
            $table->double('dblbogeys');
            $table->double('others');
            $table->double('fairways');
            $table->double('fir_percentage');
            $table->double('greens');
            $table->double('gir_percentage');
            $table->double('played_holes_equation');
            $table->double('hole_rds_18');
            $table->double('scramble_opp_equation');
            $table->double('scramble_sav_equation');
            $table->double('scramble_percentage');
            $table->double('sand_opp_equation');
            $table->double('sand_sav_equation');
            $table->double('sand_sav_percentage');
            $table->double('missed_gir');
            $table->double('put_1_nogir');
            $table->double('avg_dist_chip');
            $table->double('total_putts');
            $table->double('putts_div_hole');
            $table->double('avg_score');
            $table->double('putt_opp_5_equation');
            $table->double('putt_opp_5_9_equation');
            $table->double('putt_opp_10_19_equation');
            $table->double('putt_opp_20_29_equation');
            $table->double('putt_opp_30_equation');
            $table->double('putt_make_5_equation');
            $table->double('putt_make_5_9_equation');
            $table->double('putt_make_10_19_equation');
            $table->double('putt_make_20_29_equation');
            $table->double('putt_make_30_equation');
            $table->double('make_percentage_5');
            $table->double('make_percentage_5_9');
            $table->double('make_percentage_10_19');
            $table->double('make_percentage_20_29');
            $table->double('make_percentage_30');
        });
    }
}
