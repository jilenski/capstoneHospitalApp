<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
  <div class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
            collapse-btn"> <i data-feather="align-justify"></i></a></li>
      <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
          <i data-feather="maximize"></i>
        </a></li>
      <li>
        <form class="form-inline mr-auto">
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
            <button class="btn" type="submit">
              <i data-feather="search"></i>
            </button>
          </div>
        </form>
      </li>
    </ul>
  </div>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
        class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
        <span class="badge headerBadge1">
          6 </span> </a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
        <div class="dropdown-header">
          Messages
          <div class="float-right">
            <a href="#">Mark All As Read</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-message">
          <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
                text-white"> <img alt="image" src="resources/img/users/user-1.png" class="rounded-circle">
            </span> <span class="dropdown-item-desc"> <span class="message-user">John
                Deo</span>
              <span class="time messege-text">Please check your mail !!</span>
              <span class="time">2 Min Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
              <img alt="image" src="resources/img/users/user-2.png" class="rounded-circle">
            </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                Smith</span> <span class="time messege-text">Request for leave
                application</span>
              <span class="time">5 Min Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
              <img alt="image" src="resources/img/users/user-5.png" class="rounded-circle">
            </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                Ryan</span> <span class="time messege-text">Your payment invoice is
                generated.</span> <span class="time">12 Min Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
              <img alt="image" src="resources/img/users/user-4.png" class="rounded-circle">
            </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                Smith</span> <span class="time messege-text">hii John, I have upload
                doc
                related to task.</span> <span class="time">30
                Min Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
              <img alt="image" src="resources/img/users/user-3.png" class="rounded-circle">
            </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                Joshi</span> <span class="time messege-text">Please do as specify.
                Let me
                know if you have any query.</span> <span class="time">1
                Days Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
              <img alt="image" src="resources/img/users/user-2.png" class="rounded-circle">
            </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                Smith</span> <span class="time messege-text">Client Requirements</span>
              <span class="time">2 Days Ago</span>
            </span>
          </a>
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>

    <!-- notifications -->
    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
        class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
      </a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
        <div class="dropdown-header">
          Notifications
          <div class="float-right">
            <a href="#">Mark All As Read</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
          <a href="#" class="dropdown-item dropdown-item-unread"> <span
              class="dropdown-item-icon bg-primary text-white"> <i class="fas
                  fa-code"></i>
            </span> <span class="dropdown-item-desc"> Template update is
              available now! <span class="time">2 Min
                Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
                  fa-user"></i>
            </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                Sugiharto</b> are now friends <span class="time">10 Hours
                Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                class="fas
                  fa-check"></i>
            </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
              moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                Hours
                Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                class="fas fa-exclamation-triangle"></i>
            </span> <span class="dropdown-item-desc"> Low disk space. Let's
              clean it! <span class="time">17 Hours Ago</span>
            </span>
          </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
                  fa-bell"></i>
            </span> <span class="dropdown-item-desc"> Welcome to Otika
              template! <span class="time">Yesterday</span>
            </span>
          </a>
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">View All <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>
    
    <!-- dropdown -->
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
          <img alt="{{ Auth::user()->name }}" src="{{ Auth::user()->profile_photo_url }}"class="user-img-radious-style">
        @else
          <i data-feather="user-check" class="user"></i>
        @endif
      </a>
      
      <!-- dropdown lists-->
      <div class="dropdown-menu dropdown-menu-right pullDown">
        <div class="dropdown-title">Hello {{ Auth::user()->name }}</div>

        <a href="{{ route('profile.show') }}" class="dropdown-item has-icon">
          <i data-feather="user"></i>
          Profile
        </a>

        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
          <a href="{{ route('profile.show') }}" class="dropdown-item has-icon">
            <i data-feather="user"></i>
            API Tokens
          </a>
        @endif

        <div class="dropdown-divider"></div>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <a href="{{ route('logout') }}"
            onclick="event.preventDefault();this.closest('form').submit(); "
            role="button"
            class="dropdown-item has-icon text-danger"
          >
            <i data-feather="log-out"></i>
            {{ __('Log Out') }}
          </a>
        </form>

      </div>
    </li>
  </ul>
</nav>