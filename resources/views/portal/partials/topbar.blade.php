<div id="layoutSidenav_content"
    class=" position-relative d-flex flex-column min-vh-100 justify-content-between flex-grow-1 " style="min-width: 0;">
    <main>
        <nav class="sb-topnav navbar navbar-expand bg-white justify-content-between py-3 px-3 px-md-5">
            <div class="order-1 order-lg-0">
                <a class=" me-lg-0 text-dark bg-transparent d-lg-none" id="sidebarToggle" href="#!"><i
                        class="bi bi-justify-right font-20px"></i></a>
            </div>

            <div class="logo-sm d-block d-lg-none">
                {{-- <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="width-60 width-md-80"> --}}
            </div>
            <ul class="navbar-nav ms-auto me-lg-0 me-2 align-items-center gap-3">
                <li class="nav-item dropdown search position-relative">
                    <a href="#" class="nav-link dropdown-toggle caret-none p-0" data-bs-toggle="dropdown"
                        role="button" aria-expanded="false">
                        <img src="{{ asset('assets/images/icons/topBarIcons/search.svg') }}"
                            alt="" data-bs-toggle="tooltip" data-bs-title="Search"
                            style="width: auto; max-width: initial"></a>
                    <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="navbarDropdown">
                        <input type="search" placeholder="search here....">
                    </ul>
                </li>
                <li class="nav-item dropdown search position-relative">
                    <a href="#" class="nav-link p-0" data-bs-toggle="dropdown" role="button"
                        aria-expanded="false"><img src="{{ asset('assets/images/icons/topBarIcons/message.svg') }}" alt=""
                            data-bs-toggle="tooltip" data-bs-title="Messages"
                            style="width: auto; max-width: initial"></a>

                </li>
                <li class="nav-item dropdown bell position-relative">
                    <div class="notify-dot"></div>
                    <a href="#" class="nav-link dropdown-toggle caret-none p-0" data-bs-toggle="dropdown"
                        role="button" aria-expanded="false"><img src="{{ asset('assets/images/icons/topBarIcons/bell.svg') }}"
                            alt="" data-bs-toggle="tooltip" data-bs-title="Notifications"
                            style="width: auto; max-width: initial"></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <div>Notifications <a href="#." class="secondary-anchor">Mark all as read</a></div>
                        <div class="cover-notifications">
                            <li><a href="#" class="dropdown-item active">
                                    <div class="inner-notification ">
                                        <h6>New order</h6>
                                        <p>New order #1212 recieved from Fatima</p>
                                        <p>3 mins ago</p>
                                    </div>
                                </a></li>
                            <li><a href="#" class="dropdown-item active">
                                    <div class="inner-notification ">
                                        <h6>Feedback Received</h6>
                                        <p>Fatima Left Feedback for order #3121</p>
                                        <p>12 mins ago</p>
                                    </div>
                                </a></li>
                            <li><a href="#" class="dropdown-item">
                                    <div class="inner-notification ">
                                        <h6>Stock Running Out</h6>
                                        <p>Low Stock Limit Reached of Product
                                            Keenwell Gell 80 ml</p>
                                        <p>12 mins ago</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#" class="dropdown-item">
                                    <div class="inner-notification ">
                                        <h6>Stock Running Out</h6>
                                        <p>Low Stock Limit Reached of Product
                                            Keenwell Gell 80 ml</p>
                                        <p>12 mins ago</p>
                                    </div>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="nav-item dropdown profile">
                    <a class="nav-link d-flex dropdown-toggle caret-none align-items-center gap-2 p-0"
                        id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside"> <img src="assets/images/user.png"
                            alt="">
                        <div class="d-none d-lg-block" data-bs-toggle="tooltip" data-bs-title="Login Info">
                            <h6 class="text-capitalize m-0  font-15px font-weight-500">John Smith</h6>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 mt-2" aria-labelledby="navbarDropdown">
                        <li class=" bg-primary-01 border-bottom-0">
                            <a class="dropdown-item pe-none user-select-none px-3" href="javascript:void(0)">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="assets/images/user.png" alt="student-img">
                                    <div class="d-flex align-items-baseline flex-1 justify-content-between">
                                        <div>
                                            <h6 class="font-weight-700 font-18px m-0 text-primary"> John Smith</h6>
                                            <p class=" font-14px m-0">Blue Limits</p>
                                        </div>
                                        <i class="bi bi-pencil font-15px text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropstart dropdown position-relative">
                            <a class="dropdown-item caret-none text-danger" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-power font-22px"></i>
                                    <p class="m-0 flex-1">Signout</p>
                                </div>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
