<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centers;
use Illuminate\Support\Str;
use Image;


class CentersController extends Controller
{

    public function index(){
        $centers=Centers::latest('id')->paginate(10);
        return view("centers.index", compact("centers"));
    }

    public function store(Request $request){
        
        $centers=new Centers();
        $centers->name = $request->name;
        $centers->type =$request->type;
        $centers->direction =$request->direction;
        $centers->url =$request->url;
        $centers->longitude = $request->longitude;
        $centers->latitude = $request->latitude;
        $centers->email = $request->email;
        $centers->phone = $request->phone;

        if($request->hasFile("img")){
            $centers->img = $this->imageSave($request->name, $request->file("img"), "centers");
        }

        $centers->save();
        return redirect()->route('centers.index')->with('alert','Se guardado correctamente');
    }

    public function update(Request $request, $id){
        $centers=Centers::findOrFail($id);
        $centers->name = $request->name;
        $centers->type =$request->type;
        $centers->direction =$request->direction;
        $centers->url =$request->url;
        $centers->longitude = $request->longitude;
        $centers->latitude = $request->latitude;
        $centers->email = $request->email;
        $centers->phone = $request->phone;

        if($request->hasFile("img")){
            $centers->img = $this->imageSave($request->name, $request->file("img"), "centers");
        }

        $centers->update();
        return redirect()->route('centers.index')->with('alert','Se Actualizo correctamente');
    }

    public function destroy($id){
        $centers=Centers::findOrFail($id);
        $centers->delete();
        return redirect()->route('centers.index')->with('alert','Se Elimino correctamente');
    }
    public function api() {
        $centers=Centers::latest('id')->get();
        return response()->json($centers, 200);

    }
}
