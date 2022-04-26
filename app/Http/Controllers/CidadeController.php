<?php

namespace App\Http\Controllers;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        $data = Cidade::all();
        return view('inscricao.index',['data'=>$data]);
    }
}
