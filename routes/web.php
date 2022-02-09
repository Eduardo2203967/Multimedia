<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', [PageController::class, 'index'])->name('gm.index');
Route::get('/course', [PageController::class, 'course'])->name('gm.course');
Route::get('/admission', [PageController::class, 'admission'])->name('gm.admission');
Route::get('/contacts', [PageController::class, 'contacts'])->name('gm.contacts');
Route::get('/moreInfo', [PageController::class, 'moreInfo'])->name('gm.moreInfo');
Route::get('/curricularPlan', [PageController::class, 'curricularPlan'])->name('gm.curricularPlan');
Route::get('/partnerships', [PageController::class, 'partnerships'])->name('gm.partnerships');
Route::get('/postsList',[PostController::class, 'posts'])->name('gm.posts');
Route::get('/showPost/{post}',[PostController::class, 'showPost'])->name('gm.showPost');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/users/{user}/send_reactivate_mail',
    [UserController::class,'send_reactivate_email'])->name('users.sendActivationEmail');
    Route::resource('users', UserController::class);
    /*
Lista todos os users:
Route::get('/users',[ UserController::class, 'index'])->name('users.index');

Mostra o form para criar um user:
Route::get('/users/create',[ UserController::class, 'create'])->name('users.create');

Guardar os novos dados na BD:
Route::post('/users',[ UserController::class, 'store'])->name('users.store');

Mostra os dados de um registo:
Route::get('/users/{user}',[ UserController::class, 'show'])->name('users.show');

Editar os dados de um registo (mostra o form de edição):
Route::get('/users/{user}/edit',[ UserController::class, 'edit'])->name('users.edit');

Fazer a atualização dos dados de um registo:
Route::put('/users/{user}',[ UserController::class, 'update'])->name('users.update');

Apagar o registo da BD:
Route::delete('/users/{user}',[ UserController::class, 'destroy'])->name('users.destroy');
*/
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('/admin', [HomeController::class, 'index'])->name('admin');

});

Auth::routes(['register'=>false,'verify'=>true]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
