<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href=""> <img alt="image" src="public/mp1website/img/logo.png" class="header-logo" /> <span
          class="logo-name">MDCare</span>
      </a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::is('home') ? 'active' : '' }}">
        <a href="{{('home')}}" class="nav-link"><i data-feather="home"></i><span>Home</span></a>
      </li>
      <li class="{{ Request::is('appointments') ? 'active' : '' }}">
        <a href="{{('appointments')}}" class="nav-link"><i data-feather="calendar"></i><span>Appointments</span></a>
      </li>
      <li class="{{ Request::is('messages') ? 'active' : '' }}">
        <a href="{{('messages')}}" class="nav-link"><i data-feather="message-circle"></i><span>Messages</span></a>
      </li>

      <li class="menu-header">Medical</li>
      <li class="{{ Request::is('labres') ? 'active' : '' }}">
        <a class="nav-link" href="{{('labres')}}"><i data-feather="file-text"></i><span>Lab Results</span></a>
      </li>
      <li class="{{ Request::is('medrec') ? 'active' : '' }}">
        <a class="nav-link" href="{{('medrec')}}"><i data-feather="clipboard"></i><span>Medical Records</span></a>
      </li>
      <li class="{{ Request::is('prescriptions') ? 'active' : '' }}">
        <a class="nav-link" href="{{('prescriptions')}}"><i data-feather="octagon"></i><span>Prescriptions</span></a>
      </li>
      <li class="{{ Request::is('careplans') ? 'active' : '' }}">
        <a class="nav-link" href="{{('careplans')}}"><i data-feather="shield"></i><span>Care Plans</span></a>
      </li>
      <li class="{{ Request::is('forms') ? 'active' : '' }}">
        <a class="nav-link" href="{{('forms')}}"><i data-feather="layout"></i><span>Forms</span></a>
      </li>
            
      <li class="menu-header">Finance</li>
      <li class="{{ Request::is('billing') ? 'active' : '' }}">
        <a class="nav-link" href="{{('billing')}}"><i data-feather="dollar-sign"></i><span>Billing</span></a>
      </li>
      <li class="{{ Request::is('history') ? 'active' : '' }}">
        <a class="nav-link" href="{{('history')}}"><i data-feather="file-plus"></i><span>History</span></a>
      </li>
      <li class="{{ Request::is('reports') ? 'active' : '' }}">
        <a class="nav-link" href="{{('reports')}}"><i data-feather="bar-chart-2"></i><span>Reports</span></a>
      </li>
      </li>
    </ul>
  </aside>
</div>