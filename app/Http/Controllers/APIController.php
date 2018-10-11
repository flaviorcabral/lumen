<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class APIController extends Controller
{
    /*public function listaUsuarios()
    {
        $json = [
            'usuario' => [
                'nome' => 'Leonardo',
                'idade' => 23
            ],

            'usuario2' => [
                'nome' => 'Vinicius',
                'idade' => 25
    ]

        ];

        return response($json, 201)
        ->header('Content-Type', 'application/json');

    }*/

    public function listaClientes()
    {
        $clientes = Clientes::all();

        return response($clientes, 201)
            ->header('Content-Type', 'application/json');
    }

    public function listaCliente($id)
    {
        $clientes = Clientes::find($id);

        return response($clientes, 201)
            ->header('Content-Type', 'application/json');
    }

    public function cadastraCliente(Request $dados)
    {
        $clientes = Clientes::create([
           'nome' => $dados->nome,
           'cnpj' => $dados->cnpj,
        ]);

        return response($clientes, 201)
            ->header('Content-Type', 'application/json');
    }

    public function deleteCliente($id)
    {

        $cliente = Clientes::find($id);
        $cliente->delete();

        return response($cliente, 201)
            ->header('Content-Type', 'application/json');
    }

    public function alteraCliente(Request $dados)
    {
        $cliente = Clientes::find($dados->id);

        $cliente->nome = $dados->nome;
        $cliente->cnpj = $dados->cnpj;
        $cliente->save();

        return response($cliente, 201)
            ->header('Content-Type', 'application/json');
    }
}
