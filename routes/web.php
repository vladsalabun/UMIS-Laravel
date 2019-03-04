<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

# Головна:

Route::get('/','WordController@index');

# Одне слово:
Route::get('/word/{id}','WordController@wordById');

### Рандомне слово:
Route::get('/word/','WordController@random');


### Невірне слово:
Route::get('/badWord','WordController@badWord');

# Про програму:
Route::get('/about','WordController@about');

// Всі слова:
Route::get('/vocabulary','WordController@vocabulary');

// АРІ:
Route::get('/api','apiController@apiInfo');

### Користувацький пошук по слову:
Route::post('/word', function() {

    // Якщо передано пост:
    if (Request::isMethod('post')) {

        // Дізнаюсь вміст поля word:
        $word = Request::input('word');

        // Отримую перше співпадіння з бази даних:
        $words = App\test::getWordInfo($word);

        if(count($words) == 0) {
            // Перенаправляю на сторінку помилки:
            return redirect('badWord');
        }

        // Перенаправляю на сторінку цього слова:
        return redirect('word/'.$words[0]->id);

    }

});

Route::get('/parsing', 'dictParserController@sourceParsing');

/* ОСОБИСТИЙ КАБІНЕТ */

# Вихід з особистого кабінету:
Route::get('/logout', 'privateController@logout');

# Домашня сторінка:
Route::get('/home','privateController@homepage');


Auth::routes();
