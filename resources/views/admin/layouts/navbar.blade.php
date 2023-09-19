<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="/admin/assets/img/user.jpg" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="ms-3">
            <h6 class="mb-0">{{ auth()->user()->name }}</h6>
            <span>{{-- {{ auth()->user()->role-<role_name }} --}}</span>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Elements</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                      {{-- super admin --}}
                                      @role('SuperAdmin')
                                    <a href="{{ route('admin.users.index') }}" class="dropdown-item">Admin</a>
                                    <a href="#" class="dropdown-item">Roles</a>
                                    <a href="{{ route('admin.audits.index') }}" class="nav-item nav-link @yield('audits')"><i class="fa fa-table me-2"></i>Audits</a>
                                    <a href="#" class="dropdown-item">Logins</a>

                                    @endrole

                                    @hasanyrole

                                    @hasanyrole('SuperAdmin|writer')
                                    <a href="{{ route('admin.categories.index') }}" class="nav-item nav-link @yield('categories')"><i class="fa fa-th me-2"></i>Categories</a>
                                    <a href="{{ route('admin.posts.index') }}" class="nav-item nav-link @yield('posts')"><i class="fa fa-keyboard me-2"></i>Posts</a>
                                    @endhasanyrole

                                    @role('Admin')
                            <a href="{{ route('admin.messages.index') }}" class="nav-item nav-link @yield('massage')"><i class="fa fa-table me-2"></i>massages</a>
                            @endrole
                            <a href="{{ route('admin.tags.index') }}" class="nav-item nav-link @yield('tags')"><i class="fa fa-table me-2"></i>tags</a>

                        </div>
                    </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                              {{-- super admin --}}
                              @role('SuperAdmin')
                            <a href="{{ route('admin.users.index') }}" class="dropdown-item">Admin</a>
                            <a href="#" class="dropdown-item">Roles</a>
                            <a href="{{ route('admin.audits.index') }}" class="dropdown-item">Audits</a>
                              <a href="#" class="dropdown-item">Logins</a>

                            @endrole

                            @hasanyrole



                    <a href="{{ route('admin.messages.index') }}" class="nav-item nav-link @yield('massage')"><i class="fa fa-table me-2"></i>massages</a>
                    <a href="{{ route('admin.audits.index') }}" class="nav-item nav-link @yield('audits')"><i class="fa fa-table me-2"></i>Audits</a>
                    <a href="{{ route('admin.tags.index') }}" class="nav-item nav-link @yield('tags')"><i class="fa fa-table me-2"></i>tags</a>
                </div>
            </div>

            <a href="{{ route('admin.categories.index') }}" class="nav-item nav-link @yield('categories')"><i class="fa fa-th me-2"></i>Categories</a>
            <a href="{{ route('admin.posts.index') }}" class="nav-item nav-link @yield('posts')"><i class="fa fa-keyboard me-2"></i>Posts</a>


            {{-- <a href="#" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
            <div class="nav-item dropdown">

                {{-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div> --}}

            </div>
        </div>
    </nav>
</div>
