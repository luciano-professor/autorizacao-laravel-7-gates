<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //$user = Auth::user();

        //dd($user->id);

        //$userId = Auth::id();

        //dd($userId);

        // if(Auth::check()){
        //     echo("Autenticado");
        // }
        // else{
        //     echo("Não Autenticado");
        // }

        // if(Gate::allows('administrador')){
        //     echo("Autorizado para usuario do tipo administrador");
        // }

        // if(Gate::allows('normal')){
        //     echo("Autorizado para usuario do tipo normal.");
        // }

        // if(Gate::authorize('normal')){
        //     echo("Autorizado para usuario do tipo administrador");
        // }

        return view('home');
    }
}
