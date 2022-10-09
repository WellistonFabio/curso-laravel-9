<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        $team = Team::find(1);
        //carregando a tabela users
        $team->load('users');
        //Incluir a relação
//        $team->users()->attach(3);
        return $team;

//        //creando registro na tabela post, incluindo o id da tabela User
//        $user->posts()->create([
//            'title'=>'meu primeiro post',
//            'content'=>'isso é um post',
//        ]);
//        deleta todos os posts do usuario
//        $user->posts()->delete();
//        dd($user->posts->toArry);
//        //faça um link entre a tabela usuario e a Tabela Teams id 1
//        $user->teams()->attach(2);
//        $user->load('teams');
//        $user->teams()->attach([1,2]);
//        $user->teams()->sync([2, 3]);
//        $user->teams()->syncWithoutDetaching([2]);
//        $user->teams()->detach([1, 3]);//para deletar
        return $user;

        return view('user',[
           'name'=>'welliston',
           'user'=>$user,
        ]);
    }
}
