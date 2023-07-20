<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

      dd('test');

      // Eloquent エロクアント
      $values = Test::all();          //Illuminate\Database\Eloquent\Collection
      $count = Test::count();         //数値
      $first = Test::findOrFail(1);   //App\Models\Test
      $whereBBB = Test::where("text","=","bbb")->get(); //Illuminate\Database\Eloquent\Collection

      // クエリビルダ
      $queryBuilder = DB::table('tests')->where('text','=','bbb')
      ->select('id','text')
      ->get(); // Illuminate\Support\Collection

      dd($values,$count,$first,$whereBBB, $queryBuilder);

      return view('tests.test',compact('values'));
    }
}
