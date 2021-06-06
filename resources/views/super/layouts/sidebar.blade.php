  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/image/{{ Auth::user()->image }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Organisateurs</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



      <!-- Sidebar Menu -->
      <nav class="mt-2">

                <ul class="nav">

                                    <li class="nav-item nav-dropdown">
                            <a class="nav-link  nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-users nav-icon">

                                </i>
                                User management
                            </a>
                            <ul class="nav-dropdown-items">
                                                            <li class="nav-item">
                                        <a href="" class="nav-link ">
                                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                                            </i>
                                            Permissions
                                        </a>
                                    </li>
                                                                                    <li class="nav-item">
                                        <a href="" class="nav-link ">
                                            <i class="fa-fw fas fa-briefcase nav-icon">

                                            </i>
                                            Roles
                                        </a>
                                    </li>
                                                                                    <li class="nav-item">
                                        <a href="" class="nav-link ">
                                            <i class="fa-fw fas fa-user nav-icon">

                                            </i>
                                            Users
                                        </a>
                                    </li>
                                                    </ul>
                        </li>
                                                <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="fa-fw fas fa-cogs nav-icon">

                                </i>
                                Services
                            </a>
                        </li>
                                                <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="fa-fw fas fa-cogs nav-icon">

                                </i>
                                Employees
                            </a>
                        </li>

                                                <li class="nav-item open">
                            <a href="#" class="nav-link active">
                                <i class="fa-fw fas fa-cogs nav-icon">

                                </i>
                                Reservation
                            </a>
                        </li>
                                <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="nav-icon fa-fw fas fa-calendar">

                            </i>
                            Calendar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.  getElementById('logout-form').submit();">
                            <i class="nav-icon fas fa-fw fa-sign-out-alt">

                            </i>

                            Logout
                        </a>
                        <form action="{{route('logout')}}" id="logout-form" method="POST">@csrf</form>
                    </li>
                </ul>






        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
