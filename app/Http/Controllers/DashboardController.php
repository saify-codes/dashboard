<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard() {
        return match (Auth::user()->role) {
            'ADMIN' => view('admin.dashboard'),
            'MERCHANT' => '',
            'USER' => '',
        };
    }
}
