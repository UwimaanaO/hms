<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_doctor() {
        return view('admin.add_doctor');
        
    }
    public function upload_doctor(Request $request){
        $doctor=new Doctor;
        $doctor->name=$request->name;
        $doctor->phone= $request->phone;
        $doctor->email= $request->email;
        $doctor->speciality= $request->speciality;
        $doctor->room= $request->room;
        /*photo insert part*/
        $photo= $request->photo;
        if($photo){

        $photoname=time().".".$photo->getClientOriginalExtension();
        $request->photo->move('doctorphoto', $photoname);
        $doctor->photo = $photoname;            
        }
        /*photo insert part*/
        $doctor->save();
        return redirect()->back()->with('message','Doctor added Successfully');
    }
}
