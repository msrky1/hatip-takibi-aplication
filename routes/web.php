<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Admin\Country\CountryAddComponent;
use App\Http\Livewire\Project\Detail\PartDetailComponent;
use App\Http\Livewire\HelpComponent;
use App\Http\Livewire\Project\SearchComponent;
use App\Http\Livewire\Data\DataTableComponent;


 use App\Http\Controllers\PeopleAddController;
 use App\Http\Controllers\HatimAlController;

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



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   // return view('dashboard');
 // })->name('dashboard');


Route::get('/' , HomeComponent::class);

Route::get('/sehir/{sira}' , PartDetailComponent::class)->name('country.detail');
Route::get('/add' , CountryAddComponent::class)->name('country.add');

Route::get('/hatim/sorgula' ,  SearchComponent::class)->name('hatim.sorgula');
Route::get('/data/table' ,  DataTableComponent::class)->name('data.table');



Route::controller(PeopleAddController::class)->group(function () {
   
    Route::post('/add/person', [PeopleAddController::class, 'addPerson'])->name('add.person');
   // Route::get('/delete/person', [PartDetailComponent::class, 'deletePerson'])->name('delete.person');
   // Route::get('/delete/yeni/{country_id}', [PartDetailComponent::class, 'deletePerson'])->name('yeni.cuz.baslat');
    Route::get('/hatim/al', [PeopleAddController::class, 'deletePerson'])->name('hatim.al');


    Route::post('/toplu/hatim/al', [HatimAlController::class, 'hatimAl'])->name('hatim.al.toplu');
    Route::get('/yardim', HelpComponent::class);



    
});

Route::get('pdf' , function() {

    $name = 'Ali'; 

    $pdf  = PDF::loadView('pdf' , compact('name'));
    return $pdf->stream();

});



