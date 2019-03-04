<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UnsignedLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Зміна параметрів стовпця:
        Schema::table('newWords', function (Blueprint $table) {
            $table->integer('lang')->unsigned()->change(); // нове слово, яке я хочу вивчити
        });
        
        // Створення нової таблиці:
        Schema::create('newWords_translation', function (Blueprint $table) {
            $table->integer('mainWordID'); // айді слова, яке перекладаємо
            $table->integer('translatedWordID'); // айді перекладеного слова
            $table->integer('lang'); // мова, на яку перекладаємо
        });
        
        // Видалення стовпця:
        Schema::table('newWords', function (Blueprint $table) {
          $table->dropColumn('updated_at');
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
