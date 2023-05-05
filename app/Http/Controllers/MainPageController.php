<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;
use RealRashid\SweetAlert\Facades\Alert;

class MainPageController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            return redirect('home');
        }
        else {

        $doctor = Doctor::all();
        
        return view('welcome',['doctors' => $doctor]);
        }
    }

    public function appointment(Request $request)
    {
        $apptdata = new appointment;

        $apptdata->first_name=$request->first_name;
        $apptdata->last_name=$request->last_name;
        $apptdata->email=$request->email;
        $apptdata->phone_number=$request->phone_number;
        $apptdata->date=$request->date;
        $apptdata->doctor=$request->doctor;
        $apptdata->status='In progress';

        if(Auth::id())  {
            $apptdata->user_id=Auth::user->id;
        }
        

        $apptdata->save();

        Alert::success('Appointment Request Successful', 'We will contact you soon!');

        return redirect()->back();
    }

    public function test()
    {      
        return view('test');
    }
}
