<header class="main-header">
    <a href="{{ route('admin.home') }}" class="logo">
      <span class="logo-mini"><b>D</b>In</span>
      <span class="logo-lg"><b>Donor.</b>in</span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          @guest
          
          @else
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('admin/img/adminpng.png')}}" class="user-image" alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset('admin/img/adminpng.png')}}" class="img-circle" alt="User Image">
                  <p>
                    {{ Auth::user()->name }}
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                      <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </li>
              </ul>
            </li>
          @endguest
        </ul>
      </div>
    </nav>
  </header>