<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function getall(){
        $todos = DB::table("todos")->get();
        return $todos;
    }

    public function new(Request $request){
        $result = DB::table("todos")->insert([
            "id" => $request->id,
            "title" => $request->title,
            "date" => $request->date,
            "label" => $request->label,
            "isDone" => $request->isDone,
            "created_at" => now(),
            "updated_at"=> now()
        ]);
        return $result;
    }

    public function delete(Request $request, $id){
        $result = DB::table("todos")->where("id", $id)->delete();
        return $result;
    }

    public function markDone(Request $request, $id){
        $result = DB::table("todos")->where("id",$id)->update(["isDone" => true]);
        return $result;
    }

}
