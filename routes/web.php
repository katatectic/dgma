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
})->name('welcome');

// Route::get('/hello', function () {
//     return view('hello');
// })->name('hello');

// Route::get('/hello', function () {
//     return view('hello');
// })->name('hello');

// Route::get('foo', function () {
//     return '<h1>Hello World</h1>';
// });

Route::get('hello', 'UsersController@getAllUsers')->name('hello');

Route::get('foo', 'UsersController@getAllUsers');

Route::get('exp', function () {
     return view('exp');
 })->name('exp');

//Route::post('/hello', 'UsersController@addUser')->name('add_user');


Auth::routes();

Route::get('/home/{id}', 'HomeController@index')->name('home');

Route::post('CheckAge', function () {
     return route('hello');
 })->middleware('CheckAge')->name('CheckAge');

//Route::get('students', function () {
//    return view('students');
//});

Route::get('students', 'StudentsController@getAllStudents')->name('students');

Route::get('stud_delete/{id}','StudentsController@deleteStudent')->name('stud_delete');

Route::get('/stud_add', function () {
    return view('stud_add');
})->name('stud_add');

Route::post('student_add','StudentsController@addStudent')->name('student_add');

Route::get('stud_edit/{id}','StudentsController@editStudent')->name('stud_edit');

Route::post('student_edit/{id}','StudentsController@updateStudent')->name('student_edit');

Route::get('cars','CarsController@getAllCars')->name('cars');

Route::get('deletecars/{id}','CarsController@deleteCars')->name('deletecars');

Route::get('phones','PhoneController@getAllPhones')->name('phones');
Route::get('userphones/{id}','PhoneController@userPhones')->name('userphones');