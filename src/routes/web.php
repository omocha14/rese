<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Laravel\Fortify\Fortify;

// 認証用ルートの追加
//Auth::routes();

// メインページのルート
Route::get('/', [ShopController::class, 'index'])->name('shops.index');

// 会員登録ページ（認証用に自動生成）
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('register', [RegisterController::class, 'register']);

// サンクスページ
Route::view('/thanks', 'thanks')->name('thanks');

// ログインページ
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('login', [LoginController::class, 'login']);
//Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// マイページ
Route::get('/mypage', [ShopController::class, 'mypage'])->name('mypage');

// 飲食店詳細ページ
Route::get('/detail/{shop_id}', [ShopController::class, 'show'])->name('shops.detail');

// 予約完了ページ
Route::view('/done', 'done')->name('done');
