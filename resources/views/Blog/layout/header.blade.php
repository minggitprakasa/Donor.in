<div class="container-fluid position-relative no-side-padding">

    <a href="{{ route('donor') }}" class="logo" alt>
        <h4>
                <b>Donor</b><small>.in</small>
        </h4>
    </a>

    <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

    <ul class="main-menu visible-on-click offset-sm-7" id="main-menu">
        <li><a href="{{ route('donor') }} ">Home</a></li>
        @if (Auth::guest())
        <li>
            <a href="{{ route('login') }}">Login</a>
        </li>
            @else
            <li><a href="{{ route('pendonor') }} ">Pendonor</a></li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endif
        </li>
    </ul>
</div>

<div class="slider display-table center-text" style="background-image: url(@yield('bg-judul'));">
		<h1 class="title display-table-cell"><b>@yield('Judul')</b></h1>
</div>
