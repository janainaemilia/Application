<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
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
        $post = new Post;

        $post->tituloPost = Input::get('tituloPost');
        $post->textoPost = Input::get('textoPost');
        $post->dataPost = Input::get('dataPost');
        $post->atualizacaoPost = Input::get('atualizacaoPost');
        $post->idCategoriaPost = Input::get('idCategoriaPost');
        $post->idUsuario = Input::get('idUsuario');
        $post->save();

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
        $post = Post::find($id);
        $post->tituloPost = $request->input('tituloPost');
        $post->textoPost = $request->input('textoPost');
        $post->dataPost = $request->input('dataPost');
        $post->atualizacaoPost = $request->input('atualizacaoPost');
        $post->idCategoriaPost = $request->input('idCategoriaPost');
        $post->idUsuario = $request->input('idUsuario');
        $post->save();
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
        $posts = Post::all();
        return view('posts')->withPosts($posts);
    }
}
