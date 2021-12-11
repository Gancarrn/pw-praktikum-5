<?php

namespace App\Controllers;

use App\Models\DevicesModel;

class DevicesController extends BaseController
{
    public function index()
    {
        $devicesModel = new DevicesModel();
        $device = $devicesModel->findAll();

        $data = [
            'title' => 'Device | Monitor IoT UP',
            'device' => $device
        ];


        return view('\Pages\device', $data);
    }
}
