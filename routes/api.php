<?php

use App\Chart;
use App\Konten;
use App\Menu;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('product', function () {

    $data = Product::all();

    return response()->json(
        [
            'status' => 'OK',
            'message' => 'Tampil product',
            'data' => $data
        ]
    );
});

Route::get('menu', function () {

    $data = Menu::all();

    return response()->json(
        [
            'status' => 'OK',
            'message' => 'Tampil product',
            'data' => $data
        ]
    );
});

Route::get('chart', function () {

    $data = Chart::orderby('rating', 'desc')->get();

    return response()->json(
        [
            'status' => 'OK',
            'message' => 'Tampil product',
            'data' => $data
        ]
    );
});

Route::get('konten', function () {

    $data = Konten::all();

    return response()->json(
        [
            'status' => 'OK',
            'message' => 'Tampil product',
            'data' => $data
        ]
    );
});
