<?php




Route::get('/test1', function () {
    return ' <h1> hy nadour1 to new work with laravel </h1>';
});
Route::get('/test2/{id}', function ($id) {
    return  $id ;
});
Route::get('/test3/{id?}', function ($id) {
    return ' <h1> hy nadour3 to new work with laravel </h1> ' .$id;
});



Route::get('show-number/{id}', function ($id) {
    return  $id;
})->name('a');

Route::get('show-string/{$id?}', function () {
    return  'welcome';
})->name('b');

//route parameter id





Route::namespace('Front')->group(function () {


    Route::get('users','NewController@show');
});




Route::group(['namespace' => 'Admin'], function () {


    Route::get('second','SecondController@post') ;
});



Route::resource('event', 'EventController');




Route::group(['namespace' => 'Front'], function () {

    Route::get('index','FirstController@getindex');
});









Route::get('master', function () {
    return view('master');
});
















Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...all router in the function



Route::get('/', function () {
    return view('welcome');
});
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
