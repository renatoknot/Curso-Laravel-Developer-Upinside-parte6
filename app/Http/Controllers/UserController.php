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

        //        $users = DB::table('users')
        //                        ->select('users.id', 'users.name', 'users.status')
        //                        ->where('users.status', '=', '1')
        //                        ->orderBy('name', 'DESC')
        //                        //->oldest('name') // ASC
        //                        //->latest('name') // DESC
        //                        //->inRandomOrder()
        //                        ->limit(10)
        //                        ->offset(10)
        //                        ->get();
        //
        //        foreach($users as $user){
        //            echo "#{$user->id} Nome: {$user->name} {$user->status}<br>";
        //        }

        /**
         * selectRaw(exp)
         *      Informa quais campos devem ser retornados através de uma expressão
         *
         * whereRaw(exp)
         *      Filtra os registros que obedecem a expressão SQL
         *
         * orderByRaw(exp)
         *      Permite que seja feita expressão na ordenação
         */

        //        $users = DB::table('users')
        //                    ->selectRaw('users.id, users.name, CASE WHEN users.status = 1 THEN "ATIVO" ELSE "INATIVO" END status_description')
        //                    ->whereRaw('(SELECT COUNT(1) FROM addresses a WHERE a.user = users.id) > 2')
        //                    ->whereRaw('users.status = 1')
        //                    ->orderByRaw('updated_at - created_at', 'ASC')
        //                    ->get();

        /**
         * raw(exp)
         *      Nível mais baixo de expressão bruta, onde você pode informar a query completa
         */

        //        $users = DB::select(DB::raw('SELECT
        //                                    users.id,
        //                                    users.name,
        //
        //                                    CASE
        //                                        WHEN users.status = 1 THEN "ATIVO"
        //                                        ELSE "INATIVO"
        //                                    END status_description
        //
        //                                    FROM users
        //	                                WHERE (SELECT COUNT(1) FROM addresses a WHERE a.user = users.id) > 2
        //		                                AND users.status = :userStatus
        //	                                ORDER BY updated_at - created_at ASC;'), ['userStatus' => '1']);
        //
        //        foreach ($users as $user) {
        //            echo "#{$user->id} Nome: {$user->name} {$user->status_description}<br>";
        //        }

        /**
         * chunk(count, closure)
         *      * Obrigatório usar o orderBy
         *      count = Quantidade de registros a ser processador por vez
         *      closure = função anônima com a regra de negócio
         *
         * chunkById(count, closure)
         *      count = Quantidade de registros a ser processador por vez
         *      closure = função anônima com a regra de negócio
         */

        //        DB::table('users')->where('id', '<', '500')->orderBy('id')->chunk(50, function($users){
        //            foreach ($users as $user){
        //                echo "#{$user->id} Nome: {$user->name} {$user->status}<br>";
        //            }
        //
        //            echo "Encerrou um ciclo!<br>";
        //            sleep(1);
        //        });

        /**
         * whereIn('column', [0, 1])
         *      Referente a WHERE column IN (0, 1)
         *
         * whereNotIn('column', [0, 1])
         *      Referente a WHERE column NOT IN (0, 1)
         *
         * whereNull('column')
         *      Referente a WHERE column IS NULL
         *
         * whereNotNull('column')
         *      Referente a WHERE column IS NOT NULL
         *
         * whereColumn('field_1', 'operator', 'field_2')
         *      Referente a WHERE field_1 (operator [=, >, <, >=, <=]) field_2
         *
         * whereData('field', 'operator', 'value')
         *
         * whereDay('field', 'operator', 'value')
         *
         * whereMonth('field', 'operator', 'value')
         *
         * whereYear('field', 'operator', 'value')
         *
         * whereTime('field', 'operator', 'value')
         */

        //        $users = DB::table('users')
        //                    //->whereIn('users.status', [0, 1])
        //                    //->whereNotIn('users.status', [0, 1])
        //                    //->whereNull('')
        //                    ->whereNotNull('users.name')
        //                    //->whereColumn('created_at', '=', 'updated_at')
        //                    //->whereDate('updated_at', '>', '2018-11-30')
        //                    ->whereDay('updated_at', '=', '01')
        //                    ->whereMonth('updated_at', '=', '01')
        //                    ->whereYear('updated_at', '=', '2019')
        //                    ->whereTime('updated_at', '>', '17:30:00')
        //                    ->get();
        //
        //        foreach ($users as $user){
        //            echo "#{$user->id} Nome: {$user->name} {$user->status}<br>";
        //        }

        /**
         * join('table', 'field_1', 'operator', 'field_2')
         *      INNER JOIN table ON field_1 (operator) field_2
         *
         * leftJoin('table', 'field_1', 'operator', 'field_2')
         *      LEFT JOIN table ON field_1 (operator) field_2
         *
         * crossJoin('table')
         *
         * join('table', function($join){
         *  $join->on('field_1', 'operator', 'field_2')
         *       ->where('field_3', 'operator_2', 'field_4');
         * })
         *      INNER JOIN table ON (field_1 (operator) field_2 AND field_3 (operator_2) field_4)
         */
        
        // $users = DB::table('users')
        //             ->select('users.id', 'users.name', 'users.status', 'addresses.address')
        //             //->leftJoin('addresses', 'users.id', '=', 'addresses.user')
        //             ->join('addresses', function($join){
        //                 $join->on('users.id', '=', 'addresses.user')
        //                     ->where('addresses.status', '=', '1');
        //             })
        //             ->orderby('users.id', 'ASC')
        //             ->get();

        // echo "Total de registros: {$users->count()}<br>";

        // foreach ($users as $user) {
        //     echo "#{$user->id} Nome: {$user->name} {$user->status} {$user->address}<br>";
        // }
        
        // DB::table('users')->insert([
        //     'name' => 'Gustavo Web',
        //     'email' => 'cursos@upinside.com.br',
        //     'password' => bcrypt('123456'),
        //     'status' => 1
        // ]);

        // DB::table('users')->where('id', '=', 1001)->update([
        //     'email' => 'gustavo@upinside.com.br'
        // ]);
        // DB::table('users')->where('id', '=', 1001)->delete();
        $users = DB::table('users')->paginate(50);//Quantidade de itens por pagina

        foreach ($users as $user) {
            echo "#{$user->id} Nome: {$user->name} {$user->status}<br>";
        }

        echo $users->links();//print da paginação
    }
}