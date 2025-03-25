<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ip\IpLookupController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::get('/test',function() {
//     return env('IPINFO_API_KEY');
// });

Route::get('/ip-lookup/{ip}', [IpLookupController::class, 'getIpDetails']);