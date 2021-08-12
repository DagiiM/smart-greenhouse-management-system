<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserRoleController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Ability\AbilityController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Theme\ThemeController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Image\ImageController;
use App\Http\Controllers\Social\SocialController;
use App\Http\Controllers\System\SystemController;
use App\Http\Controllers\Service\ServiceController;
use App\Http\Controllers\DashboardController;

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

Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Route::resource('users',UserController::class);
Route::resource('users.roles',UserRoleController::class,['only'=>['index','create','store','destroy']]);
Route::resource('services',ServiceController::class)->middleware(['auth']);
Route::resource('contacts',ContactController::class)->middleware(['auth']);
Route::resource('abilities',AbilityController::class)->middleware(['auth']);
Route::resource('roles',RoleController::class)->middleware(['auth']);
Route::resource('themes',ThemeController::class)->middleware(['auth']);
Route::resource('socials',SocialController::class)->middleware(['auth']);
Route::resource('images',ImageController::class)->middleware(['auth']);
Route::resource('systems',SystemController::class,['only'=>['create','update','store','edit']])->middleware(['auth']);


Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::fallback(function(){
  return "Seems We Can't Process Your Request Buddy";
});
