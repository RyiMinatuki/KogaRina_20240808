<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
// ↑自分で考えたコード　正解だった

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactController::class, 'index']);
// ↑自分で考えたコード　正解だった 
// '/'を開くとindexアクションが実行される

Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
// ↑自分で考えたコード 正解だった
// 送信ボタンがクリックされた時(/contacts/confirmにアクセスしたとき)に confirm アクションが実行される

Route::post('/contacts', [ContactController::class, 'store']);
// ↑自分で考えたコード。正解だった。

