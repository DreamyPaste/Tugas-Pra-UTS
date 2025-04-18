<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@show')->name('mahasiswa.detail');;
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index')->name('mahasiswa.index');
Route::get('/create-mahasiswa', 'App\Http\Controllers\MahasiswaController@create')->name('mahasiswa.create-form');;
Route::post('/mahasiswa', 'App\Http\Controllers\MahasiswaController@store')->name('mahasiswa.create');
Route::get('/edit-mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@edit')->name('mahasiswa.update-form');
Route::put('/mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@update')->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', 'App\Http\Controllers\MahasiswaController@destroy')->name('mahasiswa.delete');


Route::get('/matakuliah/{id}', 'App\Http\Controllers\MataKuliahController@show')->name('mmatakuliah.detail');;
Route::get('/matakuliah', 'App\Http\Controllers\MataKuliahController@index')->name('matakuliah.index');
Route::get('/create-matakuliah', 'App\Http\Controllers\MataKuliahController@create')->name('matakuliah.create-form');;
Route::post('/matakuliah', 'App\Http\Controllers\MataKuliahController@store')->name('matakuliah.create');
Route::get('/edit-matakuliah/{id}', 'App\Http\Controllers\MataKuliahController@edit')->name('matakuliah.update-form');
Route::put('/matakuliah/{id}', 'App\Http\Controllers\MataKuliahController@update')->name('matakuliah.update');
Route::delete('/matakuliah/{id}', 'App\Http\Controllers\MataKuliahController@destroy')->name('matakuliah.delete');


Route::get('/mksemester/{id}', 'App\Http\Controllers\MkSemesterController@show')->name('mksemester.detail');;
Route::get('/mksemester', 'App\Http\Controllers\MkSemesterController@index')->name('mksemester.index');
Route::get('/create-mksemester', 'App\Http\Controllers\MkSemesterController@create')->name('mksemester.create-form');;
Route::post('/mksemester', 'App\Http\Controllers\MkSemesterController@store')->name('mksemester.create');
Route::get('/edit-mksemester/{id}', 'App\Http\Controllers\MkSemesterController@edit')->name('mksemester.update-form');
Route::put('/mksemester/{id}', 'App\Http\Controllers\MkSemesterController@update')->name('mksemester.update');
Route::delete('/mksemester/{id}', 'App\Http\Controllers\MkSemesterController@destroy')->name('mksemester.delete');
