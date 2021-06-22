<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Albums </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.albums.index')}}">Index Album</a></li>
                        <li><a href="{{route('admin.albums.create')}}">Create Album</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Photos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.photos.index')}}">Index Photo</a></li>
                        <li><a href="{{route('admin.photos.create')}}">Create Photo</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Users </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.users.index')}}">Index User</a></li>
                        <li><a href="{{route('admin.users.create')}}">Create User</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Services </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.services.index')}}">Index Service</a></li>
                        <li><a href="{{route('admin.services.create')}}">Create Service</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Menu </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.menu.index')}}">Index Menu</a></li>
                        <li><a href="{{route('admin.menu.create')}}">Create Menu</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Company</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.company.index')}}">Index Company</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Customers</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.customer.index')}}">Index Customer</a></li>
                        <li><a href="{{route('admin.customer.create')}}">Create Customer</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="mdi mdi-view-list"></i>
                        <span> Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="{{route('admin.setting.index')}}">Index Settings</a></li>
                        {{-- <li><a href="{{route('admin.setting.create')}}">Create Settings</a></li> --}}
                    </ul>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
