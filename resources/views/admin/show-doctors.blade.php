@extends('admin.layout.dashboard')

@section('custom-css')

<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

@endsection

@section('css head')
  class="dropdown active"
@endsection

@section('css head')
  class="active"
@endsection

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Doctors List</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Specialty</th>
                      <th>Profile Photo</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($doctors as $doctor)
                    <tr>
                      <td>
                        {{ $doctor->id }}
                      </td>
                      <td>{{ $doctor->first_name }}</td>
                      <td>{{ $doctor->last_name }}</td>
                      <td>{{ $doctor->phone_number }}</td>
                      <td>{{ $doctor->address }}</td>
                      <td>{{ $doctor->specialty }}</td>
                      <td><img height="100" width="100" style="border-radius:50%" src="doctorphotos/{{ $doctor->profile_photo }}" alt=""></td>
                      <td>
                        <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a>
                      </td>
                      <td>
                        <a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{ $doctors->links() }}
</div>

@endsection

@section('custom-script')

<script src="public/mp1website/assets/js/page/datatables.js"></script>

@endsection