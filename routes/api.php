<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// CRUD format
// 1. get all (GET) /api/posts
// 2. create a post (POST) /api/posts
// 3. get a post (GET) /api/posts/{id}
// 4. update a post (PUT/PATCH) /api/posts/{id}
// 5. delete a post (DELETE) /api/posts/{id}

Route::prefix('v1')->group(function(){
    Route::apiResource('posts', 'PostController');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
