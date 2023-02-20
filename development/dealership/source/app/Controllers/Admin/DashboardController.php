<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DealershipModel;

class DashboardController extends BaseController
{
    public function index()
    {

        $data = array(
            "dashboard"=>"active",
            'dealership'=>count((new DealershipModel)->findAll())
        );

        return view("admin/dashboard", $data);
    }
}
