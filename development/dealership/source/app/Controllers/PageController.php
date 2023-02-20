<?php

namespace App\Controllers;


class PageController extends BaseController
{
    public function blogs()
    {
        return view('blogs');
    }

    public function blog_post($param=null){
        return view("blog_post");
    }

    public function escort($param=null){

//        return view("escort");
    }
    public function escort_post($param=null, $param2=null){
        dd("single_post");
        return view("escort");
    }

}


