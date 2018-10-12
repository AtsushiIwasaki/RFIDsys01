<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{

    //値を用意しておかなくてもいい項目
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age'  => 'integer|min:0|max:150'
    );

    //グローバルスコープ
    protected static function boot()
    {
        //Modelの初期化用メソッド
        parent::boot();

//        static::addGlobalScope('age', function(Builder $builder){
//            $builder->where('age', '>', 20);
//        });
        static::addGlobalScope(new ScopePerson);
    }

    //idとnameとageを連結して返す
    public function getData(){
        return $this->id . ': ' . $this->name . '(' . $this->age. ')';
    }

    //ローカルスコープ
    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }

    //ageの値が引数の値と等しいか、もっと大きいものに絞りこむ
    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    //ageの値が引数と等しいか、もっと小さいものに絞り込む
    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

}