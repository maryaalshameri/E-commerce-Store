use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ProductController;
use App\Http\Controllers\Api\v1\CategoryController;

Route::prefix('v1')->middleware('throttle:60,1')->group(function () {
    // Public: list & show
    Route::get('products', [ProductController::class, 'index'])->name('api.v1.products.index');
    Route::get('products/{product}', [ProductController::class, 'show'])->name('api.v1.products.show');

    Route::get('categories', [CategoryController::class, 'index'])->name('api.v1.categories.index');
    Route::get('categories/{category}', [CategoryController::class, 'show'])->name('api.v1.categories.show');

    // Protected: store/update/destroy (auth:sanctum)
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('products', [ProductController::class, 'store']);
        Route::put('products/{product}', [ProductController::class, 'update']);
        Route::delete('products/{product}', [ProductController::class, 'destroy']);

        Route::post('categories', [CategoryController::class, 'store']);
        Route::put('categories/{category}', [CategoryController::class, 'update']);
        Route::delete('categories/{category}', [CategoryController::class, 'destroy']);
    });
});
