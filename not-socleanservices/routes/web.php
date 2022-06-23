<?php

use App\Http\Controllers\BroomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
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

Route::get('/',[Homecontroller::class, 'index'])->name('home.index'); 

Route::get('/about', [Homecontroller::class, 'about'])->name('home.about');

Route::get('/contact',[Homecontroller::class, 'contact'])->name('home.contact');

Route::resource('brooms', BroomsController::class);

Route::get('/store/{category?}/{item?}', function($category = null, $item = null){  
if(isset($category)){

    if(isset($item)){
    return "Welcome to the Shop for {$category} for {$item}";
    }
    return 'you are viewing the store for' . strip_tags($category);
}
return 'you are viewing all the intruments';
    
});