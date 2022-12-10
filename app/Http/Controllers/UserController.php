<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //returm any column in posts table
    public function index(){
        $users=User::find(1);
        foreach ($users->posts as $post) {
            dd($post->location) ;
        }
    }




}

