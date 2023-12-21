<?php

namespace App\Http\Controllers;

use App\Certificado;
use Illuminate\Http\Request;
use App\Inscricao;
use App\User;
use App\Curso;

use Auth;

class InscricaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

        if(Auth::user()->admin == 1){

            $cursos = Curso::all();
            $inscricoes = Inscricao::all();


            $nome_user_id = mb_strtoupper($req->nome_user_id);

            $inscricoes = Inscricao::orderBy('created_at', 'desc')->orWhereLike('user_id', $nome_user_id)->paginate(10);


            return view('inscricoes.index')->with(compact('inscricoes', 'cursos', 'users'));

        }else{
            
             $id = Auth::user()->id;
             
             $cursos = Curso::all();

             $inscricoes = Inscricao::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(10);
             
             
            $req->session()->flash('status', 'inscricao ok');
             return view('inscricoes.indexUser')->with(compact('inscricoes', 'cursos'));
        }
  //

        
      


     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $users = User::all();
        $cursos = Curso::all();
        

        $data = $req->input('cargo');
        $req->session()->flash('cargo', $data);

        return view('inscricoes.create')->with(compact('users', 'cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      
        

        $inscricao = Inscricao::where('user_id', auth()->id())->where('curso_id', $request->curso_id)->first();
        


        if ($inscricao) {

            $data = $request->input('user_id');
            $request->session()->flash('user_id', $data);

            return redirect()->route('inscricao.create')->with('danger', 'Você já possui uma inscrição ativa nesse curso!');

    
            
        } else {
            Inscricao::create($request->all());

        }
        
        return redirect()->route('inscricao.create')->with('success', 'Sua inscrição foi realizada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscricoes = Inscricao::find($id);
        $cursos = Curso::all();
        
        return view('inscricoes.show')->with(compact('inscricoes', 'cursos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscricoes = Inscricao::find($id);
        $cursos = Curso::all();

        return view('inscricoes.edit')->with(compact('inscricoes', 'cursos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inscricao = Inscricao::find($id); //encontra inscricao por id
        $inscricao->curso_id = $request->curso_id;
      
        $bladeData = [
            'inscricao' => $request->all(),
        ];

        $inscricao->update($request->all()); //atualiza todos os campos do inscricao

        return redirect()->route('inscricao.index', $bladeData); //retorna pra pagina de inicio do inscricao

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inscricao = Inscricao::find($id);

        $inscricao -> delete();

        return redirect()->route('inscricao.index');
    }
    public function createAvaliacoes(Inscricao $inscricao, Curso $curso){

        return view('avaliacoes.create', [
            'inscricao' => $inscricao,
            'curso' => $curso 
        ]);
    

    }

    public function enable($id)
    {
        $inscricao = Inscricao::find($id);

     

        $inscricao->ativo = 1;
        $inscricao->save();

        return redirect()->route('inscricao.index');

    }

    /**
     * Desativar conta de determinado usuário (ativo = 0)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        $inscricao = Inscricao::find($id);


        $inscricao->ativo = 0;
        $inscricao->save();

        return redirect()->route('inscricao.index');

    }

}
