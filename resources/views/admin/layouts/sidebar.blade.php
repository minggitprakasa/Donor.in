<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      @guest

      @else
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('admin/img/adminpng.png') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info" style="text-transform:capitalize">
            <p>{{ Auth::user()->name }} </p>
          </div>
        </div>
      @endguest
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
            <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i> Post</a></li>
            @can('posts.category', Auth::user())
                <li class=""><a href="{{ route('category.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
            @endcan
            @can('posts.tag', Auth::user())
                <li class=""><a href="{{ route('tag.index')}}"><i class="fa fa-circle-o"></i> Tags</a></li>
            @endcan
            <li class=""><a href="{{ route('user.index')}} "><i class="fa fa-circle-o"></i> User</a></li>
            {{-- @can('posts.role', Auth::user()) --}}
                <li class=""><a href="{{ route('role.index')}} "><i class="fa fa-circle-o"></i> Roles</a></li>
            {{-- @endcan --}}
            <li class=""><a href="{{ route('permission.index')}} "><i class="fa fa-circle-o"></i> Permission</a></li>
            <li class=""><a href="{{ route('pendonor.index')}} "><i class="fa fa-circle-o"></i> Pendonor</a></li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
