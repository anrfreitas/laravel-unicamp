<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\cliente;

use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function salvar(Request $request) {
        $validator = Validator::make($request->all(), [
            'nome' => 'min:10|required'
        ]);

        if($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        $cliente = cliente::find($request->input('id'));

        if(!$cliente)
        {
            $cliente = new cliente;
            $cliente->nome = $request->input('nome');
            $cliente->telefone = $request->input('telefone');
            $cliente->email = $request->input('email');
            $cliente->save();
        }
        else
        {
            $cliente->nome = $request->input('nome');
            $cliente->telefone = $request->input('telefone');
            $cliente->email = $request->input('email');
            $cliente->save();
        }

        $data['clientes'] = cliente::all();
        return view('listagem', $data);
    }

    public function remover($id) {
        cliente::findOrFail($id)->delete();
        return json_encode("Cliente removido!");
    }

    public function obter($id) {
        return json_encode(cliente::findOrFail($id));
    }

    public function listar() {
        $data['clientes'] = cliente::all();
        return view('listagem', $data);
    }
}
