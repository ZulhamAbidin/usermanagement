<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\documentcontroller;
use App\Http\Controllers\PencakerController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\ManagemenUserController;

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
    return view('/auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //DATA PEKERJA AJAX
});

require __DIR__ . '/auth.php';

Route::middleware('admin')->group(function () {
    Route::resource('data', DataController::class);
    Route::post('delete-data', [DataController::class, 'destroy']);

    Route::resource('/user', ManagemenUserController::class);

    //CETAK CUSTOM AJAX
    Route::get('/cetak', [CetakController::class, 'index']);

    // CETAK DATA PERTANGGAL
    Route::get('/cetak/cetak-data-pekerja-form', [datacontroller::class, 'cetakForm'])->name('cetak-data-pekerja-form');
    Route::get('/cetak/cetak-data-pertanggal/{tglawal}/{tglakhir}', [datacontroller::class, 'cetakPekerjaPertanggal'])->name('cetak-data-pertanggal');

    // DOCUMENT SHOW DOWNLOAD ADD
    Route::get('/document/index', [documentcontroller::class, 'uploaddocument']);
    Route::post('/document', [documentcontroller::class, 'store']);
    Route::get('/document/show', [documentcontroller::class, 'show']);
    Route::get('/document/download/{file}', [documentcontroller::class, 'download']);

    Route::get('/document/show/{id}', [documentcontroller::class, 'delete']);
    Route::get('/document/view/{is}', [documentcontroller::class, 'view']);
});

Route::get('/countries-list', [CountriesController::class, 'index'])->name('countries.list');
Route::post('/add-country', [CountriesController::class, 'addCountry'])->name('add.country');
Route::get('/getCountriesList', [CountriesController::class, 'getCountriesList'])->name('get.countries.list');
Route::post('/getCountryDetails', [CountriesController::class, 'getCountryDetails'])->name('get.country.details');
Route::post('/updateCountryDetails', [CountriesController::class, 'updateCountryDetails'])->name('update.country.details');
Route::post('/deleteCountry', [CountriesController::class, 'deleteCountry'])->name('delete.country');
Route::post('/deleteSelectedCountries', [CountriesController::class, 'deleteSelectedCountries'])->name('delete.selected.countries');

Route::resource('/pencaker', PencakerController::class);
