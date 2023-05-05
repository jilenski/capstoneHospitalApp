<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.assets.css')
  @yield('custom-css')
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">      

      @include('dashboard-navbar')

      @include('admin.layout.sidebar')

      @yield('content')
      
    </div>
  </div>

  @include('admin.assets.script')
  @yield('custom-script')
</body>
</html>