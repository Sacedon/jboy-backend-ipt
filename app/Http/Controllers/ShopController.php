<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index(){
        return response()->json([
            'shops' => Shop::orderBy('model')->get()
        ]);
    }

    public function show(Shop $shops){
        $shops->load('motors');
        return response()->json($shops);
    }

    public function store(Request $request){
        $request->validate([
            'model' => 'string|required',
            'brand' => 'string|required',

        ]);

        $shops = Shop::create($request->all());

        return response()->json($shops);
    }

    public function update(Shop $shops, Request $request){
        $shops->update($request->all());

        return response()->json($shops);
    }

    public function destroy(Shop $shops){
        $shops->delete();
        return response()->json(['message' => 'Motorcycle has been deleted.']);
    }
}
