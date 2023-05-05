<!DOCTYPE html>
<html lang="en">
<head>
      @include('patient.css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">      

      @include('patient.navbar')

      @include('patient.sidebar')

      @include('patient.forms.body')

      

    </div>
  </div>
      @include('patient.script')
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>