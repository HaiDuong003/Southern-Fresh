<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Middleware\CheckLogin;

class DashboardController extends Controller
{

    public function index()
    {
        return view('index');
    }
}
