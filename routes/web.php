<?php

use App\Http\Controllers\Backend\BrancheController;
use App\Http\Controllers\Backend\BranchmessageController;
use App\Http\Controllers\Backend\BranchsliderController;
use App\Http\Controllers\Backend\FacilitieController;
use App\Http\Controllers\Backend\GeneralinfoController;
use App\Http\Controllers\Backend\Main_addresController;
use App\Http\Controllers\Backend\Main_sliderController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\RolesController;
use App\Http\Controllers\Backend\RoomController;
use App\Http\Controllers\Backend\RoomphotoController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\BranchFrontendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    if (auth()->user()) {
        return back();
    } else {
        return view('auth.login');
    }
})->name('loginFRM');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::group(['middleware' => ['auth']],  function () {
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'users'], function () {
        Route::resource('users', UserController::class)->names('user');
    });

    Route::group(['prefix' => 'roles'], function () {
        Route::resource('roles', RolesController::class)->names('role');
    });

    Route::group(['prefix' => 'branch'], function () {
        Route::resource('branch', BrancheController::class)->names('branch');
    });

    Route::group(['prefix' => 'branch-message'], function () {
        Route::resource('branch-message', BranchmessageController::class)->names('branch_message');
    });

    Route::group(['prefix' => 'branch-slider'], function () {
        Route::resource('branchslider', BranchsliderController::class)->names('branchslider');
    });

    Route::group(['prefix' => 'facility'], function () {
        Route::resource('facility', FacilitieController::class)->names('facility');
    });

    Route::group(['prefix' => 'main-address'], function () {
        Route::resource('main-address', Main_addresController::class)->names('main_address');
    });

    Route::group(['prefix' => 'main-sliders'], function () {
        Route::resource('main-sliders', Main_sliderController::class)->names('main_slider');
    });

    Route::group(['prefix' => 'offers'], function () {
        Route::resource('offers', OfferController::class)->names('offer');
    });

    Route::group(['prefix' => 'room'], function () {
        Route::resource('room', RoomController::class)->names('room');
    });

    Route::group(['prefix' => 'room-photo'], function () {
        Route::resource('room-photo', RoomphotoController::class)->names('room_photo');
    });

    Route::group(['prefix' => 'general'], function () {
        Route::resource('general', GeneralinfoController::class)->names('general');
    });

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

Route::controller(FrontendController::class)->group(function () {
    Route::post('/contact', 'contactStore')->name('contact.store');
    Route::post('/career', 'careerStore')->name('career.store');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/career', 'career')->name('career');
    Route::get('/hotels', 'hotels')->name('hotels');
    Route::get('/about', 'about')->name('about');
    Route::get('/home', 'main')->name('home');
    Route::get('/tour', 'tour')->name('tour');
    Route::get('/news', 'news')->name('news');
    Route::get('/', 'main')->name('main');
});

Route::group(
    ['prefix' => 'resort'],
    function () {
        Route::controller(BranchFrontendController::class)->group(function () {            
            Route::get('/{id}/rooms/{roomid?}', 'roomsSuites')->name('branch.accommodation');
            Route::post('/{id}/contact', 'contactStore')->name('branch.contact.store');
            Route::get('/{id}/contact', 'contact')->name('branch.contact');
            Route::get('/{id}/{enUrl?}/restaurant/{roomid?}/', 'restaurant')->name('branch.restaurant');
            Route::get('/{id}/recreation/{roomid?}', 'recreation')->name('branch.recreation');
            Route::get('/{id}/gallery', 'gallery')->name('branch.gallery');
            Route::get('/{id}/meeting/{roomid?}', 'meeting')->name('branch.meeting');
            Route::get('/{id}/special', 'special')->name('branch.special');
            // Route::get('/{id}/hotels/{roomid?}', 'hotels')->name('branch.hotel');
            Route::get('/{id}/tour/{roomid?}', 'tour')->name('branch.tour');
            Route::get('/{id}/about', 'about')->name('branch.about');
            Route::get('/{id}/news', 'news')->name('branch.news');
            Route::get('{id}/', 'main')->name('branch.main');
        });
    }
);

require __DIR__ . '/auth.php';
