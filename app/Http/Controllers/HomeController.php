<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        return view('home');
    }

    //public function index(Request $request){

      //$request->session()->put(['Alejandro' => 'Administrador']);

      //session(['Maria' => 'Estudiante']);

      //$request->session()->forget('Alejandro');

      //$request->session()->flush();

      //$request->session()->flash('Entrada2', 'Éxito2');

      //$request->session()->regenerate();
      //return $request->session()->all();
    //}
}
