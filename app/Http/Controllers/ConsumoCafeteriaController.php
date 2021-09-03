<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConsumoCafeteria;

class ConsumoCafeteriaController extends Controller
{
    public function index(Request $request){
        $consumo = ConsumoCafeteria::with('menu')->whereBetween('created_at', ['2021-05-01', '2021-05-31'])->get();
        return response()->json($consumo,201);
    }

    public function find(Request $request){
        $consumo = ConsumoCafeteria::where('nombre','like','%'.$request->buscar.'%')->get();
        return response()->json($consumo,201);
    }

    public function store(Request $request){
        $consumo = ConsumoCafeteria::create($request->all());
        return response()->json($consumo,201);

    }

    public function destroy(Request $request){
        $consumo=ConsumoCafeteria::where('id', $request->id)->delete();
        return response()->json($consumo,201);
    }


}
