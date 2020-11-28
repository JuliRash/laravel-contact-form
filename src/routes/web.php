<?php

//Route::get('contact/', function (){
//    return view('greetr::contact');
//});
//Route::post('contact/', function (){
////    logic
//    return 'contacted julipels';
//})->name('contact');

Route::group(['namespace' => 'Julius\Greetr\Http\Controllers', 'middleware' => ['web']], function (){
    Route::get('/contact', 'ContactFormController@index');
    Route::post('/contact', 'ContactFormController@sendMail')->name('contact');
});
