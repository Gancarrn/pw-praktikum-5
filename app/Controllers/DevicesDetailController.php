<?php

namespace App\Controllers;

class DevicesDetailController extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Detail | Monitor IoT UP'];
        return view('\Pages\detail', $data);
    }
}
