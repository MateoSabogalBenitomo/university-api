<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Estudiante;

class EstudianteController extends Controller
{
    public function index(Request $request){
        $estudiante = Estudiante::with('alergias')->with(['consumo' => function ($query) {
            $query->whereBetween('created_at', ['2021-07-01', '2021-07-31']);
        }])->with('personas')->get();
        return response()->json($estudiante,201);
    }

    public function find(Request $request){
        $estudiante = Estudiante::where('nombre','like','%'.$request->buscar.'%')->get();
        return response()->json($estudiante,201);
    }

    public function estudianteSoloAcudiente(Request $request){
        $sql="SELECT ep.estudiante_id , ep.persona_id, ep.parentezco, e.nombre
                FROM estudiante_personas as ep
                INNER JOIN estudiantes as e on ep.estudiante_id=e.id
                GROUP BY ep.estudiante_id, ep.persona_id, ep.parentezco, e.nombre HAVING COUNT(*)=1";
         $resultadoSQL=DB::select($sql);

         return json_decode(json_encode($resultadoSQL),true);
    }

    public function store(Request $request){
        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante,201);

    }

    public function destroy(Request $request){
        $estudiante=Estudiante::where('id', $request->id)->delete();
        return response()->json($estudiante,201);
    }


}
