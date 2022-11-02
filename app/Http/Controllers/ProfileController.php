<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index(){
        return view("profile.index");
    }

    public function store(Request $request){
        $request->validate([
            'password'=>'required',
            'password2'=>'required',
       
        ]);

        $user=User::find(auth()->id());
        $user->password = bcrypt($request->password);
        $user->update();
        return redirect()->route('profile.index')->with('alert','La contraseña fue actualizada correctamente');
    }
}
