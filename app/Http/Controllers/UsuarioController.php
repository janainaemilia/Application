<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Usuario;

class UsuarioController extends Controller
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
        //
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
        //
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

    /**
     * Get all Users
     *
     * @return Response
     */
    public function getAll(){
    	$request = Request::create('http://localhost:3000/Usuarios', 'GET');

    	$url = "http://localhost:3000/Usuarios";
		$response = \Httpful\Request::get($url)
		    ->expectsJson()
		    ->withXTrivialHeader('Just as a demo')
		    ->send();
		 
		 foreach ($variable as $key => $response->body) {		 	
			 Usuario $usuario = new Usuario();
			 $usuario->nome = $response->body->nome;
			 $usuario->email = $response->body->email;
			 $usuario->senha = $response->body->senha;
		 }
    }
}
