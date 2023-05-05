@extends('admin.layout.dashboard')

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row ">
        <div class="col-12 col-sm-12 col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="alert alert-light alert-has-icon">
                <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                <div class="alert-body">
                  <div class="alert-title">New COVID-19 update for patients
                    <span class="badge badge-info">NEW</span>
                  </div>
                  <div>All patients that have not received their results for COVID-19 will need to ensure they stay isolated for a minimum of 14 days</div>
                </div>
                <div style="display:flex; align-items:flex-end;">
                <div class="buttons" style="float:right;">
                    <a href="#" class="btn btn-outline-info" style="float: right;">See details</a>
                </div>
               </div>                     
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

@endsection