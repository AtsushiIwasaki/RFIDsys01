<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
//    public function index(Request $request)
//    {
//        $items = Person::all();
//        return view('person.index', ['items' => $items]);
//    }

    public function index(Request $request)
    {
        //boardsを持つもの
        $hasItems = Person::has('boards')->get();

        //boardsを持たないもの
        $noItems = Person::doesntHave('boards')->get();

        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('person.index', $param);
    }

    // /find にGETアクセスしたときの処理
    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

/*
    // POST送信されたときの処理
    public function search(Request $request)
    {
        //findはテーブルの「id」フィールドから指定の番号のものを探す
        $item = Person::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }
*/

/*
    public function search(Request $request)
    {
        $item = Person::where('name', $request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
//        var_dump($param);
        return view('person.find', $param);
    }
*/

/*
    //名前で絞り込む
    public function search(Request $request)
    {
        //$item = Person::nameEqual($request->input)->first();
        $item = Person::nameEqual($request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }
*/
    //年齢で絞りこむ
    public function search(Request $request)
    {
        $min = $request->input *1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }


    //追加画面
    public function add(Request $request)
    {
        return view('person.add');
    }

    //追加処理
    public function create(Request $request)
    {
        //バリデーションの実行
        $this->validate($request, Person::$rules);

        //PersonクラスをNewする
        $person = new Person;

        //書き込むデータとして、リクエストパラメータを取得する
        $form = $request->all();

        //非表示フィールド_tokenを削除する
        unset($form['_token']);

        //fill:モデルのプロパティにまとめて設定する
        //save:インスタンスを保存する
        //これでもよし
        //$person = new Person;
        //$person->name = $request->name;
        //$person->mail = $request->mail;
        //$Person->age  = $request->age;
        //$person->save();
        $person->fill($form)->save();

        //indexにリダイレクトする
        return redirect('/person');
    }

    //編集画面
    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.edit', ['form' => $person]);
    }

    //編集処理
    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);

        //findでNewされる？
        $person = Person::find($request->id);

        //リクエストパラメータを取得する
        $form = $request->all();
        unset($form['_token']);

        //値を埋める
        $person->fill($form)->save();

        return redirect('/person');

    }

    //削除画面
    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view ('person.del', ['form' => $person]);
    }

    //削除実行
    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/person');
    }




}
