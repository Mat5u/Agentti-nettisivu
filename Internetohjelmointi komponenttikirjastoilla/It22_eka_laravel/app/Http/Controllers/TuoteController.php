<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tuote;
use App\Models\Postimage;
use App\Models\Valmistajat;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;
use Symfony\Component\Console\Input\Input;

class TuoteController extends Controller
{
    public function lomake(){
        return view('tuotteet', ['valmistaja' => Valmistajat::all()->sortBy(['valmistaja'])]);
    }

    public function tuotteetTallenna(Request $request){
        $arvot = $request->validate([
            'nimi' => 'required', 
            'hinta'=> 'required',
            'kuvaus' => 'required',
            'valmistajat' => 'required',
            'lahetettavissa' => 'required',
            'arvioitulahetysaika' => 'required',
            'kpl' => 'required'
            
        ]);

        $data= new Postimage();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
            $data->save();

            $arvot['kuvaid'] = $data->id;
        }
        
        $lahetettavissa = Carbon::createFromFormat('d.m.Y', $request->input('lahetettavissa'))->format('Y-m-d');
        $arvot['lahetettavissa'] = $lahetettavissa;
        
        $user = Tuote::create($arvot);

        return redirect('/');

    }

    public function kauppaKaikki(){
        $tuotteet = DB::table('tuote')
        ->join('valmistajat', 'tuote.valmistajat', '=', 'valmistajat.id')
        ->join('postimages', 'tuote.kuvaid', '=', 'postimages.id')
        ->select('tuote.*', 'postimages.image as kuva', 'valmistajat.valmistaja as valmistaja')
        ->get();
        return view('kauppa', ['tuote' => $tuotteet]);
    }

    public function tuotteetKaikki(){
    
        $tuotteet = DB::table('tuote')
        ->join('valmistajat', 'tuote.valmistajat', '=', 'valmistajat.id')
        ->select('tuote.*', 'valmistajat.valmistaja as valmistaja')
        ->get();
        return view('tuotteetKaikki', ['tuote' => $tuotteet]);
        //dd($tuotteet);
    }

    public function tuotteetEdit($todo){
        return view('tuotteetEdit', [
            'tuote' => Tuote::findOrFail($todo)
        ]);
    }

    public function tuotteetUpdate(Request $request, $id){
        $arvot = $request->validate([
            'nimi' => 'required', 
            'hinta'=> 'required',
            'kuvaus' => 'required',
            'lahetettavissa' => 'required',
            'arvioitulahetysaika' => 'required',
            'kpl' => 'required'
        ]);

        $tuote = Tuote::findOrFail($id);

        $tuote->nimi = strip_tags($request->input('nimi'));
        $tuote->hinta = strip_tags($request->input('hinta'));
        $tuote->kuvaus = strip_tags($request->input('kuvaus'));
        $tuote->lahetettavissa = strip_tags($request->input('lahetettavissa'));
        $tuote->arvioitulahetysaika = strip_tags($request->input('arvioitulahetysaika'));
        $tuote->kpl = strip_tags($request->input('kpl'));
        $tuote->save();

        return redirect()->route('tuotteetKaikki');
    }

}
