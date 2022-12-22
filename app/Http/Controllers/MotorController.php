<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;

class MotorController extends Controller
{
    public function index(){
        $recents = Motor::orderBy('shop_id', 'DESC')->with(['motors'])->get();

        return response()->json([
            'motors' => $recents
        ]);
    }

    public function show(Motor $motor){
        return response()->json($motor);
    }

    public function update(Motor $motor, Request $request){
        $motor->update($request->all());
        return response()->json($motor);
    }

    public function store(Request $request){
        $request->validate([
            'shop_id' => 'numeric|required',
            'parts' => 'string|required',
            'accessories' => 'string|required',

        ]);

        $motor = Motor::create($request->all());
        return response()->json($motor);
    }

    public function destroy(Motor $motor){
        $motor->delete();
        response()->json(['message' => 'This record has been deleted.']);
    }
}
