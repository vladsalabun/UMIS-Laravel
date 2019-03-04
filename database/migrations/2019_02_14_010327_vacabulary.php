<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vacabulary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Створення нової таблиці:
        Schema::create('ukrainian_vocabulary', function (Blueprint $table) {
            $table->integer('ID')->lenght(11);
            $table->string('word', 150);
            $table->integer('noun')->lenght(1)->nullable();
            $table->integer('anim')->lenght(1)->nullable();
            $table->integer('fname')->lenght(1)->nullable();
            $table->integer('lname')->lenght(1)->nullable();
            $table->integer('pname')->lenght(1)->nullable();
            $table->integer('inanim')->lenght(1)->nullable();
            $table->integer('unanim')->lenght(1)->nullable();
            $table->integer('prop')->lenght(1)->nullable();
            $table->integer('verb')->lenght(1)->nullable();
            $table->integer('imperf')->lenght(1)->nullable();
            $table->integer('perf')->lenght(1)->nullable();
            $table->integer('rev')->lenght(1)->nullable();
            $table->integer('inf')->lenght(1)->nullable();
            $table->integer('futr')->lenght(1)->nullable();
            $table->integer('past')->lenght(1)->nullable();
            $table->integer('pres')->lenght(1)->nullable();
            $table->integer('impr')->lenght(1)->nullable();
            $table->integer('impers')->lenght(1)->nullable();
            $table->integer('1')->lenght(1)->nullable();
            $table->integer('2')->lenght(1)->nullable();
            $table->integer('3')->lenght(1)->nullable();
            $table->integer('adj')->lenght(1)->nullable();
            $table->integer('compb')->lenght(1)->nullable();
            $table->integer('compc')->lenght(1)->nullable();
            $table->integer('comps')->lenght(1)->nullable();
            $table->integer('short')->lenght(1)->nullable();
            $table->integer('adjp')->lenght(1)->nullable();
            $table->integer('&adjp')->lenght(1)->nullable();
            $table->integer('&&adjp')->lenght(1)->nullable();
            $table->integer('actv')->lenght(1)->nullable();
            $table->integer('pasv')->lenght(1)->nullable();
            $table->integer('adv')->lenght(1)->nullable();
            $table->integer('advp')->lenght(1)->nullable();
            $table->integer('prep')->lenght(1)->nullable();
            $table->integer('conj')->lenght(1)->nullable();
            $table->integer('subord')->lenght(1)->nullable();
            $table->integer('coord')->lenght(1)->nullable();
            $table->integer('part')->lenght(1)->nullable();
            $table->integer('intj')->lenght(1)->nullable();
            $table->integer('numr')->lenght(1)->nullable();
            $table->integer('foreign')->lenght(1)->nullable();
            $table->integer('noninfl')->lenght(1)->nullable();
            $table->integer('v_naz')->lenght(1)->nullable();
            $table->integer('v_rod')->lenght(1)->nullable();
            $table->integer('v_dav')->lenght(1)->nullable();
            $table->integer('v_zna')->lenght(1)->nullable();
            $table->integer('v_oru')->lenght(1)->nullable();
            $table->integer('v_mis')->lenght(1)->nullable();
            $table->integer('v_kly')->lenght(1)->nullable();
            $table->integer('nv')->lenght(1)->nullable();
            $table->integer('np')->lenght(1)->nullable();
            $table->integer('ns')->lenght(1)->nullable();
            $table->integer('p')->lenght(1)->nullable();
            $table->integer('s')->lenght(1)->nullable();
            $table->integer('m')->lenght(1)->nullable();
            $table->integer('f')->lenght(1)->nullable();
            $table->integer('n')->lenght(1)->nullable();
            $table->integer('abbr')->lenght(1)->nullable();
            $table->integer('bad')->lenght(1)->nullable();
            $table->integer('subst')->lenght(1)->nullable();
            $table->integer('rare')->lenght(1)->nullable();
            $table->integer('coll')->lenght(1)->nullable();
            $table->integer('slang')->lenght(1)->nullable();
            $table->integer('alt')->lenght(1)->nullable();
            $table->integer('&pron')->lenght(1)->nullable();
            $table->integer('&numr')->lenght(1)->nullable();
            $table->integer('&&numr')->lenght(1)->nullable();
            $table->integer('&insert')->lenght(1)->nullable();
            $table->integer('&predic')->lenght(1)->nullable();
            $table->integer('pers')->lenght(1)->nullable();
            $table->integer('refl')->lenght(1)->nullable();
            $table->integer('pos')->lenght(1)->nullable();
            $table->integer('dem')->lenght(1)->nullable();
            $table->integer('def')->lenght(1)->nullable();
            $table->integer('int')->lenght(1)->nullable();
            $table->integer('rel')->lenght(1)->nullable();
            $table->integer('neg')->lenght(1)->nullable();
            $table->integer('ind')->lenght(1)->nullable();
            $table->integer('gen')->lenght(1)->nullable();
            $table->integer('emph')->lenght(1)->nullable();
            $table->integer('xp1')->lenght(1)->nullable();
            $table->integer('xp2')->lenght(1)->nullable();
            $table->integer('xp3')->lenght(1)->nullable();
            $table->integer('xp4')->lenght(1)->nullable();
            $table->integer('xp5')->lenght(1)->nullable();
            $table->integer('onomat')->lenght(1)->nullable();
            $table->integer('dimin')->lenght(1)->nullable();
            $table->integer('ranim')->lenght(1)->nullable();
            $table->integer('rinanim')->lenght(1)->nullable();
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
