@extends('admin.layout.dashboard')

@section('custom-css')
    
<base href="../">
@endsection

@section('css head')
  class="dropdown active"
@endsection

@section('css head')
  class="active"
@endsection

@section('content')

<div class="main-content">
  <div class="col-12 col-md-12 col-lg-12">
    <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

      @csrf

      <div class="card">
        <div class="card-header">
          <h4>Add Doctor</h4>
        </div>
        <div class="card-body">
          <div class="section-title mt-0">Name</div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="First Name" name="first_name" :value="old('name')" required autofocus autocomplete="first_name">
              <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" :value="old('name')">
              <input type="text" class="form-control" placeholder="Last Name" name="last_name" :value="old('name')" required autofocus autocomplete="last_name">
            </div>
          </div>

          <div class="section-title">Contact Number</div>
          <div class="form-group">
            <div class="input-group">
              <input type="number" class="form-control" placeholder="" name="phone" :value="old('name')" required autofocus autocomplete="phone">
            </div>
          </div>

          <div class="section-title">Address</div>
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="" name="address" :value="old('name')" required autofocus autocomplete="address">
            </div>
          </div>

          <div class="section-title">Specialty</div>
          <div class="form-group">
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" name="specialty">
                <option selected></option>
                <option value="Allergy and immunology">Allergy and immunology</option>
                <option value="Anesthesiology">Anesthesiology</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Diagnostic radiology">Diagnostic radiology</option>
                <option value="Emergency medicine">Emergency medicine</option>
                <option value="Family medicine">Family medicine</option>
                <option value="Internal medicine">Internal medicine</option>
                <option value="Medical genetics">Medical genetics</option>
                <option value="Neurology">Neurology</option>
                <option value="Nuclear medicine">Nuclear medicine</option>
                <option value="Obstetrics and gynecology">Obstetrics and gynecology</option>
                <option value="Ophthalmology">Ophthalmology</option>
                <option value="Pathology">Pathology</option>
                <option value="Pediatrics">Pediatrics</option>
                <option value="Physical medicine and rehabilitation">Physical medicine and rehabilitation </option>
                <option value="Preventive medicine">Preventive medicine</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Radiation oncology">Radiation oncology</option>
                <option value="Surgery">Surgery</option>
                <option value="Urology">Urology</option>
              </select>
            </div>
          </div>

          <div class="section-title">Profile Photo</div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="profile_photo">
            <label class="custom-file-label" for="customFile">Choose File</label>
          </div>

          <div class="card-footer text-center">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </form> 

    @if(session()->has('message'))
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
            <span>&times;</span>
          </button>
          {{session()->get('message')}}
        </div>
      </div>
    @endif
  </div>
</div>

@endsection
