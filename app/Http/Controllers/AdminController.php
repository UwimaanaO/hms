<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_doctor() {
        return view('admin.add_doctor');
        
    }
}
