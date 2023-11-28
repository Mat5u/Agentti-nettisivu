<?php

namespace App\Http\Controllers;

use App\Models\Palaute;
use Illuminate\Http\Request;

class PalauteController extends Controller
{
    public function lomake(){
        return view('palaute');
    }
    public function palauteTallenna(Request $request){
        $arvot = $request->validate([
            'asia' => 'required', 
            'email'=> ['required', 'email'],
            'sisalto' => 'required'
        ]);

        $user = Palaute::create($arvot);

        return redirect('/');

    }
}
