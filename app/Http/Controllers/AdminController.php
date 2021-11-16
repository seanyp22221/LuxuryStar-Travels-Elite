<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard(){
        return view('admin.dashboard');
    }

    public function entryForm(){
        return view('admin.entryform');
    }

    public function paymentsForm(){
        return view('admin.payments');
    }

    public function claims(){
        return view('admin.claims');
    }

    public function reportsCenter(){
        return view('admin.reports');
    }
}
