<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function add_cart($id)
    {
        $user = Auth::id();
        $product = Product::find($id);

        $cart = Cart::create([
            'user_id' => $user,
            'product_id' => $product
        ]);

        if($cart)
        {
            return redirect('/prd')->with('message', 'berhasil masuk ke keranjang');
        }else{
            return redirect('/prd')->with('failed', 'gagal masuk ke keranjang');
        }
    }
}
