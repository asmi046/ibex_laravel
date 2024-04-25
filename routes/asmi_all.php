<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\BimController;
    use App\Http\Controllers\CalcController;
    use App\Http\Controllers\ContactsController;
    use App\Http\Controllers\DocumentationController;
    use App\Http\Controllers\PriceController;
    use App\Http\Controllers\ProductController;
    use App\Http\Controllers\ServiceController;

    use App\Http\Controllers\Page\PageController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/bim_lib', [BimController::class, "index"])->name('bim_lib');
    // Route::get('/calculator', [CalcController::class, "index"])->name('calculator');
    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
    Route::get('/technical-documentation', [DocumentationController::class, "index"])->name('doc');
    Route::get('/price-list', [PriceController::class, "index"])->name('price');

    Route::get('/products', [ProductController::class, "index"])->name('products');
    Route::get('/products/{slug}', [ProductController::class, "product_page"])->name('product_page');

    Route::get('/services', [ServiceController::class, "index"])->name('services');
    Route::get('/services/{slug}', [ServiceController::class, "service_page"])->name('service_page');


    Route::get('/{slug}', [PageController::class, "index"])->name('page');
