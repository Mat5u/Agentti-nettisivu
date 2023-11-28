<?php

namespace App\Http\Controllers;

use App\Models\Valmistajat;
use Illuminate\Http\Request;

class ValmistajaController extends Controller
{
    //
    public function lomake(){
        return view('/valmistaja');
    }
    
    public function valmistajaTallenna(Request $request){
        $arvot = $request->validate([
            'valmistaja' => 'required', 
            'maa'=> 'required',
        ]);

        $user = Valmistajat::create($arvot);

        return redirect('/');
    }

    public function valmistajaKaikki(){
        return view('valmistajaKaikki', ['valmistaja' => Valmistajat::all()->sortBy(['id'])]);
    }

    public function valmistajaEdit($todo){
        return view('valmistajaEdit', [
            'valmistaja' => Valmistajat::findOrFail($todo)
        ]);
    }

    public function valmistajaUpdate(Request $request, $id){
        $arvot = $request->validate([
            'valmistaja' => 'required', 
            'maa'=> 'required',

        ]);

        $valmistaja = Valmistajat::findOrFail($id);

        $valmistaja->valmistaja = strip_tags($request->input('valmistaja'));
        $valmistaja->maa = strip_tags($request->input('maa'));
        $valmistaja->save();

        return redirect()->route('valmistajaKaikki');
    }

    public function valmistajaDelete(Valmistajat $valmistaja){
        $valmistaja->delete();
        return redirect(route('valmistajaKaikki'));
    }
}
