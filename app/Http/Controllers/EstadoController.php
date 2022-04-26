<?php

namespace App\Http\Controllers;
use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $data = Estado::pluck('estado_id', 'sigla');
        return view('inscricao.index',['data'=>$data]);
    }
}
