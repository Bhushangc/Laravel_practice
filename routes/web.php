<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\resourceController;

Route::get('/homepage', [homeController::class,'homepage'])->name('home');
Route::get('/about',[homeController::class,'about'])->name('about');
// Route::get('/store', function () {
//     $category = request('category');
//     if(isset($category)){
//         return 'store'.$category;

//     }
//     else{
//         return 'store store';
//     }
    
// }); using querry string
Route::resource('guitars',resourceController::class);
Route::get('/store/{category?}/{item?}', function ($category = null,$item=null) {
    if(isset($category)){
        if(isset($item)){
            return 'store'.$category . $item;
        }
        return 'store'.$category;

    }
    else{
        return 'store store';
    }
    
});