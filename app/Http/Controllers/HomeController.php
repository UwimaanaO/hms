<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            return view('user.dashboard', compact('doctor'));
        }
    }
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                return view('admin.dashboard');

            } else {

                if (Auth::id()) {
                    return redirect('home');
                } else {
                    $doctor = doctor::all();
                    return view('user.dashboard', compact('doctor'));
                }
            }

        } else {
            return redirect()->back();

        }
    }
}