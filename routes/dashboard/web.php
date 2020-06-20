<?php




Route::group(['middleware' => 'admin'],function (){

    Route::get('/','HomeController@index')->name('index');
    Route::get('/login','LoginController@loginPage')->name('loginPage');
    Route::resource('users','Users')->except('show');
    Route::resource('settings','Settings')->except('show');

    //Route::get('/users/getData','Users@getData')->name('users.getData');

});
