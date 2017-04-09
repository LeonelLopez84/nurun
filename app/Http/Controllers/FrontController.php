<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Gif;

class FrontController extends Controller
{
	/*
	* Controlador principal para el front end
	 */
    public function index()
    {
    	$gifs=Gif::where('autorize','=',1)->orderBy('created_at','DESC')->paginate(10);
    	return view("welcome",['gifs'=>$gifs]);
    }
    /*
    * mostramos solo un gif
    * @param  string $slug
    * @return last, next and previus
    */

    public function show($slug)
    {
        //obtener los ultimos 10
        $lastgifs=Gif::where('autorize','=',1)->orderBy('created_at','DESC')->take(10)->get();
        //obtenemos solo uno 
    	$gif=Gif::where('slug','=',$slug)->first();
        //obtenemos previo
        $prev = Gif::where('autorize','=',1)->where('created_at','>', $gif->created_at)->orderBy('created_at','DESC')->first();
        // obtenemos el siguiente
        $next = Gif::where('autorize','=',1)->where('created_at','<', $gif->created_at)->orderBy('created_at','DESC')->first();
        //returnamos todo la vista
    	return view("show",['gif'=>$gif,'lastgifs'=>$lastgifs,'prev'=>$prev,'next'=>$next]);
    }

}
