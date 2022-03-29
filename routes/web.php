<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Admin\Country\CountryAddComponent;
use App\Http\Livewire\Project\Detail\PartDetailComponent;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/' , HomeComponent::class);

Route::get('/sehir/{sira}' , PartDetailComponent::class)->name('country.detail');
Route::get('/add' , CountryAddComponent::class)->name('country.add');


