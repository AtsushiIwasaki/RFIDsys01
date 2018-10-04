<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller{

    //index
    public function index(Request $request) {

//        $items = DB::select('select * from people');
        $items = DB::table('people')->get();
        return view('hello.index', ['people'=> $items]);
    }


    //post
    public function post(Request $request) {

        $items = DB::select('select * from people');
        printf("POST-called");
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

        //DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        DB::table('people')->insert($param);
        return redirect('/hello');
    }


    //edit
    public function edit(Request $request){

        if (isset($request->id)) {
            $param = ['id' => $request->id];
            //$item = DB::select('select * from people where id = :id', $param);
            //return view('hello.edit', ['form' => $item[0]]);
            $item = DB::table('people')->where('id', $request->id)->first();
            return view('hello.edit', ['form' => $item]);
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

        //DB::update('update people set name =:name, mail =:mail, age =:age where id = :id', $param);
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/hello');
    }


    //del
    public function del(Request $request) {
/*
        if(isset($request->id)) {
            $param = ['id' => $request->id];
            $item = DB::select('select * from people where id = :id', $param);
            return view('hello.del', ['form' => $item[0]]);
        }
        else{
            return redirect('/hello');
        }
*/
        $item = DB::table('people')
                ->where ('id', $request->id)
                ->first();
        return view('hello.del', ['form' => $item]);
    }

    //remove
    public function remove(Request $request) {
/*
        $param = ['id' => $request->id];
        DB::delete('delete frSom people where id = :id', $param);
        return redirect('/hello');
*/
        $item = DB::table('people')
            ->where('id', $request->id)
            ->delete();
        return redirect('/hello');
    }

    //show
/*
    public function show(Request $request){
        $id = $request->id;
//        $item = DB::table('people')->where('id', $id)->first();
        $item = DB::table('people')->where('id', '<=', $id)->get();
        return view('hello.show', ['item' => $item]);
    }
*/
/*
    public function show(Request $request) {
        $name = $request->name;
        $items = DB::table('people')
                -> where('name', 'like', '%' . $name. '%')
                -> orwhere('mail', 'like', '%' . $name . '%')
                -> get();
        return view('hello.show', ['items' => $items]);
    }
*/
    public function show(Request $request) {
        $min = $request->min;
        $max = $request->max;
        $items = DB::table('people')
            ->whereRaw('age >= ? and age <= ?', [$min, $max])->get();
        return view('hello.show', ['items' => $items]);
    }
}

