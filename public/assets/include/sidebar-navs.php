<!doctype html>
<html lang="en">

<head>
    <?php include("assets/include/partials/Header.php") ?>
</head>

<body>
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
        <div id="layoutSidenav_nav" class=" height-100vh position-fixed top-0 start-0" style="width: var(--sidebarwidth);">
            <!-- logo -->
            <div class="logo bg-white w-100 text-center p-3 d-none d-lg-block position-relative" style="border-bottom: 1px solid var(--bs-gray-200);">
                <div class="d-flex align-items-cener justify-content-center h-100">
                    <a href="index.php" class="d-inline-flex"><img src="assets/images/logo.svg" alt="" class="mx-auto"></a>
                </div>
            </div>
            <!-- go to website buttton -->
            <div class="bg-white position-relative d-flex align-items-center" style="border-bottom: 1px solid var(--bs-gray-200);">
                <a href="#." class="bg-primary-hover d-inline-flex gap-3 text-dark pe-4 ps-5 w-100 py-3 font-weight-400 text-primary-hover" style="--bg-primary-hover: 0.1;"><img src="assets/images/icons/sidemenus/WebsiteView.svg" alt="" style="width: 22px; "><span class=" hover-this">Website View</span></a>
            </div>
            <!-- sidemenu links -->
            <nav class="sb-sidenav accordion bg-white d-flex flex-column overflow-hidden min-vh-100 flex-nowrap" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="cover-nav height-100vh px-4">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading pb-3">
                                <h4 class="font-14px m-0 opacity-07 font-weight-500 text-uppercase">Main Menu</h4>
                            </div>
                            <a class="nav-link active" href="home.php">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Dashboard.svg" alt=""></div>
                                Dashboard
                            </a>
                            <a class="nav-link " href="order.php">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/order.svg" alt=""></div>
                                Orders
                            </a>
                            <a class="nav-link collapsed sidenav-active" href="#" data-bs-toggle="collapse" data-bs-target="#Reservations" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Reservations.svg" alt=""></div>
                                Reservations
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                            </a>
                            <div class="collapse" id="Reservations" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link" href="reservationsFloor.php">
                                        Manage Floor
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="reservationsManageTable.php">
                                        Manage Table
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="#.">
                                        Manage Reservation
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link " href="customer.php">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Customers.svg" alt=""></div>
                                Customers
                            </a>
                            <a class="nav-link collapsed sidenav-active" href="#" data-bs-toggle="collapse" data-bs-target="#Reports" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Reservations.svg" alt=""></div>
                                Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                            </a>
                            <div class="collapse" id="Reports" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link" href="reportSales.php">
                                        Sales
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="reportAnalysis.php">
                                        Analysis
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="reportPayments.php">
                                        Payments
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="reportInventoryLevels.php">
                                        Inventory level
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="#.">
                                        Inventory Control
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="#.">
                                        Inventory History
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="#.">
                                        Others
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed sidenav-active" href="#" data-bs-toggle="collapse" data-bs-target="#Inventory" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Inventory.svg" alt=""></div>
                                Inventory
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                            </a>
                            <div class="collapse" id="Inventory" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link" href="inventoryItems.php">
                                        Items
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventorySupplier.php">
                                        Suppliers
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventoryPurchaseOrders.php">
                                        Purchase Orders
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventoryTransferOrders.php">
                                        Transfer Orders
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventoryCount.php">
                                        Inventory Count
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventoryPurchasingTransactions.php">
                                        Purchasing
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventoryTransfers.php">
                                        Transfer
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventoryProduction.php">
                                        Production
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="inventoryOthers.php">
                                        Others
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed sidenav-active" href="#" data-bs-toggle="collapse" data-bs-target="#Menu" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Menu.svg" alt=""></div>
                                Menu
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                            </a>
                            <div class="collapse" id="Menu" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link" href="menuCategoriy.php">
                                        Categories
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="MenuProduct.php">
                                        Products
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="menusCombos.php">
                                        Combos
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="menuGiftCard.php">
                                        Gift Cards
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="menuModifier.php">
                                        Modifier
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="menuAddons.php">
                                        Addons
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="menuGroups.php">
                                        Group
                                    </a>
                                </nav>

                            </div>
                            <a class="nav-link collapsed sidenav-active" href="#" data-bs-toggle="collapse" data-bs-target="#Manage" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Manage.svg" alt=""></div>
                                Manage
                                <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                            </a>
                            <div class="collapse" id="Manage" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link" href="manageUsers.php">
                                        Users
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="manageRoles.php">
                                        Roles
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="manageBranches.php">
                                        Branches
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="manageDevice.php">
                                        Devices
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="manageDiscount.php">
                                        Discounts
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="manageCoupon.php">
                                        Coupons
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="managePromotion.php">
                                        Promotions
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="manageTimeEvents.php">
                                        Timed Events
                                    </a>
                                </nav>
                                <nav class="sb-sidenav-menu-nested">
                                    <a class="nav-link " href="manageOthers.php">
                                        Others
                                    </a>
                                </nav>

                            </div>
                            <a class="nav-link " href="#">
                                <div class="sb-nav-link-icon"><img src="assets/images/icons/sidemenus/Marketplace.svg" alt=""></div>
                                Marketplace
                            </a>
                        </div>
                    </div>
                </div>

            </nav>
        </div>