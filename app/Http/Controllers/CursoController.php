<?php

namespace App\Http\Controllers;

use App\Certificado;
use App\Inscricao;
use App\User;
use App\Curso;
use Illuminate\Http\Request;
use PDF;

use Auth;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $total_antigo = session('total_antigo') ?? 0;

        if (Auth::user()->admin == 1) {

            
            $total_atual = Curso::count();
            session(['total_antigo' => $total_atual]);
            $cursos = Curso::orderBy('created_at', 'desc')->paginate(5);;
           

            return view('cursos.index')->with(compact('cursos', 'total_antigo', 'total_atual'));

        } else {
            $id = Auth::user()->id;
            $total_atual = Curso::where('user_id', $id)->count();
            session(['total_antigo' => $total_atual]);
            $cursos = Curso::orderBy('created_at', 'desc')->paginate(5);;

            return view('cursos.indexUsuario')->with(compact('cursos', 'total_antigo', 'total_atual'));
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $inscricoes = Inscricao::all();
        $certificados = Certificado::all();


        return view('cursos.create')->with(compact('users', 'inscricoes', 'certificados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso;

        $curso->nome = $request->nome;
        $curso->carga_horaria = $request->carga_horaria;
        $curso->periodo_inicial = $request->periodo_inicial;
        $curso->data_conclusao = $request->data_conclusao;
        $curso->tipo = $request->tipo;

        $curso->conteudo_1 = $request->conteudo_1;
        $curso->conteudo_2 = $request->conteudo_2;
        $curso->conteudo_3 = $request->conteudo_3;
        $curso->conteudo_4 = $request->conteudo_4;
        $curso->conteudo_5 = $request->conteudo_5;
        $curso->conteudo_6 = $request->conteudo_6;
        $curso->conteudo_7 = $request->conteudo_7;
        $curso->conteudo_8 = $request->conteudo_8;
        $curso->conteudo_9 = $request->conteudo_9;
        $curso->conteudo_10 = $request->conteudo_10;

        $curso->conteudo_11 = $request->conteudo_11;
        $curso->conteudo_12 = $request->conteudo_12;
        $curso->conteudo_13 = $request->conteudo_13;
        $curso->conteudo_14 = $request->conteudo_14;
        $curso->conteudo_15 = $request->conteudo_15;
        $curso->conteudo_16 = $request->conteudo_16;
        $curso->conteudo_17 = $request->conteudo_17;
        $curso->conteudo_18 = $request->conteudo_18;
        $curso->conteudo_19 = $request->conteudo_19;
        $curso->conteudo_20 = $request->conteudo_20;

        $curso->conteudo_21 = $request->conteudo_21;
        $curso->conteudo_22 = $request->conteudo_22;
        $curso->conteudo_23 = $request->conteudo_23;
        $curso->conteudo_24 = $request->conteudo_24;
        $curso->conteudo_25 = $request->conteudo_25;
        $curso->conteudo_26 = $request->conteudo_26;
        $curso->conteudo_27 = $request->conteudo_27;
        $curso->conteudo_28 = $request->conteudo_28;
        $curso->conteudo_29 = $request->conteudo_29;
        $curso->conteudo_30 = $request->conteudo_30;

        $curso->data_1 = $request->data_1;
        $curso->data_2 = $request->data_2;
        $curso->data_3 = $request->data_3;
        $curso->data_4 = $request->data_4;
        $curso->data_5 = $request->data_5;
        $curso->data_6 = $request->data_6;
        $curso->data_7 = $request->data_7;
        $curso->data_8 = $request->data_8;
        $curso->data_9 = $request->data_9;
        $curso->data_10 = $request->data_10;

        $curso->data_11 = $request->data_11;
        $curso->data_12 = $request->data_12;
        $curso->data_13 = $request->data_13;
        $curso->data_14 = $request->data_14;
        $curso->data_15 = $request->data_15;
        $curso->data_16 = $request->data_16;
        $curso->data_17 = $request->data_17;
        $curso->data_18 = $request->data_18;
        $curso->data_19 = $request->data_19;
        $curso->data_20 = $request->data_20;

        $curso->data_21 = $request->data_21;
        $curso->data_22 = $request->data_22;
        $curso->data_23 = $request->data_23;
        $curso->data_24 = $request->data_24;
        $curso->data_25 = $request->data_25;
        $curso->data_26 = $request->data_26;
        $curso->data_27 = $request->data_27;
        $curso->data_28 = $request->data_28;
        $curso->data_29 = $request->data_29;
        $curso->data_30 = $request->data_30;




        $curso->quantidade_1 = $request->quantidade_1;
        $curso->quantidade_2 = $request->quantidade_2;
        $curso->quantidade_3 = $request->quantidade_3;
        $curso->quantidade_4 = $request->quantidade_4;
        $curso->quantidade_5 = $request->quantidade_5;
        $curso->quantidade_6 = $request->quantidade_6;
        $curso->quantidade_7 = $request->quantidade_7;
        $curso->quantidade_8 = $request->quantidade_8;
        $curso->quantidade_9 = $request->quantidade_9;
        $curso->quantidade_10 = $request->quantidade_10;

        $curso->quantidade_11 = $request->quantidade_11;
        $curso->quantidade_12 = $request->quantidade_12;
        $curso->quantidade_13 = $request->quantidade_13;
        $curso->quantidade_14 = $request->quantidade_14;
        $curso->quantidade_15 = $request->quantidade_15;
        $curso->quantidade_16 = $request->quantidade_16;
        $curso->quantidade_17 = $request->quantidade_17;
        $curso->quantidade_18 = $request->quantidade_18;
        $curso->quantidade_19 = $request->quantidade_19;
        $curso->quantidade_20 = $request->quantidade_20;

        $curso->quantidade_21 = $request->quantidade_21;
        $curso->quantidade_22 = $request->quantidade_22;
        $curso->quantidade_23 = $request->quantidade_23;
        $curso->quantidade_24 = $request->quantidade_24;
        $curso->quantidade_25 = $request->quantidade_25;
        $curso->quantidade_26 = $request->quantidade_26;
        $curso->quantidade_27 = $request->quantidade_27;
        $curso->quantidade_28 = $request->quantidade_28;
        $curso->quantidade_29 = $request->quantidade_29;
        $curso->quantidade_30 = $request->quantidade_30;






        $curso->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos = Curso::find($id);


        return view('cursos.show')->with(compact('cursos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos = Curso::find($id);


        return view('cursos.edit')->with(compact('cursos'));

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
        $curso = Curso::find($id); //encontra curso por id

        $bladeData = [
            'curso' => $request->all(),
        ];

        $curso->update($request->all()); //atualiza todos os campos do curso

        return redirect()->route('curso.index', $bladeData); //retorna pra pagina de inicio do curso

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        
        $curso->delete();

        return redirect()->route('curso.index');
        
    }
    public function enable($id)
    {
        $curso = Curso::find($id);

     

        $curso->ativo = 1;
        $curso->save();

        return redirect()->route('curso.index');

    }

    /**
     * Desativar conta de determinado usuário (ativo = 0)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disable($id)
    {
        $curso = Curso::find($id);


        $curso->ativo = 0;
        $curso->save();

        return redirect()->route('curso.index');

    }

    public function report($id)
    {

        
        $options = [
            'orientation' => 'landscape',
            'encoding'      => 'UTF-8',
            'margin-top' => '40mm',
            'margin-bottom' => '20mm',
            'width' => '80mm',
            'height' => '110mm',

        ];
    
        $curso = Curso::find($id);
        $inscricao = Inscricao::find($id);
        $user = User::find($id);


        $conteudo_1 = $curso->conteudo_1;
        $inscricao = $curso->inscricao;
        $user = $curso->user;


        $dados = [
            'conteudo_1' => $conteudo_1,
            'inscricao' => $inscricao,
            'user' => $user,
            'curso' => $curso,


        ];

        //dd($pedido);
//        $produtos = Produto::all();

        $ra4 = array(0, 0, 229.45, 720.57);



        $pdf = PDF::loadView('cursos.relatorio', [
            'certificate_image' => isset($certificate_image) ? $certificate_image : 'certificate/default.png'               
            ], $dados)->setpaper('letter', 'landscape');
    
            return $pdf->setOptions($options)->stream('');
  
        }

}
