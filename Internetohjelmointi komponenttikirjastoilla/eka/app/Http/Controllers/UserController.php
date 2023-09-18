<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function lomake(){
        return view('/register');
    }
    
    public function userTallenna(Request $request){
        $arvot = $request->validate([
            'name' => 'required', 
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password'=> ['required', 'min:6', 'confirmed']
        ]);

        $user = User::create($arvot);

        return redirect('/');

    }
}
