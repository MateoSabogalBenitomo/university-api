<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\FrenteUsuariosClientes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function index(Request $request){
        $user = DB::table('users')
                ->select('users.id','users.role_id','users.name','users.email','roles.name as nombre_rol')
                ->join('roles','roles.id' ,'=','users.role_id' )
                ->join('frente_usuarios_clientes as f','f.users_id','=','users.id')
                ->whereIn('f.frente_id', $request->frentes)
                ->orderBy('users.id', 'desc')
                ->groupBy('users.id','users.role_id','users.name','users.email','roles.name')
                ->get();
        return response()->json($user,201);
    }

    public function buscar(Request $request){
        $user = DB::table('users')
                ->select('users.id','users.name','users.email','roles.name as nombre_rol')
                ->join('roles','roles.id' ,'=','users.role_id' )
                ->join('frente_usuarios_clientes as f','f.users_id','=','users.id')
                ->whereIn('f.frente_id', $request->frentes)
                ->where('users.name', 'like', '%'.$request->buscar.'%')
                ->orWhere('users.email', 'like', '%'.$request->buscar.'%')
                ->orderBy('users.id', 'desc')
                ->groupBy('users.id','users.name','users.email','roles.name')
                ->get();
        return response()->json($user,201);
    }

    public function crearUsuario(Request $request){
        $qrUserClientes = User::create([
            'name'  => $request['usuario']['name'],
            'email' => $request['usuario']['email'],
            'role_id' => $request['usuario']['role_id'],
            'password' => Hash::make($request['usuario']['password'])
        ]);

        for ($i=0; $i < count($request['clientes']); $i++) {

            $frente_clientes = FrenteUsuariosClientes::create([
                'frente_id' => $request['clientes'][$i]['id'],
                'users_id' => $qrUserClientes->id
            ]);
        }
        return response()->json($qrUserClientes,201);

    }
    public function editarUsuario(Request $request){
        $qrUserClientes=User::where('id', $request['usuario']['id'])->update([
            'name'  => $request['usuario']['name'],
            'email' => $request['usuario']['email'],
            'role_id' => $request['usuario']['role_id']
        ]);
        if($qrUserClientes==true){
            $frentes = FrenteUsuariosClientes::where('users_id',$request['usuario']['id'])->delete();
            for ($j=0; $j < count($request['clientes']); $j++) {

                $frente_clientes = FrenteUsuariosClientes::create([
                    'frente_id' => $request['clientes'][$j]['id'],
                    'users_id' => $request['usuario']['id']
                ]);
            }
        }
        
        return response()->json($qrUserClientes,201);
    }

    public function eliminarUsuario(Request $request){
        $frentes = FrenteUsuariosClientes::where('users_id',$request['usuario']['id'])->delete();
        $qrUserClientes=User::where('id', $request['usuario']['id'])->delete();
        return response()->json($qrUserClientes,201);
    }

    
}