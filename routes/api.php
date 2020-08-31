<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::apiResource('/sellers', 'Profile\SellerProfile')->except(['index','destroy']);
    Route::apiResource('/buyers', 'Profile\BuyerProfile')->except(['index', 'destroy']);
    Route::apiResource('/products', 'ProductController');
});
