<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function lomake(){
        return view('todo');
    }

    public function todoTallenna(Request $request){
        $arvot = $request->validate([
            'otsikko' => 'required', 
            'status'=> 'required',
            'selite' => 'required',
            'kiireellisyys' => 'required'
            
        ]);

        $user = Todo::create($arvot);

        return redirect('/');

    }

    public function todoKaikki(){
        return view('todoKaikki', ['todo' => Todo::all()->sortBy(['id'])]);

    }

    public function todoEdit($todo){
        return view('todoEdit', [
            'todo' => Todo::findOrFail($todo)
        ]);
    }

    public function todoUpdate(Request $request, $id){
        $request->validate([
            'otsikko' => 'required',
            'selite' => 'required',
            'status' => 'required',
            'kiireellisyys' => 'required'
        ]);

        $todo = todo::findOrFail($id);

        $todo->otsikko = strip_tags($request->input('otsikko'));
        $todo->selite = strip_tags($request->input('selite'));
        $todo->status = strip_tags($request->input('status'));
        $todo->kiireellisyys = strip_tags($request->input('kiireellisyys'));
        $todo->save();

        return redirect()->route('todoKaikki');
    }

    public function todoDelete(Todo $todo){
        $todo->delete();
        return redirect(route('todoKaikki'));
    }
}
