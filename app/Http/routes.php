<?php
/**
 * Created by PhpStorm.
 * User: katerina
 * Date: 25/9/2017
 * Time: 4:48 μμ
 */

Route::get('/', function () {
    return view('welcome');
    // return "Hi You";
});
Route::post('/upload', 'Controller@upload');

