  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/unnamed.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success " style="color:green;"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-dashboard fa-lg"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('employee-management') }}"><i class="fa fa-user fa-lg"></i> <span> Add Employees </span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear fa-lg"></i> <span> General Management </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/country') }}">Department</a></li>
            <li><a href="{{ url('system-management/state') }}">Designation</a></li>
            <li><a href="{{ url('system-management/city') }}">Status</a></li>
            <li><a href="{{ url('system-management/department') }}">Type</a></li>
            <li><a href="{{ url('system-management/division') }}">Blood Group</a></li>
          </ul>
        </li>
        <li><a href="{{ url('employee-management') }}"><i class="fa fa-list fa-lg"></i> <span> View all Employees </span></a></li>
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user fa-lg"></i> <span> Add User </span></a></li>
        <li><a href="{{ url('system-management/report') }}"><i class="fa fa-book fa-lg"></i> <span> Generate Reports </span></a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i><span> Logout </span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>