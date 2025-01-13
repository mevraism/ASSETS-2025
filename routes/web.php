<?php

use App\Http\Controllers\DetailDivisiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GaleriController;

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
Auth::routes([
    'register' => false,
    'reset'    => false,
]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/kandidat', [App\Http\Controllers\KandidatController::class, 'index'])->name('home.kandidat');

Route::get('/home/voter', [App\Http\Controllers\VoterController::class, 'index'])->name('home.voter');

Route::post('/home/voter/tambah', [App\Http\Controllers\VoterController::class, 'tambah'])->name('voter.tambah');

Route::post('/home/voter/generateAll', [App\Http\Controllers\VoterController::class, 'generateTokenAll'])->name('generateAll');

Route::post('/home/voter/{email}', [App\Http\Controllers\VoterController::class, 'token'])->name('voter.token');

Route::post('/home/voter/delete/{email}', [App\Http\Controllers\VoterController::class, 'delete'])->name('voter.delete');

Route::post('/token', [App\Http\Controllers\VotingController::class, 'sync'])->name('token.sync');

Route::post('/vote/{token}', [App\Http\Controllers\VotingController::class, 'submit'])->name('token.submit');

Route::post('/home/kandidat/tambah', [App\Http\Controllers\KandidatController::class, 'tambah'])->name('kandidat.tambah');

Route::post('/home/kandidat/delete/{no}', [App\Http\Controllers\KandidatController::class, 'delete'])->name('kandidat.delete');

Route::post('/home/kandidat/update/{no}', [App\Http\Controllers\KandidatController::class, 'update'])->name('kandidat.update');

Route::get('/vote', [App\Http\Controllers\VotingController::class, 'index'])->name('vote.index');

Route::get('/livecount', [App\Http\Controllers\VotingController::class, 'livecount'])->name('vote.livecount');

Route::get('/home/pengaturan', [App\Http\Controllers\PengaturanController::class, 'index'])->name('home.pengaturan');

Route::post('/home/pengaturan/tambah', [App\Http\Controllers\PengaturanController::class, 'tambah'])->name('pengaturan.tambah');

Route::post('/home/pengaturan/delete/{no}', [App\Http\Controllers\PengaturanController::class, 'delete'])->name('pengaturan.delete');

Route::post('/home/pengaturan/deletevoting', [App\Http\Controllers\VotingController::class, 'delete'])->name('delete.voting');

Route::post('/home/pengaturan/update/{no}', [App\Http\Controllers\PengaturanController::class, 'update'])->name('pengaturan.update');

Route::get('/tentang', [App\Http\Controllers\LandingPageController::class, 'tentang'])->name('tentang');

Route::get('/struktur', [App\Http\Controllers\LandingPageController::class, 'struktur'])->name('struktur');

Route::get('/news', [App\Http\Controllers\LandingPageController::class, 'news'])->name('news');

Route::get('/testimoni', [App\Http\Controllers\LandingPageController::class, 'testimoni'])->name('testimoni');


Route::get('/newstruktur', [App\Http\Controllers\LandingPageController::class, 'newstruktur'])->name('newstruktur');

Route::get('/galeri', [App\Http\Controllers\LandingPageController::class, 'galeri'])->name('galeri');


Route::get('/struktur/kastrad',[DetailDivisiController::class,'kastrad']);
Route::get('/struktur/humas',[DetailDivisiController::class,'humas']);
Route::get('/struktur/minkat',[DetailDivisiController::class,'minkat']);
Route::get('/struktur/psdm',[DetailDivisiController::class,'psdm']);
Route::get('/struktur/kreatif',[DetailDivisiController::class,'kreatif']);
Route::get('/struktur/pengurus-harian',[DetailDivisiController::class,'pengurus_harian']);

Route::get('/news/setan-alas',[NewsController::class,'setan_alas']);
Route::get('/news/pimnas-2023',[NewsController::class,'pimnas_2023']);
Route::get('/news/tges',[NewsController::class,'TGES']);

Route::post('/home/voter/send/{email}', [App\Http\Controllers\VoterController::class, 'sendEmail'])->name('email.send');

Route::post('/home/voter/send/sendAll/All', [App\Http\Controllers\VoterController::class, 'sendEmailAll'])->name('email.all');

Route::get('/galeri/{year?}', [App\Http\Controllers\GaleriController::class, 'showGallery'])->name('galeri.year');
