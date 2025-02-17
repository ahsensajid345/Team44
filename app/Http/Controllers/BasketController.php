<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // retrieves authenticated user instance
            $user = auth()->user();
            // retrieves basket for the current user
            $basket = Basket::where('user_id', $user->id)->with('items.product')->first();
        } else {
            $basket = Basket::where('guest_id', Cookie::get('guest_id'))->with('items.product')->first();
        }
        return view('Basket', compact('basket'));
    }


    public function addProduct($productId)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $basket = Basket::firstOrCreate(['user_id' => $user->id], ['user_id' => $user->id]);
        } else {
            $guest_id = Cookie::get('guest_id');
            $basket = Basket::firstOrCreate(['guest_id' => $guest_id], ['guest_id' => $guest_id]);
        }
        // Check if the product is already in the basket
        $existingItem = $basket->items()->where('product_id', $productId)->first();

        // If the item exists in the basket already, increment the quantity
        // Otherwise, add the product with quantity 1
        if ($existingItem) {
            $existingItem->increment('quantity');
        } else {
            $basketItem = new BasketItem(['product_id' => $productId, 'quantity' => 1]);
            $basket->items()->save($basketItem);
        }

        return redirect()->route('basket.index');
    }

    public function removeProduct($productId)
    {
        $user = auth()->user();
        $basket = Basket::where('user_id', $user->id)->first();

        // remove a product from the basket
        if ($basket) {
            $basket->items()->where('product_id', $productId)->delete();
        }
        return redirect()->route('basket.index');
    }

    public function editQuantity($productId, Request $request)
    {
        $user = auth()->user();
        $basket = Basket::where('user_id', $user->id)->first();

        // update the quantity of a product in the basket
        if ($basket) {
            $quantity = $request->input('quantity');
            $basket->items()->where('product_id', $productId)->update(['quantity' => $quantity]);
        }
    }

    public function guestToUser()
    {
        $user = auth()->user();

        $guest_id = Cookie::get('guest_id');
        $basket = Basket::where(['guest_id' => $guest_id])->first();
        $basket->update(['user_id' => $user->id, 'guest_id' => Null]);
    }
}
