 
 <style>#sig-canvas {
  border: 2px dotted #CCCCCC;
  border-radius: 15px;
  cursor: crosshair;
}</style>

 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Appointment Request Form</h4>
                      </div>
                      <div class="card-body">
                      <form>
                        <!-- Image and text -->
<nav class="navbar navbar-light bg-dark">
  <a class="navbar-brand" href="#">
    <img src="public/mp1website/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    MDCARE 
  </a>
</nav>
<br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Patient's Name</label>
      <input type="text" class="form-control" id="inputName" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputName">Last Name</label>
      <input type="text" class="form-control" id="inputName" placeholder="">
    </div>
  </div>

  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputNumber">Phone Number</label>
      <input type="text" class="form-control" id="inputNumber" placeholder="09XX-XXX-XXXX">
    </div>
    <div class="form-group col-md-3">
      <label for="">Birth Date</label><br>
      <form action="/action_page.php">
      <input type="date" id="birthday" name="birthday">
      </form>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State/Province</label>
      <input type="text" class="form-control" id="">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">E-Mail:</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com">
  </div>
  <div class="form-group">
    <label for="">Have you ever applied to our facility before?</label>
    <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio1">Yes</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">No</label>
</div>
  </div>
  <div class="form-group">
    <label for="">Which department would you like to get an appointment from?</label>
    <input type="text" class="form-control" id="" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Which procedure do you want to make an appointment for?</label>
    <select class="custom-select">
  <option selected>Please Select</option>
  <option value="1">Medical Examination</option>
  <option value="2">Doctor Check</option>
  <option value="3">Result Analysis</option>
  <option value="4">Check-up</option>
</select>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-2">
    <label for="">Select a Date</label><br>
      <form action="/action_page.php">
      <input type="date" id="birthday" name="birthday">
      </form>
    </div>
    <div class="form-group col-md-6">
    <label for="appt">Select a time:</label><br>
    <form action="/action_page.php">
  <input type="time" id="appt" name="appt">

</form>
    </div>
  </div>

  <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary">Submit</button>
</div>
</form>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </section>
        
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>