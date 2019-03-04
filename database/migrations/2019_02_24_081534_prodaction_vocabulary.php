<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdactionVocabulary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ukr_vocabulary', function (Blueprint $table) {
            $table->increments('id');
            $table->string('word');
            $table->tinyInteger('letters_count')->unsigned()->default(0);
            $table->tinyInteger('omonim')->unsigned()->default(0);
            $table->integer('parentID')->unsigned()->default(0);
            $table->tinyInteger('ukr_noun')->unsigned()->default(0);
            $table->tinyInteger('ukr_verb')->unsigned()->default(0);
            $table->tinyInteger('ukr_adj')->unsigned()->default(0);
            $table->tinyInteger('ukr_adjp')->unsigned()->default(0);
            $table->tinyInteger('ukr_&adjp')->unsigned()->default(0);
            $table->tinyInteger('ukr_&&adjp')->unsigned()->default(0);
            $table->tinyInteger('ukr_adv')->unsigned()->default(0);
            $table->tinyInteger('ukr_advp')->unsigned()->default(0);
            $table->tinyInteger('ukr_prep')->unsigned()->default(0);
            $table->tinyInteger('ukr_conj')->unsigned()->default(0);
            $table->tinyInteger('ukr_part')->unsigned()->default(0);
            $table->tinyInteger('ukr_intj')->unsigned()->default(0);
            $table->tinyInteger('ukr_numr')->unsigned()->default(0);
            $table->tinyInteger('ukr_foreign')->unsigned()->default(0);
            $table->tinyInteger('ukr_noninfl')->unsigned()->default(0);
            $table->tinyInteger('ukr_abbr')->unsigned()->default(0);
            $table->tinyInteger('ukr_bad')->unsigned()->default(0);
            $table->tinyInteger('ukr_subst')->unsigned()->default(0);
            $table->tinyInteger('ukr_rare')->unsigned()->default(0);
            $table->tinyInteger('ukr_coll')->unsigned()->default(0);
            $table->tinyInteger('ukr_slang')->unsigned()->default(0);
            $table->tinyInteger('ukr_alt')->unsigned()->default(0);
            $table->tinyInteger('ukr_&pron')->unsigned()->default(0);
            $table->tinyInteger('ukr_&insert')->unsigned()->default(0);
            $table->tinyInteger('ukr_&predic')->unsigned()->default(0);
        });
        
        Schema::create('ukr_noun', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_anim')->unsigned()->default(0);
            $table->tinyInteger('ukr_fname')->unsigned()->default(0);
            $table->tinyInteger('ukr_lname')->unsigned()->default(0);
            $table->tinyInteger('ukr_pname')->unsigned()->default(0);
            $table->tinyInteger('ukr_inanim')->unsigned()->default(0);
            $table->tinyInteger('ukr_unanim')->unsigned()->default(0);
            $table->tinyInteger('ukr_prop')->unsigned()->default(0);
            $table->tinyInteger('ukr_p')->unsigned()->default(0);
            $table->tinyInteger('ukr_s')->unsigned()->default(0);
            $table->tinyInteger('ukr_m')->unsigned()->default(0);
            $table->tinyInteger('ukr_f')->unsigned()->default(0);
            $table->tinyInteger('ukr_n')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_naz')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_rod')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_dav')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_zna')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_oru')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_mis')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_kly')->unsigned()->default(0);
            $table->tinyInteger('ukr_nv')->unsigned()->default(0);
            $table->tinyInteger('ukr_np')->unsigned()->default(0);
            $table->tinyInteger('ukr_ns')->unsigned()->default(0);
        });

        Schema::create('ukr_verb', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_imperf')->unsigned()->default(0);
            $table->tinyInteger('ukr_perf')->unsigned()->default(0);
            $table->tinyInteger('ukr_rev')->unsigned()->default(0);
            $table->tinyInteger('ukr_inf')->unsigned()->default(0);
            $table->tinyInteger('ukr_futr')->unsigned()->default(0);
            $table->tinyInteger('ukr_past')->unsigned()->default(0);
            $table->tinyInteger('ukr_pres')->unsigned()->default(0);
            $table->tinyInteger('ukr_impr')->unsigned()->default(0);
            $table->tinyInteger('ukr_impers')->unsigned()->default(0);
            $table->tinyInteger('ukr_1')->unsigned()->default(0);
            $table->tinyInteger('ukr_2')->unsigned()->default(0);
            $table->tinyInteger('ukr_3')->unsigned()->default(0);
            $table->tinyInteger('ukr_p')->unsigned()->default(0);
            $table->tinyInteger('ukr_s')->unsigned()->default(0);
            $table->tinyInteger('ukr_m')->unsigned()->default(0);
            $table->tinyInteger('ukr_f')->unsigned()->default(0);
            $table->tinyInteger('ukr_n')->unsigned()->default(0);
        });

        Schema::create('ukr_adj', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_compb')->unsigned()->default(0);
            $table->tinyInteger('ukr_compc')->unsigned()->default(0);
            $table->tinyInteger('ukr_comps')->unsigned()->default(0);
            $table->tinyInteger('ukr_short')->unsigned()->default(0);
            $table->tinyInteger('ukr_p')->unsigned()->default(0);
            $table->tinyInteger('ukr_s')->unsigned()->default(0);
            $table->tinyInteger('ukr_m')->unsigned()->default(0);
            $table->tinyInteger('ukr_f')->unsigned()->default(0);
            $table->tinyInteger('ukr_n')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_naz')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_rod')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_dav')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_zna')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_oru')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_mis')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_kly')->unsigned()->default(0);
            $table->tinyInteger('ukr_nv')->unsigned()->default(0);
            $table->tinyInteger('ukr_np')->unsigned()->default(0);
            $table->tinyInteger('ukr_ns')->unsigned()->default(0);
        });

        Schema::create('ukr_adjp', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_p')->unsigned()->default(0);
            $table->tinyInteger('ukr_s')->unsigned()->default(0);
            $table->tinyInteger('ukr_m')->unsigned()->default(0);
            $table->tinyInteger('ukr_f')->unsigned()->default(0);
            $table->tinyInteger('ukr_n')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_naz')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_rod')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_dav')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_zna')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_oru')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_mis')->unsigned()->default(0);
            $table->tinyInteger('ukr_v_kly')->unsigned()->default(0);
            $table->tinyInteger('ukr_nv')->unsigned()->default(0);
            $table->tinyInteger('ukr_np')->unsigned()->default(0);
            $table->tinyInteger('ukr_ns')->unsigned()->default(0);
        });

        Schema::create('ukr_&adjp', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_&&adjp', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_actv')->unsigned()->default(0);
            $table->tinyInteger('ukr_pasv')->unsigned()->default(0);
            $table->tinyInteger('ukr_imperf')->unsigned()->default(0);
            $table->tinyInteger('ukr_perf')->unsigned()->default(0);
            $table->tinyInteger('ukr_past')->unsigned()->default(0);
            $table->tinyInteger('ukr_pres')->unsigned()->default(0);
        });

        Schema::create('ukr_adv', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_compb')->unsigned()->default(0);
            $table->tinyInteger('ukr_compc')->unsigned()->default(0);
            $table->tinyInteger('ukr_comps')->unsigned()->default(0);
        });

        Schema::create('ukr_advp', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_perf')->unsigned()->default(0);
            $table->tinyInteger('ukr_imperf')->unsigned()->default(0);
            $table->tinyInteger('ukr_rev')->unsigned()->default(0);
        });

        Schema::create('ukr_prep', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_conj', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_subord')->unsigned()->default(0);
            $table->tinyInteger('ukr_coord')->unsigned()->default(0);
        });

        Schema::create('ukr_part', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_intj', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_numr', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_foreign', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_noninfl', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_abbr', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_bad', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_subst', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_rare', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_coll', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_slang', function (Blueprint $table) {
        $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_alt', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_&pron', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->tinyInteger('ukr_pers')->unsigned()->default(0);
            $table->tinyInteger('ukr_refl')->unsigned()->default(0);
            $table->tinyInteger('ukr_pos')->unsigned()->default(0);
            $table->tinyInteger('ukr_dem')->unsigned()->default(0);
            $table->tinyInteger('ukr_def')->unsigned()->default(0);
            $table->tinyInteger('ukr_int')->unsigned()->default(0);
            $table->tinyInteger('ukr_rel')->unsigned()->default(0);
            $table->tinyInteger('ukr_neg')->unsigned()->default(0);
            $table->tinyInteger('ukr_ind')->unsigned()->default(0);
            $table->tinyInteger('ukr_gen')->unsigned()->default(0);
            $table->tinyInteger('ukr_emph')->unsigned()->default(0);
        });

        Schema::create('ukr_&insert', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

        Schema::create('ukr_&predic', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukr_vocabulary');
    }
}
