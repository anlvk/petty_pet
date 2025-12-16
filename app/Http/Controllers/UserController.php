<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;
use App\Models\Doctor;

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


    public function show(Request $request, int $userID) {
        #1/ выделить из базы соответствие доктору
        $user = User::where('id', $userID)->first();
        $isDoctor = Doctor::where('user_id', $userID)->value('id');

        return view('users.user', compact('user', 'isDoctor'));
        #2/ добавить возможность стать доктором (чек-бокс)
        #3/ чек-бокс сразу обновляет юзера на доктора
        #4/ добавить указание специализации для доктора
    }

    public function setDoctor(Request $request) {
        $isDoctor = (int) $request->input('isDoctor') ?? "";
        //dd($request->toArray());
        if ($isDoctor) {
            $doctor = new Doctor();
            $doctor->user_id = $isDoctor;
            $doctor->save();
        } else {
            $userID = (int) $request->input('userID') ?? 0;
            //dd($userID);
            Doctor::where('user_id', $userID)->delete();
        }

        return redirect()->back();
    }

    public function updateDoctor(Request $request) {
        $spec = $request->input('specialization') ?? "";
        $userID = (int) $request->input('userID') ?? 0;

        if(!empty($spec)) {
            $request->session()->flash('success', 'The item has been added successfully!');

            $doctor = Doctor::where("user_id", $userID)->first();
            $doctor->specialization = $spec;
            $doctor->save();
        }

        return redirect()->route('user', ['user' => $userID])->with('success', 'Specification updated');
    }
}
