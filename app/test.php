<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use dictParserController;

class test extends Model
{
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'ukr_vocabulary';

    /* Отримую ідентифікатор випадкового слова для пошукової підказки: */
    public static function exampleWord($startId,$operator,$wordPart)
    {
        return DB::table($wordPart)->where(
                array(
                    array('ukr_v_naz','=',1), // Тільки називний відмінок
                    //array('ukr_inanim','=',1), // Не істота
                    array('id',$operator,$startId) // Більше або менше заданого id
                )
            )->first();
    }

    /* Отримую прикметник для іменника: */
    public static function getAdjectivesForNoun($startId,$operator,$wordPart,$tempWordParam)
    {
        return DB::table($wordPart)->where(
                array(
                    array('ukr_p', '=', $tempWordParam['p']),
                    array('ukr_s', '=', $tempWordParam['s']),
                    array('ukr_m', '=', $tempWordParam['m']),
                    array('ukr_f', '=', $tempWordParam['f']),
                    array('ukr_n', '=', $tempWordParam['n']),
                    array('ukr_v_naz', '=', $tempWordParam['v_naz']),
                    array('ukr_v_rod', '=', $tempWordParam['v_rod']),
                    array('ukr_v_dav', '=', $tempWordParam['v_dav']),
                    array('ukr_v_zna', '=', $tempWordParam['v_zna']),
                    array('ukr_v_oru', '=', $tempWordParam['v_oru']),
                    array('ukr_v_mis', '=', $tempWordParam['v_mis']),
                    array('ukr_v_kly', '=', $tempWordParam['v_kly']),
                    array('id',$operator,$startId) // Більше або менше заданого id
                )
            )->first();
    }



    /* Отримання ід останнього слова: */
    public static function getLastWordId()
    {
        return test::find(1)->orderBy('id', 'desc')->first();
    }

    /* Пошук по назві слова: */
    public static function getWordInfo($word)
    {
        // Пошук 1 слова з бази даних:
        return test::where('word', '=', $word)->limit(1)->get();
    }

    /* Пошук по ідентифікатору слова: */
    public static function getWordById($wordId)
    {
        // Пошук 1 слова з бази даних:
        return test::where('id', '=', $wordId)->limit(1)->get();
    }

    /* Пошук слів з однаковим написанням: */
    public static function getSimilarWritedWord($word)
    {
        // Пошук 1 слова з бази даних:
        // return test::where('id', '=', $wordId)->limit(1)->get();
    }

    /* Параметри слова: */
    public static function wordParam($partOfSpeech,$id)
    {
        return DB::table($partOfSpeech)->where(
                array(
                    array('id','=',$id) // Більше або менше заданого id
                )
            )->first();
    }

    /* Пошук співпадінь по слову: */
    public static function WordСoincidence($word)
    {
        // Пошук 1 слова з бази даних:
        return test::where('word', '=', $word)->get();
    }




}
