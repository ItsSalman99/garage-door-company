    <!-- start side bar -->
    <!-- <div class="preloader position-fixed top-0 start-0 w-100 h-100 bg-white" style="
        z-index: 999999;
        background: url(assets/images/icons/loading-bg.svg) no-repeat
          center/cover;
      ">
        <div class="centercontent h-100 d-flex align-items-center justify-content-center flex-column gap-4">
            <img src="assets/images/logo.png" alt="" class="width-50 width-md-25" />
            <div class="fill-bar"></div>
            <img src="assets/images/icons/loading-bg2.svg" alt="" class="width-60 width-md-40 position-absolute top-50 start-50 rotate360" />
        </div>
    </div> -->

    <div id="layoutSidenav" class="d-flex min-vh-100">
        <div id="layoutSidenav_nav" class=" height-100vh position-fixed top-0 start-0"
            style="width: var(--sidebarwidth);">
            <!-- logo -->
            <div class="logo bg-white w-100 text-center p-3 d-none d-lg-block position-relative"
                style="border-bottom: 1px solid var(--bs-gray-200);">
                <div class="d-flex align-items-cener justify-content-center h-100">
                    <a href="#." class="d-inline-flex">
                        {{-- <img src="assets/images/logo.svg" alt=""
                            class="mx-auto"> --}}
                        Admin Portal
                    </a>
                </div>
            </div>
            <!-- sidemenu links -->
            <nav class="sb-sidenav accordion bg-white d-flex flex-column overflow-hidden min-vh-100 flex-nowrap"
                id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="cover-nav height-100vh px-4">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading pb-3">
                                <h4 class="font-14px m-0 opacity-07 font-weight-500 text-uppercase">Main Menu</h4>
                            </div>
                            <a class="nav-link active" href="{{ route('portal.dashboard') }}">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Dashboard.svg"
                                        alt=""></div>
                                Dashboard
                            </a>
                            <a class="nav-link " href="#.">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Marketplace.svg"
                                        alt=""></div>
                                Products
                            </a>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
