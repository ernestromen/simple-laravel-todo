<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Todo;
class TodoController extends Controller
{
   
    public function index()
    {
            $todos = Todo::all();
            return view('myapp/index',compact('todos'));

    }


    public function create()
    {
        //
    }
//$title = $request->old('title');

//<input type="text" name="title" value="{{ old('title') }}">


   
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email|min:3'
        ]); 
        Todo::create($data);
        return redirect()->back();
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        dd('edit!');

    }

    public function update(Request $request, $id)
    {
        dd('updated!');
    }

 
    public function destroy($id)
    {
    
        Todo::where('id', $id)->delete();
        return redirect()->back();


    }
}
