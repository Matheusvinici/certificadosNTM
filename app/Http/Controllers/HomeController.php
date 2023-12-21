<?php

namespace App\Http\Controllers;

use App\Certificado;
use App\Inscricao;

use Illuminate\Http\Request;

use Auth;



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
        

        if(Auth::user()->admin == 1){

            $certificados = Certificado::all();
            $inscricoes = Inscricao::all();
            
            return view('home')->with(compact('certificados', 'inscricoes'));

        }else{
            
             $id = Auth::user()->id;
             

             $certificados = Certificado::where('user_id', $id);;
             $inscricoes = Inscricao::where('user_id', $id);;

             

             return view('homeUser')->with(compact('certificados', 'inscricoes'));
        }
    }
}
