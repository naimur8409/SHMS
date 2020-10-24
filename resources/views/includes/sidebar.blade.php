
                <div class="side-content-wrap">
                    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                        <ul class="navigation-left">
                            <li class="nav-item">
                                <a class="nav-item-hold" href="{{ route('dashboard') }}">
                                    <i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span>
                                </a>
                            </li>
                            @if(auth()->user()->hasRole('admin'))

                            <li class="nav-item" data-item="user">
                                <a class="nav-item-hold" href="#">
                                    <i class="text-20 i-Doctor"></i><span class="nav-text">User Setting</span>
                                </a>
                                <div class="triangle"></div>
                            </li>

                            <li class="nav-item" data-item="doctor">
                                <a class="nav-item-hold" href="#">
                                    <i class="text-20 i-Doctor"></i><span class="nav-text">Doctor Setting</span>
                                </a>
                                <div class="triangle"></div>
                            </li>


                            <li class="nav-item" data-item="disease">
                                <a class="nav-item-hold" href="#">
                                    <i class="text-20 i-Doctor"></i><span class="nav-text">Disease Setting</span>
                                </a>
                                <div class="triangle"></div>
                            </li>
                            @endif


                            @if(auth()->user()->hasRole('assistant_of_doctor'))
                            <li class="nav-item" data-item="serial">
                                <a class="nav-item-hold" href="#">
                                    <i class="text-20 i-Doctor"></i><span class="nav-text">Serials</span>
                                </a>
                                <div class="triangle"></div>
                            </li>
                            @endif
                        </ul>
                    </div>

                    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">

                        <ul class="childNav" data-parent="user">
                            <li class="nav-item">
                                <a href="{{ route('user.list') }}">
                                    <i class="i-Receipt-3"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="item-name">User List</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('user.create') }}">
                                    <i class="i-Receipt-3"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="item-name">Add User</span>
                                </a>
                            </li>

                        </ul>

                        <ul class="childNav" data-parent="doctor">
                            <li class="nav-item">
                                <a href="{{ route('doctor.list') }}">
                                    <i class="i-Receipt-3"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="item-name">Doctor List</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('doctor.create') }}">
                                    <i class="i-Receipt-3"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="item-name">Add Doctor</span>
                                </a>
                            </li>

                        </ul>


                        <ul class="childNav" data-parent="disease">
                            <li class="nav-item">
                                <a href="{{ route('disease.list') }}">
                                    <i class="i-Receipt-3"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="item-name">Disease List</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('disease.create') }}">
                                    <i class="i-Receipt-3"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="item-name">Add New Disease</span>
                                </a>
                            </li>

                        </ul>


                        <ul class="childNav" data-parent="serial">
                            <li class="nav-item">
                                <a href="{{ route('serial.list') }}">
                                    <i class="i-Receipt-3"></i>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="item-name">Serial List</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="sidebar-overlay"></div>
                </div>
