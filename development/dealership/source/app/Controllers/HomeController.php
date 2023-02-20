<?php

namespace App\Controllers;


use App\Models\BlogModel;
use App\Models\CityModel;
use App\Models\EscortModel;
use App\Models\FaqsModel;

class HomeController extends BaseController
{

    public function __construct(){
        $this->data['city_list'] = (new CityModel)->orderBy("sort_order", "asc")->findAll();
        $this->data['faqs_list'] = (new FaqsModel)->orderBy("sort_order", "asc")->findAll();
    }
    public function index()
    {
        return view('home', $this->data);
    }

    public function about(){
        return view("about", $this->data);
    }
    public function faqs(){
        return view("faqs", $this->data);
    }
    public function service(){
        $this->data['service'] = (new EscortModel)->orderBy("sort_order", "asc")->findAll();
        return view("service", $this->data);
    }
    public function blogs(){
        $this->data['blogs'] = (new BlogModel)->orderBy("sort_order", "asc")->findAll();

        return view("blogs", $this->data);
    }
    public function rate(){
        return view("rate", $this->data);
    }
    public function contact(){
        return view("contact", $this->data);
    }

}


