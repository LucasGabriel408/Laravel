<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {
        return view('categories.index');
    }

    public function show($id)
    {
        // Aqui você pode buscar a categoria pelo ID e retornar a view com os dados
        return view('categories.show', ['id' => $id]);
    }

    public function list()
    {
        // Aqui você pode buscar todas as categorias do banco de dados e retornar a view
        $categories = Category::all();
        
        return view('blog.categories.list', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Aqui você pode salvar a categoria no banco de dados
        // Exemplo: Category::create($request->all());
        
        return redirect()->route('categories.list')->with('success', 'Categoria criada com sucesso!');
    }

    public function edit($id)
    {
        // Aqui você pode buscar a categoria pelo ID e retornar a view de edição
        return view('blog.categories.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Aqui você pode atualizar a categoria no banco de dados
        // Exemplo: Category::find($id)->update($request->all());
        
        return redirect()->route('categories.lit')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        // Aqui você pode deletar a categoria do banco de dados
        Category::find($id)->delete();
        
        return redirect()->route('categories.list')->with('success', 'Categoria deletada com sucesso!');
    }

}
