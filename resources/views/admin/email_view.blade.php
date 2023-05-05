@extends('admin.layout.dashboard')

@section('custom-css')
    <base href="../"
@endsection

@section('content')

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <div class="card">
            <div class="boxs mail_listing">
              <div class="inbox-center table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th colspan="1">
                        <div class="inbox-header">
                          Compose New Message
                        </div>
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <form class="composeForm" action="{{'sendemail',$emailappoint->id}}" method="POST">
                    <div class="form-group">
                      <div class="form-line">
                        <input type="text" id="email_address" class="form-control" placeholder="TO" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-line">
                        <input type="text" id="subject" class="form-control" placeholder="Subject" name="greeting">
                      </div>
                    </div>
                    <textarea id="ckeditor" name="body">
                        </textarea>

                        <input type="text" id="subject" class="form-control" placeholder="Subject" name="actiontext">

                        <input type="text" id="subject" class="form-control" placeholder="Subject" name="actionurl">

                        <input type="text" id="subject" class="form-control" placeholder="Subject" name="endpart">
                        <button type="submit" class="btn btn-info btn-border-radius waves-effect">Send</button>
                  </form>
                </div>
                <div class="col-lg-12">
                  <div class="m-l-25 m-b-20">
                    
                    
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
