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
    	$gifs=Gif::orderBy('created_at','DESC')->paginate(10);
    	return view("welcome",['gifs'=>$gifs]);
    }

}
