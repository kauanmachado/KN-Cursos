<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelCurso;
use App\Models\User;

class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $objUser;
    private $objCurso;


    public function __construct()
    {   
        $this->objUser = new User();
        $this->objCurso = new ModelCurso();

        //$this->middleware('auth')->only(['create', 'update', 'destroy', 'store']);
    }

    
    public function template()
    {
        return view('template');
    }

    public function index()
    {
        $curso=$this->objCurso->all();
        return view('index', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $users=$this->objUser->all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->objCurso->create([
            'titulo' => $request->titulo,
            'preco' => $request->preco,
            'descricao' => $request->descricao,
            'id_user' => $request->id_user,
            'imagem' => $request->imagem
        ]);

        return redirect()->action('App\Http\Controllers\cursoController@index');
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
        $curso= $this->objCurso->find($id);
        $users=$this->objUser->all();

        $curso->save();

        return view('edit', compact('curso', 'users'));
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
        $curso=$this->objCurso->findOrFail($request->id);

        $titulo = $request->titulo;
        $preco = $request->preco;
        $descricao = $request->descricao;

        $curso->titulo = $titulo;
        $curso->preco = $preco;
        $curso->descricao = $descricao;

        $curso->save();

        return redirect()->action('App\Http\Controllers\cursoController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursos = ModelCurso::find($id)->delete();
        
        return redirect('/cursos')->with('msg', 'Curso excluido!');
    }

    public function login(){
        return view('login');
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function entrar(Request $request){
        if(Auth::attempt(['email' => $request-> email, 'password' => $request-> password])){
            
        }
    }

    
}
