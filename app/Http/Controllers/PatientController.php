<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function addview()
    {
        return view('patient.appointments.appointments');
    }
    public function addview1()
    {
        return view('patient.messages.messages');
    }   
    public function addview2()
    {
        return view('patient.billing.billing');
    }      
    public function addview3()
    {
        return view('patient.careplans.careplans');
    }      
    public function addview4()
    {
        return view('patient.forms.forms');
    }      
    public function addview5()
    {
        return view('patient.history.history');
    }      
    public function addview6()
    {
        return view('patient.lab_results.labres');
    }      
    public function addview7()
    {
        return view('patient.medical_records.medrec');
    }      
    public function addview8()
    {
        return view('patient.reports.reports');
    }      
    public function addview9()
    {
        return view('patient.support.support');
    }      
    public function addview0()
    {
        return view('patient.webmd.webmd');
    }  
    public function addview01()
    {
        return view('patient.prescriptions.prescriptions');
    }                
}
