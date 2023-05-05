<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href=""> <img alt="image" src="resources/img/logo.png" class="header-logo" /> <span
          class="logo-name">MDCare</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::is('home') ? 'active' : '' }}">
        <a href="{{url('home')}}" class="nav-link"><i data-feather="home"></i><span>Home</span></a>
      </li>

      <li @yield('css head')>
        <a href="" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>Doctors</span></a>

        <ul class="dropdown-menu">
          <li @yield('css menu')">
            <a class="nav-link" href="{{url('show-doctors')}}">Doctors List</a>
          </li>
          <li @yield('css menu')">
            <a class="nav-link" href="{{url('add-doctor')}}">Add Doctors</a>
          </li>
        </ul>
      </li>
      
      <li class="{{ Request::is('show-appointments') ? 'active' : '' }}">
        <a href="{{url('show-appointments')}}" class="nav-link"><i data-feather="calendar"></i><span>Appointments</span></a>
      </li>

      <li class="{{ Request::is('register') ? 'active' : '' }}">
        <a href="{{url('register')}}" class="nav-link"><i data-feather="calendar"></i><span>Register User</span></a>
      </li>
    </ul>
  </aside>
</div>