<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Illuminate\Support\Facades\Route;



class ProdutosController extends Controller
{
    public function index()
    {
        //recupera os dados e salva na variavel $users
        $produtos = Produtos::get();
        
        return view ('produtos.index', compact('produtos'));
        //aqui ele retorna na view os dados que puxou na variavel $users, coloca num array e manda pra view index
        
    }

    public function show($id)
    {
        if(!$produtos = Produto::find($id))
            return redirect()->route('produtos.index');
        
        return view ('produtos.show', compact('produtos'));//compact cria um array da variavel
        
    }
    public function create()
    {
        return view ('produtos.create');
    }
    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        //$data['password'] = bcrypt($request->password);
        Produtos::create($data);
        return redirect()->route('produtos.index');
    }
    public function edit($id)
    {
        if(!$produtos = Produtos::find($id))
            return redirect()->route('produtos.index');
        return view ('produtos.edit', compact('produtos'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$produtos = Produtos::find($id))
            return redirect()->route('produtos.index');
        $data = $request->only('name','valor','quantidade');
        //if($request->password)
        //    $data['password'] = bcrypt($request->password);

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
