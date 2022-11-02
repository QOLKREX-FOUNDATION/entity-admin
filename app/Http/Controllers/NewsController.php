<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class NewsController extends Controller
{

    public function index(){
        $news=News::latest('id')->paginate(10);
        $user = Auth::user();
        return view("news.index", compact("news","user"));
    }

    public function store(Request $request){
        $news=new News();
        $news->title =$request->title;
        $news->url =$request->url;
        $news->status = $request->status;
        $news->autor = auth()->id();

        if($request->hasFile("img")){
            $news->img = $this->imageSave($request->title_en, $request->file("img"), "news");
        }


        $news->save();
        return redirect()->route('news.index')->with('alert','Se guardado correctamente');
    }

    public function update(Request $request, $id){
        $news=News::findOrFail($id);
        $news->title_en =$request->title_en;
        $news->title_es =$request->title_es;
        $news->description_en =$request->description_en;
        $news->description_es =$request->description_es;
        $news->date_publish = $request->date_publish;
        $news->status = $request->status;
        $news->autor = $request->autor;
        $news->slug = Str::slug($request->title_en);
        $news->featured = $request->featured;

        if($request->hasFile("img")){
                $news->img = $this->imageSave($request->title_en, $request->file("img"), "news");
        }

        $news->update();
        return redirect()->route('news.index')->with('alert','Se Actualizo correctamente');
    }

    public function destroy($id){
        $news=News::findOrFail($id);
        $news->delete();
        return redirect()->route('news.index')->with('alert','Se Elimino correctamente');
    }
}
