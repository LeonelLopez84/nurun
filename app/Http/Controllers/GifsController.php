<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use App\Http\Requests\GifRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Gif;
use DB;

/*
*  Controlador de Resource para CRUD de los GIFs
 */
class GifsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *  Listado de todos los Gifs con paginacion
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gifs=Gif::orderBy('created_at','DESC')->paginate(10);
        return view("admin.gifs.index",compact('gifs'));
    }

    /**
     * Show the form for creating a new resource.
     * vista Formulario para la creacion de los gifs
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view("admin.gifs.create");
    }

    /**
     * Store a newly created resource in storage.
     * Almacenamiento de los gifs
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GifRequest $request)
    {

        
        if($request->file("gif")){

                $file = $request->file("gif");

                $Gif = new Gif();
                $Gif->title = $request->title;
                $slug = Str::slug($request->title);
                $Gif->slug = $slug;
                $Gif->description = $request->description;
                $name = $slug.'.'.$file->getClientOriginalExtension();
                $Gif->gif = $name ;
                $Gif->user_id= \Auth::user()->id;
                $Gif->save();   

                $request->file('gif')->storeAs('gifs',$name);

            Flash::success("El Gif <b>$Gif->title</b>");

             return redirect()->route('gifs.index');
        }
    }

    /**
     * Display the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Vista formulario pra editar titulo y descipcion de los gifs
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gif=Gif::find($id);
         return view("admin.gifs.edit",['gif'=>$gif]);
    }

    /**
     * Update the specified resource in storage.
     * actualizacion de los gifs
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $Gif=Gif::find($id);
                $Gif->title = $request->title;
                $slug = Str::slug($request->title);
                $Gif->slug = $slug;
                $Gif->description = $request->description;
                $name = $slug.'.gif';
                Storage::move('gifs/'.$Gif->gif, 'gifs/'.$name);
                $Gif->gif = $name ;
                $Gif->user_id= \Auth::user()->id;
                $Gif->save();   
        Flash::success("Se ha actualizado el Gif <b>$Gif->title</b>");

        return redirect()->route('gifs.index');
    }

    /**
     * Remove the specified resource from storage.
     * Eliminacion del elemento
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Gif=Gif::find($id);
        $Gif->delete();
        Flash::success("Se ha borrado el Gif <b>$Gif->title</b>");

        return redirect()->route('gifs.index');
    }

    /**
     * Autorizacion del elemento elemento via ajax
    * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function autorize(Request $request, $id)
    { 
        $Gif=Gif::find($id);
        $Gif->autorize=$request->autorize;
        $Gif->save();
         return response()->json(['id'=>$id,'autorize'=>$Gif->autorize,'status'=>200]);
        
    }
}
