<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Illuminate\Support\Facades\Route;



class ProdutosController extends Controller
{
    public function index(){

   return view('produtos.index');
    
    }

    public function show ($id){

            dd('users.show', $id);
    }
}
