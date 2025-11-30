<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        $users = $users->toArray();
        //dd($users);

        //$class = get_class($users);
        //$methods = get_class_methods($class);
        //dd($methods);
        //dd(get_defined_vars());

        return view('users.index')->with('users', $users);
    }

    
    public function store(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return $redirect('/users');
    }

    public function posts() {

        $posts = User::hasMany(Post::class);

        return view('users.posts')->with('posts', $posts);
    }
}
