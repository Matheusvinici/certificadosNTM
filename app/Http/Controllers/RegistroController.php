<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Inscricao;
use App\Registro;
use App\Curso;
use App\User;
use Auth;



class RegistroController extends Controller
{
    public function index( Inscricao $inscricao)
    {
        

        $total_antigo = session('total_antigo') ?? 0;

        if (Auth::user()->admin == 1) {

            
            $total_atual = Registro::count();
            session(['total_antigo' => $total_atual]);
            $avaliacoes = Registro::orderBy('created_at', 'desc')->paginate(10);
           

            return view('avaliacoes.index')->with(compact('inscricao', 'total_antigo', 'total_atual'));

        } else {
            $id = Auth::user()->id;
            $total_atual = Registro::where('user_id', $id)->count();
            session(['total_antigo' => $total_atual]);
            $avaliacoes = Registro::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(10);
            $cursos = Curso::all();

            return view('avaliacoes.create')->with(compact('inscricao', 'cursos', 'total_antigo', 'total_atual'));
        }
    }

    public function create( Inscricao $inscricao)
    {
        $cursos = Curso::all();
        $inscricoes = Inscricao::all();

        return view('avaliacoes.create', compact('inscricao', 'cursos'));
    }

    public function store( Inscricao $inscricao, Request $request)
    {
        Registro::create([
            'inscricao_id' => $inscricao->id,
            'user_id' => $request->user_id,
            'formacao' => $request->formacao,
            'formador' => $request->formador,
            'sugestao' => $request->sugestao,
            'codigo' => $request->codigo,
  
            
            'resultado' => $request->resultado,
            'encontro' => $request->encontro,
            'curso_id' => $request->curso_id,

            
            
        ]);   

        return redirect()->route('avaliacoes.create', $inscricao)->with('success', 'Sua frequência foi realizada com sucesso!');

        //return redirect()->route('inscricao.index', $inscricao);
    }

}
