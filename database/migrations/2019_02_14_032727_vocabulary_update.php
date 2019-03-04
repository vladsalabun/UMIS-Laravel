<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VocabularyUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ukrainian_vocabulary', function (Blueprint $table) {
            $table->tinyInteger('noun')->nullable();
            $table->tinyInteger('anim')->nullable();
            $table->tinyInteger('fname')->nullable();
            $table->tinyInteger('lname')->nullable();
            $table->tinyInteger('pname')->nullable();
            $table->tinyInteger('inanim')->nullable();
            $table->tinyInteger('unanim')->nullable();
            $table->tinyInteger('prop')->nullable();
            $table->tinyInteger('verb')->nullable();
            $table->tinyInteger('imperf')->nullable();
            $table->tinyInteger('perf')->nullable();
            $table->tinyInteger('rev')->nullable();
            $table->tinyInteger('inf')->nullable();
            $table->tinyInteger('futr')->nullable();
            $table->tinyInteger('past')->nullable();
            $table->tinyInteger('pres')->nullable();
            $table->tinyInteger('impr')->nullable();
            $table->tinyInteger('impers')->nullable();
            $table->tinyInteger('1')->nullable();
            $table->tinyInteger('2')->nullable();
            $table->tinyInteger('3')->nullable();
            $table->tinyInteger('adj')->nullable();
            $table->tinyInteger('compb')->nullable();
            $table->tinyInteger('compc')->nullable();
            $table->tinyInteger('comps')->nullable();
            $table->tinyInteger('short')->nullable();
            $table->tinyInteger('adjp')->nullable();
            $table->tinyInteger('&adjp')->nullable();
            $table->tinyInteger('&&adjp')->nullable();
            $table->tinyInteger('actv')->nullable();
            $table->tinyInteger('pasv')->nullable();
            $table->tinyInteger('adv')->nullable();
            $table->tinyInteger('advp')->nullable();
            $table->tinyInteger('prep')->nullable();
            $table->tinyInteger('conj')->nullable();
            $table->tinyInteger('subord')->nullable();
            $table->tinyInteger('coord')->nullable();
            $table->tinyInteger('part')->nullable();
            $table->tinyInteger('intj')->nullable();
            $table->tinyInteger('numr')->nullable();
            $table->tinyInteger('foreign')->nullable();
            $table->tinyInteger('noninfl')->nullable();
            $table->tinyInteger('v_naz')->nullable();
            $table->tinyInteger('v_rod')->nullable();
            $table->tinyInteger('v_dav')->nullable();
            $table->tinyInteger('v_zna')->nullable();
            $table->tinyInteger('v_oru')->nullable();
            $table->tinyInteger('v_mis')->nullable();
            $table->tinyInteger('v_kly')->nullable();
            $table->tinyInteger('nv')->nullable();
            $table->tinyInteger('np')->nullable();
            $table->tinyInteger('ns')->nullable();
            $table->tinyInteger('p')->nullable();
            $table->tinyInteger('s')->nullable();
            $table->tinyInteger('m')->nullable();
            $table->tinyInteger('f')->nullable();
            $table->tinyInteger('n')->nullable();
            $table->tinyInteger('abbr')->nullable();
            $table->tinyInteger('bad')->nullable();
            $table->tinyInteger('subst')->nullable();
            $table->tinyInteger('rare')->nullable();
            $table->tinyInteger('coll')->nullable();
            $table->tinyInteger('slang')->nullable();
            $table->tinyInteger('alt')->nullable();
            $table->tinyInteger('&pron')->nullable();
            $table->tinyInteger('&numr')->nullable();
            $table->tinyInteger('&&numr')->nullable();
            $table->tinyInteger('&insert')->nullable();
            $table->tinyInteger('&predic')->nullable();
            $table->tinyInteger('pers')->nullable();
            $table->tinyInteger('refl')->nullable();
            $table->tinyInteger('pos')->nullable();
            $table->tinyInteger('dem')->nullable();
            $table->tinyInteger('def')->nullable();
            $table->tinyInteger('int')->nullable();
            $table->tinyInteger('rel')->nullable();
            $table->tinyInteger('neg')->nullable();
            $table->tinyInteger('ind')->nullable();
            $table->tinyInteger('gen')->nullable();
            $table->tinyInteger('emph')->nullable();
            $table->tinyInteger('xp1')->nullable();
            $table->tinyInteger('xp2')->nullable();
            $table->tinyInteger('xp3')->nullable();
            $table->tinyInteger('xp4')->nullable();
            $table->tinyInteger('xp5')->nullable();
            $table->tinyInteger('onomat')->nullable();
            $table->tinyInteger('dimin')->nullable();
            $table->tinyInteger('ranim')->nullable();
            $table->tinyInteger('rinanim')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
