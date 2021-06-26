<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateDetailsController;

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
    $languages = ['Hindi', 'English', 'Gujrati'];
    $locations = [['id' => '1', 'name' => 'Rajasthan'], ['id' => '2', 'name' => 'Pune'], ['id' => '3', 'name' => 'Banglore'], ['id' => '4', 'name' => 'Noida']];
    $technical_skill = ['PHP', 'MySQL', 'Laravel', 'Wed Design', 'UI/UX Design', 'Mobile Design'];
    return view('welcome', ['languages' => $languages, 'technical_skill' => $technical_skill, 'locations' => $locations]);
})->name('homePage');

Auth::routes(['register' => false]);
Route::post('submit-data', [CandidateDetailsController::class, 'store'])->name('submit-data');
Route::middleware(['is_admin'])->group(function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('admin/candidate-details', [CandidateDetailsController::class, 'index'])->name('admin.candidateDetails');
    Route::get('admin/candidate-details/{id}', [CandidateDetailsController::class, 'show']);
    Route::post('admin/candidate-delete/{id}', [CandidateDetailsController::class, 'destroy']);
});
