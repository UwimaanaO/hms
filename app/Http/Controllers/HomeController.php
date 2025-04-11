<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use function PHPUnit\Framework\returnArgument;

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

                $doctor = doctor::all();
                return view('user.dashboard', compact('doctor'));
            }

        } else {
            return redirect()->back();

        }
    }
    public function appointment(Request $request)
    {
        $appointment = new Appointment;
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->date = $request->date;
        $appointment->doctor = $request->doctor;
        $appointment->phone = $request->phone;
        $appointment->message = $request->message;
        $appointment->status = 'In Progress';
        if (Auth::id()) {
            $appointment->user_id = Auth::user()->id;
        }
        $appointment->save();
        return redirect()->back()->with('message', 'Appointment Scheduled Successfully, We will contact you soon');
    }
    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appointment=appointment::where('user_id',$userid)->get();

            return view('user.myappointment', compact('appointment'));
        } else {
            return redirect()->back();
        }
    }
}