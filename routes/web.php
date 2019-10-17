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

Route::get('/', function () {
    return view('welcome');
});

Route::get('khoahocLaravel',function(){
	echo "<h1>Chao mung den voi Khoa hoc Laravel</h1>";
});

//Dinh danh Route
Route::get('Route1',['as'=>'MyRoute',function(){
	echo "<h1>Chao mung den voi Khoa hoc Laravel</h1>";
}]);
// truyen tham so
Route::get('myroute/{ten}',function($ten){
	echo "<h1>My name is $ten</h1>";
});
// khong tuyen tham so
Route::get('myroute/{ten?}',function($ten='default'){
	echo "<h1>My name is $ten</h1>";
});
// Dieu kien chu
Route::get('myroute/{ten}',function($ten){
	echo "<h1>My name is $ten</h1>";
})->where(['ten'=>'[a-zA-Z]+']);
//Dieu kien chu
Route::get('mynumber/{number}',function($number){
	echo "<h1>My number is $number</h1>";
})->where(['number'=>'[0-9]+']);

//Goi controller MyController
Route::get('GoiController','MyController@Hello');
//Truyen tham so trong Controller
Route::get('Myname/{name}','MyController@Myname');

//URL
Route::get('MyRequest',"MyController@GetURL");