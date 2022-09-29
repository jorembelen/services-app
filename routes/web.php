<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\Services\ServicesComponent as ServicesServicesComponent;
use App\Http\Livewire\Categories\CategoriesComponent;
use App\Http\Livewire\Categories\CategoryServices;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Provider\ServiceProviderDashboard;
use App\Http\Livewire\Provider\ServiceCreate;
use App\Http\Livewire\Services\ServiceDetails;
use App\Http\Livewire\Services\ServicesComponent;
use App\Http\Livewire\Provider\ServiceUpdate;
use App\Http\Livewire\User\BookService;
use App\Http\Livewire\User\UserDashboard;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', HomeComponent::class)->name('home');

Route::get('/autocomplete', [ServicesController::class, 'autocomplete'])->name('autocomplete');

Route::post('/search', [ServicesController::class, 'searchService'])->name('searchService');

Route::get('/categories', CategoriesComponent::class)->name('home.categories');
Route::get('/category-services/{categorySlug}', CategoryServices::class)->name('home.category-service');

Route::get('/services', ServicesComponent::class)->name('home.services');
Route::get('/service/{service_slug}', ServiceDetails::class)->name('home.service_details');

Route::group(['middleware' => 'auth'], function () {

    Route::get('book/{service_slug}/service', BookService::class)->name('book.service');

    Route::group(['middleware' => 'usr' ], function () {
        Route::get('user-account/{dashboard}', UserDashboard::class)->name('user.dashboard');
    });

    Route::group(['middleware' => 'svp' ], function () {
        Route::get('service-provider/{dashboard}', ServiceProviderDashboard::class)->name('svp.dashboard');
        Route::get('/service-create', ServiceCreate::class)->name('svp.service-create');
        Route::get('/service/{serviceSlug}/edit', ServiceUpdate::class)->name('svp.service-update');
    });

    Route::group(['middleware' => 'adm' ], function () {
        Route::get('admin-dashboard', AdminDashboard::class)->name('admin.dashboard');
        Route::get('admin-services', ServicesServicesComponent::class)->name('admin.services');
    });


});
