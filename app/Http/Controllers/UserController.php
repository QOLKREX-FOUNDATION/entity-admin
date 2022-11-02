<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = User::latest('id')->paginate(10);
        return view("users.index", compact("users"));
    }

    public function store(Request $request){
        $user=new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->rol = $request->rol;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('usuarios.index')->with('alert','El usuario fue guardado correctamente');
    }

    public function update(Request $request, $id){
        $user=User::findOrFail($id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->rol =$request->rol;        if(trim($request->password)!='') $user->password = bcrypt($request->password);
        $user->update();
        return redirect()->route('usuarios.index')->with('alert','El usuario fue Actualizado correctamente');
    }

    public function destroy( $id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('usuarios.index')->with('alert','El usuario fue Eliminado correctamente');
    }
}
