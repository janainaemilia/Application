<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Midia;

class MidiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
         $midia = new Midia;

        $midia->nomeMidia = Input::get('nomeMidia');
        $midia->caminhoMidia = Input::get('caminhoMidia');
        $midia->idPost = Input::get('idPost');
        $midia->save();

        return Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $midia = Midia::find($id);
        $midia->nomeMidia = $request->input('nomeMidia');
        $midia->caminhoMidia = $request->input('caminhoMidia');
        $midia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAll(){
        $midias = Midia::all();
        return view('midias')->withMidias($midias);
    }
}
