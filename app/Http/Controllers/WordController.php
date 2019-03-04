<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Додаємо простір імен:
use App;
use App\Http\Controllers;

class WordController extends Controller
{

    // Сторінка входу:
    public function login()
    {
        return view('pages/login');
    }

    // Рандомне слово з параметрами:
    public function getRandomWord()
    {
        // Отримую максимальний ідентифікатор слова:
        $lastWordId = App\test::getLastWordId()->id;

        // Обираю рандомний ідентифікатор:
        $randomId = random_int(1,$lastWordId);

        $wordParts = array('ukr_noun','ukr_adj','ukr_adjp');
        $randompart = $wordParts[random_int(0,(count($wordParts) - 1))];

        // Знаходжу випадкове слово, що йде після вказаного ідентифікатора:
        $wordParam = App\test::exampleWord($randomId,'>',$randompart);

        // Якщо немає жодного запису, то запитую слово, яке йде до вказаного ідентифікатора:
        if($wordParam == null) {
            $wordParam = App\test::exampleWord($randomId,'<',$randompart);
        }

        return $wordParam;
    }


    // Головна сторінка:
    public function index()
    {
        // Отримую рандомне слово:
        $wordParam = $this->getRandomWord();

        //$word->id; // Які ще параметри є?
        $word = App\test::getWordById($wordParam->id)[0];

        // Передаю масив строк у шаблон:
        return view('pages/index', compact('word'));
    }

    // Сторінка для хибного слова:
    public function badWord()
    {
        // Отримую рандомне слово:
        $wordParam = $this->getRandomWord();

        //$word->id; // Які ще параметри є?
        $word = App\test::getWordById($wordParam->id)[0];

        // Перенаправляю на сторінку помилки:
        return view('pages/badWord', compact('word'));
    }


    // Сторінка рандомного слова:
    public function random()
    {
        // Отримую рандомне слово:
        $wordParam = $this->getRandomWord();

        // Перенаправляю на сторінку цього слова:
        return redirect('word/'.$wordParam->id);
    }



    // Сторінка одного слова:
    public function wordById($id)
    {
        $searchingWordParam = array();
        $suggestions = array();
        $tempWordParam = array();

        // Пошук по id:
        $word = App\test::getWordById($id)[0];

        // Масив параметрів мови:
        $partOfSpeechArray = dictParserController::partsOfSpeech;

        // Перевіряю всі параметри для обраного слова:
        foreach ($partOfSpeechArray as $partOfSpeech => $explain) {

            // Параметр українською мовою:
            $currentMethod = 'ukr_'.$partOfSpeech;

            // Якщо слово відповідає параметру:
            if ($word->$currentMethod == 1) {

                // і якщо параметр є масивом:
                if (is_array($explain)) {

                    // Кладемо у масив параметри іменників і прикметників:
                    if( $currentMethod == 'ukr_noun' or $currentMethod == 'ukr_adj' ) {
                        // Створюю тимчасовий масив параметрів:
                        $tempWordParam = dictParserController::nounAndAdj;
                    }

                    // Зберігаю в масив назву частини мови:
                    foreach ($explain as $partOfSpeechName => $partOfSpeechParam) {

                        $searchingWordParam[] = $partOfSpeechName;

                        // Дізнаюсь додаткові параметри:
                        $wordParam = App\test::wordParam($currentMethod,$word->id);
                        foreach ($wordParam as $wordParamName => $wordParamValue) {

                            $tmpParamName = substr($wordParamName,4);

                            // Якщо параметри є:
                            if($tmpParamName == true) {

                                // Синхронізую параметри:
                                if(isset($tempWordParam[$tmpParamName])) {
                                    $tempWordParam[$tmpParamName] = $wordParamValue;
                                }

                                if ($wordParamValue == 1) {

                                    // І зберігаю назву параметру в масив:
                                    $searchingWordParam[] = $partOfSpeechParam[$tmpParamName];

                                }

                            }

                        }

                    }

                    // Якщо це іменник, то отримуємо для нього прикметники:
                    if( $currentMethod == 'ukr_noun') {
                        $suggestions[] = $this->getAdjectivesForNoun($word->word,$tempWordParam,'ukr_adj');
                    }
                    // Якщо це прикметник, то отримуємо для нього іменники:
                    if( $currentMethod == 'ukr_adj') {
                        $suggestions[] = $this->getAdjectivesForNoun($word->word,$tempWordParam,'ukr_noun');
                    }

                }

            }

        }

        // Слово з великої букви:
        $word->word = WordController::upFirstLetter($word->word);

        // Передаю змінну у шаблон:
        return view('pages/oneWord', compact(
            'word',
            'coincidences',
            'partOfSpeechArray',
            'suggestions'
            )
        );
    }


    public function getAdjectivesForNoun($noun,$tempWordParam,$table) {

        $array = array();

        for($i = 0; $i < 12; $i++) {
            // Отримую максимальний ідентифікатор слова:
            $lastWordId = App\test::getLastWordId()->id;

            // Обираю рандомний ідентифікатор:
            $randomId = random_int(1,$lastWordId);

            // Знаходжу випадкове слово, що йде після вказаного ідентифікатора:
            $wordParam = App\test::getAdjectivesForNoun($randomId,'>',$table,$tempWordParam);

            // Якщо немає жодного запису, то запитую слово, яке йде до вказаного ідентифікатора:
            if($wordParam == null) {
                $wordParam = App\test::getAdjectivesForNoun($randomId,'<',$table,$tempWordParam);
            }

            // Беру прикметник:
            $adj = App\test::getWordById($wordParam->id)[0];

            // Кладу у масив:
            if( $table == 'ukr_noun' ) {
                $array[] = WordController::upFirstLetter($noun).' '.$adj->word;
            }
            if( $table == 'ukr_adj' ) {
                $array[] = WordController::upFirstLetter($adj->word).' '.$noun;
            }


        }

        return $array;

    }


    // Сторінка всіх слів:
    public function vocabulary()
    {
        // Отримую останній ІД:
        $lastWordId = App\test::getLastWordId()->id;

        // Знаходжу слово з таким ІД:
        $word = App\test::find(random_int(1,$lastWordId));

        // Передаю змінну у шаблон:
        return view('pages/allWords', compact('word'));
    }

    // Сторінка про нас:
    public function about()
    {
        return view('pages/about');
    }

    public static function upFirstLetter($str, $encoding = 'UTF-8')
    {
        return mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding)
        . mb_substr($str, 1, null, $encoding);
    }

}
