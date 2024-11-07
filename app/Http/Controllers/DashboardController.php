<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        $data['title'] = 'Dashboard';
        switch (Auth::user()->role) {
            case 'admin':
                return view("admin.dashboard", $data)->with("success", "Welcome");
            case 'front_desk':
                return view("front_desk.dashboard", $data)->with("success", "Welcome");
            case 'housekeeper':
                return view("housekeeper.dashboard", $data)->with("success", "Welcome");
            case 'workman':
                return view("workman.dashboard", $data)->with("success", "Welcome");
        }
    }
}
