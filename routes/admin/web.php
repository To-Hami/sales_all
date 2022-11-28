<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use PHPUnit\TextUI\XmlConfiguration\Group;

Route::middleware([
    // 'localeSessionRedirect',
    // 'localizationRedirect',
    // 'localeViewPath',
    'auth',
    'role:admin|super_admin'
    ])
    ->group(function(){
        Route::name('admin.')->prefix('admin')->group(function(){
              

            //home 
            Route::get('/home',[HomeController::class,'index'])->name('home');

            //admin


        });
    });

