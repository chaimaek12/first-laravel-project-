<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name='chaimae' ;
        $age=20;
        $skills=['aaaa','bbbbba','cccccccccc'];
        return view('home',[
            'name'=>$name,
            'age'=>$age,
            'skills'=>$skills,
        ]);
    }

}
