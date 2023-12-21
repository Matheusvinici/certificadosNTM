<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Certificado;
use App\Inscricao;
use App\Curso;
use App\User;
use PDF;


use Session;

use Auth;

use Illuminate\Support\Facades\DB;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {



        if (Auth::user()->admin == 1) {

            
            $certificados = Certificado::orderBy('created_at', 'desc')->paginate(10);
           

            return view('certificados.index')->with(compact('certificados'));

        } else {
            $id = Auth::user()->id;
            $certificados = Certificado::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(10);

            return view('certificados.indexUsuario')->with(compact('certificados'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscricoes = Inscricao::all();
        $cursos = Curso::all();
        $users = User::all();



        return view('certificados.create')->with(compact('inscricoes', 'cursos', 'users'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


       
        $certificado = new Certificado;

        $certificado->nome_responsavel = $request->nome_responsavel;


      
        $certificado->curso_id = $request->curso_id;

        $certificado->user_id = $request->user_id;

      
        $certificado->inscricao_id = $request->inscricao_id;

        $certificado->save();

        
        return redirect()->route('inscricao.index');


        /*return back();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
    
    
        $certificado = Certificado::find($id);
        $curso = Curso::find($id);
        $inscricao = Inscricao::find($id);
        $user = User::find($id);
    

        $nome = $certificado->nome;
        $nome_responsavel = $certificado->nome_responsavel;

        $curso = $certificado->curso;
        $inscricao = $certificado->inscricao;
        $user = $certificado->user;

        $dados = [
            'nome' => $nome,
            'nome_responsavel' => $nome_responsavel,
            'inscricao' => $inscricao,
            'curso' => $curso,
            'nome' => $nome,
            'user' => $user,

        
        ];
        $ra4 = array(0, 0, 229.45, 720.57);



            $pdf = PDF::loadView('certificados.relatorio', [
            'certificate_image' => isset($certificate_image) ? $certificate_image : 'certificate/default.png'               
            ], $dados)->setpaper('letter', 'landscape');
    
            return $pdf->setOptions($options)->stream('');
    
                
        }
}
