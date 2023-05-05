 
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
                        <h4>Medical Report</h4>
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
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputName">Height</label>
      <input type="text" class="form-control" id="inputName" placeholder="">
    </div>
    <div class="form-group col-md-3">
      <label for="inputName">Weight</label>
      <input type="text" class="form-control" id="inputName" placeholder="">
    </div>
  </div>
  <label for="inputName">Are you presently under medical care?</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios77" value="option77" checked>
  <label class="form-check-label" for="exampleRadios77">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios777" value="option777">
  <label class="form-check-label" for="exampleRadios777">
    No
  </label>
</div>
<label for="inputName">Do you have any drug allergies?</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios66" value="option66" checked>
  <label class="form-check-label" for="exampleRadios66">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios666" value="option666">
  <label class="form-check-label" for="exampleRadios666">
    No
  </label>
</div>
<label for="inputName">Do you have any food or environmental allergies?</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios55" value="option55" checked>
  <label class="form-check-label" for="exampleRadios55">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios555" value="option555">
  <label class="form-check-label" for="exampleRadios555">
    No
  </label>
</div>
<label for="inputName">Have you ever had tuberculosis or had a positive tuberculosis test?</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios44" value="option44" checked>
  <label class="form-check-label" for="exampleRadios44">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios444" value="option444">
  <label class="form-check-label" for="exampleRadios444">
    No
  </label>
</div>
<label for="inputName">Have you ever been cared for by a mental health clinician?</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios33" value="option33" checked>
  <label class="form-check-label" for="exampleRadios33">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios333" value="option333">
  <label class="form-check-label" for="exampleRadios333">
    No
  </label>
</div>
<label for="inputName">Have you ever restricted your eating?</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios22" value="option22" checked>
  <label class="form-check-label" for="exampleRadios22">
    Yes
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios222" value="option222">
  <label class="form-check-label" for="exampleRadios222">
    No
  </label>
</div><br>

<h1>PRIVACY NOTICE</h1><br>
<p>The health information that you provide is under the protection of the federal Health Insurance Portability and Accountability Act (HIPAA). We can use your health information for purposes of treatment, payment and health care operations. Under HIPAA, you have the right to Request restrictions on how we use or disclose your health information in certain circumstances, including for treatment, payment or health care operations. We do not have to agree to your request unless you request restriction on disclosures to a health plan for purposes of payment or healthcare operations, and the health information relates to an item or service for which you, or another person on your behalf, have assumed full financial responsibility. If we do agree to your restrictions, we will be bound by our agreement except in limited circumstances, such as if there is an emergency.</p><br>




  <div class="col-md-12 text-center">
            <button type="button" class="btn btn-primary">Submit</button>
</div>

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