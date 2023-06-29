<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



class ProdutosController extends Controller
{
    public function index()
    {
    
        $produtos = Produtos::get();
        
        return view ('produtos.index', compact('produtos'));
        
        
    }

    public function show($id)
    {
        if(!$produtos = Produtos::find($id))
            return redirect()->route('produtos.index');
        
        return view ('produtos.show', compact('produtos'));
        
    }
    public function create()
    {
        return view ('produtos.create');
    }
    public function store(StoreUpdateProdutosFormRequest $request)
    {
        $data = $request->all();
        Produtos::create($data);
        return redirect()->route('produtos.index');
    }
    public function edit($id)
    {
        if(!$produtos = Produtos::find($id))
            return redirect()->route('produtos.index');
        return view ('produtos.edit', compact('produtos'));
    }

    public function update(StoreUpdateProdutosFormRequest $request, $id)
    {
        if(!$produtos = Produtos::find($id))
            return redirect()->route('produtos.index');
        $data = $request->only('name','valor','quantidade');

        $produtos->update($data);
        return redirect()->route('produtos.index');
    }
    public function destroy($id)
    {
        if(!$produtos = Produtos::find($id))
            return redirect()->route('produtos.index');
        $produtos->delete();
        return redirect()->route('produtos.index');
    }
}
