<?php

namespace App\Http\Controllers;

use App\Models\funcionarios;
use Illuminate\Http\Request;

class funcionariosController extends Controller
{
    public function index() 
    {
        $users = funcionarios::all();
        return view('base.funcionarios', ['users' => $users]);
    }

    public function deletar_funcionario($id)

    {
        $user = funcionarios::find($id);
        if($user) {
            $user->delete();
            return view('base.funcionarios')->with('success','Funcionario excluído com sucesso');
        } else {
            return view('base.funcionarios')->with('error','Funcionario não encontrado');
        }
    }

    public function atualizar_funcionario($id, Request $request)
    {
        $user = new funcionarios;
        $user->updateUser($id,$request->name,$request->email);
        return redirect('/funcionarios');
    }
}

