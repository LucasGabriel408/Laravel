<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index()
    {
        return view('blog.index');
    }

    public function show($id)
    {
        // Aqui você pode buscar o post pelo ID e retornar a view com os dados
        return view('blog.show', ['id' => $id]);
    }

    public function list() {
        // Aqui você pode buscar todos os posts do banco de dados e retornar a view
        $posts = Post::all();
        
        return view('blog.posts.list', ['posts' => $posts]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        // Aqui você pode salvar o post no banco de dados
        // Exemplo: Post::create($request->all());
        
        return redirect()->route('blog.index')->with('success', 'Post criado com sucesso!');
    }

    public function edit($id)
    {
        // Aqui você pode buscar o post pelo ID e retornar a view de edição
        return view('blog.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Aqui você pode atualizar o post no banco de dados
        // Exemplo: Post::find($id)->update($request->all());
        
        return redirect()->route('blog.index')->with('success', 'Post atualizado com sucesso!');
    }

    public function destroy($id)
    {
        // Aqui você pode deletar o post do banco de dados
        // Exemplo: Post::find($id)->delete();
        
        return redirect()->route('blog.index')->with('success', 'Post deletado com sucesso!');
    }

}
