<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks= DB::table('tasks')->get();
        return view('tasks.index',compact('tasks'));
    }

    public function show($id){
        $tasks= DB::table('tasks')->find($id);
        return view('tasks.show',compact('task'));
    }
    // public function store(){

    //  DB::table('tasks')->insert([
    //      'name'=> $_POST['name']
    //  ]);
    // return redirect()->back();
    // }

     public function store(    Request $request  ){

     DB::table('tasks')->insert([
         'name'=> $request->name
     ]);
    return redirect()->back();
    }
}
