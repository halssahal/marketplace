<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/backend/index');
    }
}
