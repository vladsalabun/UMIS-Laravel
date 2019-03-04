<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VocabularyTinyIng extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ukrainian_vocabulary', function (Blueprint $table) {
            
            $table->dropColumn('noun');
            $table->dropColumn('anim');
            $table->dropColumn('fname');
            $table->dropColumn('lname');
            $table->dropColumn('pname');
            $table->dropColumn('inanim');
            $table->dropColumn('unanim');
            $table->dropColumn('prop');
            $table->dropColumn('verb');
            $table->dropColumn('imperf');
            $table->dropColumn('perf');
            $table->dropColumn('rev');
            $table->dropColumn('inf');
            $table->dropColumn('futr');
            $table->dropColumn('past');
            $table->dropColumn('pres');
            $table->dropColumn('impr');
            $table->dropColumn('impers');
            $table->dropColumn('1');
            $table->dropColumn('2');
            $table->dropColumn('3');
            $table->dropColumn('adj');
            $table->dropColumn('compb');
            $table->dropColumn('compc');
            $table->dropColumn('comps');
            $table->dropColumn('short');
            $table->dropColumn('adjp');
            $table->dropColumn('&adjp');
            $table->dropColumn('&&adjp');
            $table->dropColumn('actv');
            $table->dropColumn('pasv');
            $table->dropColumn('adv');
            $table->dropColumn('advp');
            $table->dropColumn('prep');
            $table->dropColumn('conj');
            $table->dropColumn('subord');
            $table->dropColumn('coord');
            $table->dropColumn('part');
            $table->dropColumn('intj');
            $table->dropColumn('numr');
            $table->dropColumn('foreign');
            $table->dropColumn('noninfl');
            $table->dropColumn('v_naz');
            $table->dropColumn('v_rod');
            $table->dropColumn('v_dav');
            $table->dropColumn('v_zna');
            $table->dropColumn('v_oru');
            $table->dropColumn('v_mis');
            $table->dropColumn('v_kly');
            $table->dropColumn('nv');
            $table->dropColumn('np');
            $table->dropColumn('ns');
            $table->dropColumn('p');
            $table->dropColumn('s');
            $table->dropColumn('m');
            $table->dropColumn('f');
            $table->dropColumn('n');
            $table->dropColumn('abbr');
            $table->dropColumn('bad');
            $table->dropColumn('subst');
            $table->dropColumn('rare');
            $table->dropColumn('coll');
            $table->dropColumn('slang');
            $table->dropColumn('alt');
            $table->dropColumn('&pron');
            $table->dropColumn('&numr');
            $table->dropColumn('&&numr');
            $table->dropColumn('&insert');
            $table->dropColumn('&predic');
            $table->dropColumn('pers');
            $table->dropColumn('refl');
            $table->dropColumn('pos');
            $table->dropColumn('dem');
            $table->dropColumn('def');
            $table->dropColumn('int');
            $table->dropColumn('rel');
            $table->dropColumn('neg');
            $table->dropColumn('ind');
            $table->dropColumn('gen');
            $table->dropColumn('emph');
            $table->dropColumn('xp1');
            $table->dropColumn('xp2');
            $table->dropColumn('xp3');
            $table->dropColumn('xp4');
            $table->dropColumn('xp5');
            $table->dropColumn('onomat');
            $table->dropColumn('dimin');
            $table->dropColumn('ranim');
            $table->dropColumn('rinanim');
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
