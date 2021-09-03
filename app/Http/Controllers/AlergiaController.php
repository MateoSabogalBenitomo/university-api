<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alergia;

class AlergiaController extends Controller
{
    public function index(Request $request){
        $alergia = Alergia::all();
        return response()->json($alergia,201);
    }

    public function find(Request $request){
        $alergia = Alergia::where('patologia','like','%'.$request->buscar.'%')->get();
        return response()->json($alergia,201);
    }

    public function store(Request $request){
        $armas = Alergia::create($request->all());
        return response()->json($alergia,201);

    }

    public function destroy(Request $request){
        $alergia=Alergia::where('id', $request->id)->delete();
        return response()->json($alergia,201);
    }


}
