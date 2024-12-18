<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('shops.index', compact('shops'));
    }

    public function show($shop_id)
    {
        $shop = Shop::find($shop_id);
        return view('shops.show', compact('shop'));
    }
}

// UserControllerにマイページ用のメソッドを追加
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mypage()
    {
        // マイページ用のロジックを追加
        return view('user.mypage');
    }
}
