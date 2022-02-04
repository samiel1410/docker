<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $autores = Autor::all();
        return view('pages.autores')->with('autores',$autores); 
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {
        $autor = new Autor;
        $autor->create($request->all());        
        $autor = Autor::all();
        return view('pages.createauth')->with('autor',$autor);
    }
    public function libroAdd()
    {
        //
        $autor = Autor::all();
        return view('pages.createauth')->with('autor',$autor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$autor = $this->autores->obtenerAutorPorId($id);
        return view('pages.autores', ['autor' => $autor]);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        $autor->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autor $autor)
    {        
        $autor->delete();        
    }
}
