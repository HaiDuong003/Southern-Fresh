<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Middleware\CheckLogin;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {

        $user = [];
        if (Auth::user()) {
            $user = Auth::user();
            if ($user->is_active == false) {
                return view('users.dont_active');
            }
        }
        return view('index');
    }
}
