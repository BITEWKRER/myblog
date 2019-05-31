<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'transfer index';
        return view('pages/index',compact('title'));//带参数传值
    }

    public function about(){
        $title = 'transfer about';
        return view('pages/about')->with('title',$title); //不带参数传值
    }
    public function server(){
        $data = array(
            'title'=>'Services',
            'Services'=>['web service','programing','Seo']
        );
        return view('pages/server')->with($data);

    }

}
