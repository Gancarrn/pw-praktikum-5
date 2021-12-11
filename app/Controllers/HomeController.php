<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home | Monitor IoT UP'];
        return view('\Pages\home', $data);
    }
}
