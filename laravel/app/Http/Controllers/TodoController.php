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


   
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email|min:3|unique:todos'
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
return view('myapp/edit');
    }

    public function update(Request $request, $id)
    {

        $user = Todo::find($id);
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email|min:3'
        ]); 
        $user->update($data);
        return redirect('/');

    }

 
    public function destroy($id)
    {
    
        Todo::where('id', $id)->delete();
        return redirect()->back();


    }
}
