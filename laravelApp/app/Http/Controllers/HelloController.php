<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller{

    //index
    //branch test2
    //push test
    public function index(Request $request) {

        $items = DB::select('select * from people');
        return view('hello.index', ['people'=> $items]);
    }


    //post
    public function post(Request $request) {

        $items = DB::select('select * from people');
        return view('hello.index', ['people'=> $items]);
    }


    //add
    public function add(Request $request){
        return view('hello.add');
    }


    //create
    public function create(Request $request) {

        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];

        DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        return redirect('/hello');
    }


    //edit
    public function edit(Request $request){

        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $item = DB::select('select * from people where id = :id', $param);
            return view('hello.edit', ['form' => $item[0]]);
        }
        else{
            return redirect('/hello');
        }
    }


    //update
    public function update(Request $request) {

        $param = [
            'id'   => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age'  => $request->age,
        ];

        DB::update('update people set name =:name, mail =:mail, age =:age where id = :id', $param);
        return redirect('/hello');
    }


    //del
    public function del(Request $request) {

        //if(isset($request->id)) {
            $param = ['id' => $request->id];
            $item = DB::select('select * from people where id = :id', $param);
            return view('hello.del', ['form' => $item[0]]);
        //}
        //else{
            //return redirect('/hello');
        //}
    }

    //remove
    public function remove(Request $request) {
        $param = ['id' => $request->id];
        DB::delete('delete from people where id = :id', $param);
        return redirect('/hello');
    }
}

