<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelCurso;
use Illuminate\Support\Facades\Auth;
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

        $this->middleware('auth');
    }

    
    public function principal()
    {
        return view('principal');
    }

    public function cursos()
    {
        $curso=$this->objCurso->all();
        $user=$this->objUser->all();
        $curso = $this->objCurso->paginate(3);
        return view('index', compact('curso', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $users=$this->objUser->find($request->id);

        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        
        $curso = $this->objCurso->create([
            'titulo' => $request->titulo,
            'preco' => $request->preco,
            'descricao' => $request->descricao,
            'id_user' => $id,
            'imagem' => $request->file('imagem')->store('img', 'public')
        ]);

        return redirect()->action('App\Http\Controllers\cursoController@cursos');
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
    public function edit(Request $request)
    {
        $curso= $this->objCurso->find($request->id);
        $users=$this->objUser->find($request->id);

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
    public function update(Request $request)
    {
        $id = Auth::id();

        $curso=$this->objCurso->findOrFail($request->id);

        $titulo = $request->titulo;
        $preco = $request->preco;
        $descricao = $request->descricao;

        $curso->titulo = $titulo;
        $curso->preco = $preco;
        $curso->descricao = $descricao;

        $curso->save();

        return redirect()->action('App\Http\Controllers\cursoController@cursos');

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
        
        return redirect('/cursos');
    }

    public function login(){
        return view('login');
    }


    public function cadastro(){
        return view('cadastro');
    }





    
}
