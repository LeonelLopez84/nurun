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
    	$gifs=Gif::where('autorize','=',1)->orderBy('created_at','DESC')->get();
    	return view("welcome",['gifs'=>$gifs]);
    }
    /*
    * mostramos solo un gif
    * @param  string $slug
    * @return last, next and previus
    */

    public function show($slug)
    {
    	$gif=Gif::where('slug','=',$slug)->first();
        //obtenemos previo
        $prev = Gif::where('autorize','=',1)->where('created_at','>', $gif->created_at)->orderBy('created_at','ASC')->first();
        // obtenemos el siguiente
        $next = Gif::where('autorize','=',1)->where('created_at','<', $gif->created_at)->orderBy('created_at','DESC')->first();
        //returnamos todo la vista
    	return view("show",['gif'=>$gif,'prev'=>$prev,'next'=>$next]);
    }

}
