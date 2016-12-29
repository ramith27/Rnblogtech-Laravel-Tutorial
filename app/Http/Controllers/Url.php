<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB,Redirect;
class Url extends Controller
{
    public function home()
    {

    }
    public function retrive ($i)
    {
      $link = @DB::table('url') -> where('shortlink', $i) -> get();
  		return Redirect::to($link[0] -> url);
    }
    public function add()
    {
      return view('addurl');
    }
    public function submitadd(Request $req)
    {
      $value=array('url' => $req->url,'shortlink' => $req->link );
      DB::table('url')->insert($value);
      echo "Value Inserted";
    }
}
