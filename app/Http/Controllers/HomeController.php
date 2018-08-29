<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function jaja()
    {
        
        $atividade = \App\Atividade::get(); 
        $banner = \App\Banner::get(); 
        $categoria = \App\Categoria::get(); 
        $depoimento = \App\Depoimento::get(); 
        $cliente = \App\Cliente::get(); 
        $video = \App\Video::get(); 
        $user = \App\User::get(); 
        $info = \App\Info::get();

        // return view('index', compact( 'teams', 'users', 'timeentries', 'contentpages' ));
        return view('jaja', compact( 'atividade', 'banner', 'categoria', 'depoimento', 'cliente' ,'video' ,'user', 'info' ));
    }
}
