<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class TestController extends Controller
{
    //
    function test(){
      $user = User::find(1);

      return view('welcome2',['user'=>$user]);
    }
}
