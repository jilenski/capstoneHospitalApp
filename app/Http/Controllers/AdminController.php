<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function adddoctor()
    {
        return view('admin.add-doctor');
    }

    public function upload(Request $request)
    {
       $doctor=new doctor;

       $profile_photo=$request->profile_photo;
       $imagename=time().'.'.$profile_photo->getClientOriginalExtension();
       $request->profile_photo->move('doctorphotos',$imagename);
       $doctor->profile_photo=$imagename;
       
       $doctor->first_name=$request->first_name;
       $doctor->middle_name=$request->middle_name;
       $doctor->last_name=$request->last_name;
       $doctor->phone_number=$request->phone_number;
       $doctor->address=$request->address;
       $doctor->specialty=$request->specialty;

       $doctor->save();

       return redirect()->back()->with('message', 'Doctor Added Successfully!');
    }

    public function showappointments()
    {
        $apptdata = Appointment::all();

        $apptdata = DB::table('appointments')->simplePaginate(10);
        
        return view('admin.show-appointments',['appointments' => $apptdata]);
    }

    public function approved($id)
    {
        $apptdata = Appointment::find($id);

        $apptdata->status='Approved';

        $apptdata->save();
        
        return redirect()->back();
    }

    public function cancelled($id)
    {
        $apptdata = Appointment::find($id);

        $apptdata->status='Cancelled';

        $apptdata->save();
        
        return redirect()->back();
    }

    public function showdoctors()
    {
        $docdata = Doctor::all();

        $docdata = DB::table('doctors')->simplePaginate(10);
        
        return view('admin.show-doctors',['doctors' => $docdata]);
    }

    public function deletedoctor($id)
    {
        $docdata = Doctor::find($id);

        $docdata->delete();
        
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $docdata = Doctor::find($id);

        return view('admin.update-doctor',['doctors' => $docdata]);
    }


    public function emailview($id)
    {
        $data=Appointment::find($id);
        return view('admin.email_view',['emailappoint' => $data]);
    }

    public function sendemail(Request $request,$id)
    {
        $data=Appointment::find($id);
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data,new SendEmailNotification($details));

        dd('Notification sent!');
    }
}
