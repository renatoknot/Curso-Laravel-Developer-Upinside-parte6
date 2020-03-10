<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        /**
         * select('table_alias.field', 'table_alias.field')
         *      Filtra quais colunas devem ser retornadas na consulta
         *
         * where('column', 'value')
         *      Determina os registros que devem ser retornados onde column = value
         *
         * where('column', 'operator', 'value')
         *      [operator =, <, >, =, <=, >=]
         *      Determina os registros que devem ser retornados onde column (operator) value
         *
         * orderBy('column', '[ASC|DESC]')
         *      Ordena os registros de forma crescente ou decrescente
         *
         * oldest()
         *      Ordena por ordem crescente a coluna created_at
         *
         * oldest('column')
         *      Ordena por ordem crescente a coluna column
         *
         * latest()
         *      Ordena por ordem decrescente a coluna created_at
         *
         * latest('column')
         *      Ordena por ordem decrescente a coluna column
         *
         * limit(value)
         *      Limita a quantidade de registros
         *
         * offset(value)
         *      Inicia a listagem a partir de value
         *
         */

        $users = DB::table('users')
                        ->select('users.id', 'users.name', 'users.status')
                        ->where('users.status', '=', '1')
                        ->orderBy('name', 'DESC')
                        //->oldest('name') // ASC
                        //->latest('name') // DESC
                        //->inRandomOrder()
                        ->limit(10)
                        ->offset(10)
                        ->get();

        foreach($users as $user){
            echo "#{$user->id} Nome: {$user->name} {$user->status}<br>";
        }

    }
}