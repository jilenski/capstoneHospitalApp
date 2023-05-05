@extends('admin.layout.dashboard')

@section('custom-css')

<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Appointment List</h4>
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
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Date</th>
                      <th>Doctor</th>
                      <th>Status</th>
                      <th>Approved</th>
                      <th>Cancelled</th>
                      <th>Send Mail</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($appointments as $appointment)
                    <tr>
                      <td>
                        {{ $appointment->id }}
                      </td>
                      <td>{{ $appointment->first_name }}</td>
                      <td>{{ $appointment->last_name }}</td>
                      <td>{{ $appointment->email }}</td>
                      <td>{{ $appointment->phone_number }}</td>
                      <td>{{ $appointment->date }}</td>
                      <td>{{ $appointment->doctor }}</td>
                      <td>{{ $appointment->status }}</td>
                      <td>
                        <a class="btn btn-success" href="{{url('approved',$appointment->id)}}">Approved</a>
                      </td>
                      <td>
                        <a class="btn btn-danger" href="{{url('cancelled',$appointment->id)}}">Cancelled</a>
                      </td>
                      <td>
                        <a class="btn btn-primary" href="{{url('emailview',$appointment->id)}}">Send Mail</a>
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
  {{ $appointments->links() }}
</div>

@endsection

@section('custom-script')

<script src="public/mp1website/assets/js/page/datatables.js"></script>

@endsection