<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        $clientesComImagem = $clientes->map(function($request){
            return [
                'nome' => $request->nome,
                'telefone' => $request->telefone,
                'endereco' => $request->endereco,
                'cpf' => $request->cpf,
                'email' => $request->email,
                'password'  => Hash::make($request->password),
                'foto' => asset('storage/'. $request->foto)
            ];
        });
        return response()->json($clientesComImagem);
    }

    public function store(ClienteFormRequest $request){
        $clienteData = $request->all();

        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $nomefoto = time().'.'.$foto->getClientOriginalExtension();
            $caminhoImagem= $foto->storeAs('foto/clientes', $nomefoto,'public');
            $clienteData['foto']= $caminhoImagem;
        }
        $clientes = Cliente::create($clienteData);
        return response()->json(['cliente'=>$clientes], 201);
    }
}
