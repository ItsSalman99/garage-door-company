@extends('portal.layout.main')

@section('content')


<div class="cover-all-content">
    <div class="page-title d-flex align-items-center justify-content-between gap-3 flex-wrap">
        <h2>Dashboard</h2>
    </div>
    <div class="cover-inner-content">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div class="user-area d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap gap-3">
                            <img src="assets/images/user.png" alt="" style="width: 100px; aspect-ratio: 1">
                            <div class="text-center text-lg-start">
                                <h3 class="text-primary font-25px font-md-32px">
                                    Hi,
                                    <span class=" font-weight-600">
                                        {{ auth()->user()->full_name }}
                                    </span>
                            </h3>
                            <h5 class="text-dark font-16px font-md-20px font-weight-400 m-0">Welcome to portal! </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end">
                            <p class="m-0 font-16px font-md-18px opacity-07" style="letter-spacing: 0.3px;">Status:</p>
                            <p class="m-0 font-16px font-md-18px font-weight-600" style="color: {{ (auth()->user()->status == 1) ? '#27AE60' : 'red' }}">
                                {{ (auth()->user()->status == 1) ? 'Active' : 'In-Active' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-3">
            <div class="col-md-6 col-lg-3">
                <div class="card primary-border-hover">
                    <div class="card-body">
                        <div class="salesCard d-flex align-items-center gap-3">
                            <div class="icon flex-shrink-0">
                                <img src="assets/images/icons/Total Menus.svg" alt="">
                            </div>
                            <div>
                                <h3 class="font-weight-600 font-25px font-md-32px mb-1">56</h3>
                                <h6 class=" font-weight-400 font-14px m-0">Total Menus</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card primary-border-hover">
                    <div class="card-body">
                        <div class="salesCard d-flex align-items-center gap-3">
                            <div class="icon flex-shrink-0">
                                <img src="assets/images/icons/Total Revenue.svg" alt="">
                            </div>
                            <div>
                                <h3 class="font-weight-600 font-25px font-md-32px mb-1">12K</h3>
                                <h6 class=" font-weight-400 font-14px m-0">Total Revenue</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card primary-border-hover">
                    <div class="card-body">
                        <div class="salesCard d-flex align-items-center gap-3">
                            <div class="icon flex-shrink-0">
                                <img src="assets/images/icons/Total Orders.svg" alt="">
                            </div>
                            <div>
                                <h3 class="font-weight-600 font-25px font-md-32px mb-1">2,542</h3>
                                <h6 class=" font-weight-400 font-14px m-0">Total Orders </h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card primary-border-hover">
                    <div class="card-body">
                        <div class="salesCard d-flex align-items-center gap-3">
                            <div class="icon flex-shrink-0">
                                <img src="assets/images/icons/Total Customers.svg" alt="">
                            </div>
                            <div>
                                <h3 class="font-weight-600 font-25px font-md-32px mb-1">1,456</h3>
                                <h6 class=" font-weight-400 font-14px m-0">Total Customers</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="card h-auto mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="card-title mb-0">Reservation</h5>
                                    <select class="select-box select2Height-40px" data-placeholder="Monday" data-minimum-results-for-search="Infinity" style="min-width: 157px;">
                                        <option></option>
                                        <option selected default>Monday</option>
                                        <option value="0">Tuesday</option>
                                        <option value="0">Wednesday</option>
                                        <option value="0">Thusday</option>
                                        <option value="0">Friday</option>
                                        <option value="0">Saturday</option>
                                        <option value="0">Sunday</option>
                                    </select>
                                </div>
                                <div id="chart" class="ps-4"></div>
                                <h3 class=" position-absolute top-50 font-18px font-weight-600 m-0 fst-italic" style="writing-mode: tb-rl; transform: translateY(-50%) rotate(180deg);">No. Of Orders</h3>
                                <div class="position-relative">
                                    <h3 class=" position-absolute start-50 translate-middle-x font-18px font-weight-600 m-0 fst-italic">Peek Times</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card h-auto mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h5 class="card-title mb-0">Orders Summary</h5>
                                    <div class="tabs-style-1 width-100 width-lg-auto">
                                        <div class="tabs-links">
                                            <ul class="nav nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="tabv1-1-tab" data-bs-toggle="tab" data-bs-target="#tabv1-1" type="button" role="tab" aria-controls="tabv1-1" aria-selected="true">Monthly</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="tabv1-2-tab" data-bs-toggle="tab" data-bs-target="#tabv1-2" type="button" role="tab" aria-controls="tabv1-2" aria-selected="false">Weekly</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="tabv1-3-tab" data-bs-toggle="tab" data-bs-target="#tabv1-3" type="button" role="tab" aria-controls="tabv1-3" aria-selected="false">Today</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content mt-4">
                                    <div class="tab-pane active" id="tabv1-1" role="tabpanel" aria-labelledby="tabv1-1-tab">
                                        <div class="p-3 border-radius-10px d-flex align-items-center justify-content-between bg-primary-01 gap-3 flex-wrap">
                                            <div class="d-flex align-items-center justify-content-between gap-3">
                                                <h4 class="font-18px px-3 py-2 bg-primary border-radius-10px text-white m-0">25</h4>
                                                <h5 class="font-16px text-capitalize m-0 ">New Orders</h5>
                                            </div>
                                            <ul>
                                                <li><a href="#" class="font-weight-400 font-14px" style="letter-spacing: 0.2px;">Manage Orders <i class="bi bi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="row mt-2 g-3">
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">1271</h4>
                                                    <h4 class="font-14px opacity-05 m-0">On Delivery</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">742</h4>
                                                    <h4 class="font-14px opacity-05 m-0">Dine-In</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">529</h4>
                                                    <h4 class="font-14px opacity-05 m-0">Take Away</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3 d-flex align-items-center justify-content-center justify-content-lg-between flex-wrap gap-1">
                                            <div id="dunotchart2" class="mx-lg-n4"></div>
                                            <div class="orderSummaryOptions">
                                                <div class="orderInfoArea justify-content-between align-content-center mb-3 d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">On Delivery</p>
                                                    <div class="bar dark" style="--fill-bar: 30%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>
                                                <div class="orderInfoArea justify-content-between align-content-center mb-3 d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">Dine-In </p>
                                                    <div class="bar yellow" style="--fill-bar: 50%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>
                                                <div class="orderInfoArea justify-content-between align-content-center  d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">Take Away </p>
                                                    <div class="bar" style="--fill-bar: 20%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabv1-2" role="tabpanel" aria-labelledby="tabv1-2-tab">
                                        <div class="p-3 border-radius-10px d-flex align-items-center justify-content-between bg-primary-01 gap-3 flex-wrap">
                                            <div class="d-flex align-items-center justify-content-between gap-3">
                                                <h4 class="font-18px px-3 py-2 bg-primary border-radius-10px text-white m-0">40</h4>
                                                <h5 class="font-16px text-capitalize m-0 ">New Orders</h5>
                                            </div>
                                            <ul>
                                                <li><a href="#" class="font-weight-400 font-14px" style="letter-spacing: 0.2px;">Manage Orders <i class="bi bi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="row mt-2 g-3">
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">3271</h4>
                                                    <h4 class="font-14px opacity-05 m-0">On Delivery</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">842</h4>
                                                    <h4 class="font-14px opacity-05 m-0">Dine-In</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">929</h4>
                                                    <h4 class="font-14px opacity-05 m-0">Take Away</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3 d-flex align-items-center justify-content-center justify-content-lg-between flex-wrap gap-1">
                                            <div id="dunotchart3" class="mx-lg-n4"></div>
                                            <div class="orderSummaryOptions">
                                                <div class="orderInfoArea justify-content-between align-content-center mb-3 d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">On Delivery</p>
                                                    <div class="bar dark" style="--fill-bar: 30%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>
                                                <div class="orderInfoArea justify-content-between align-content-center mb-3 d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">Dine-In </p>
                                                    <div class="bar yellow" style="--fill-bar: 50%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>
                                                <div class="orderInfoArea justify-content-between align-content-center  d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">Take Away </p>
                                                    <div class="bar" style="--fill-bar: 20%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabv1-3" role="tabpanel" aria-labelledby="tabv1-3-tab">
                                        <div class="p-3 border-radius-10px d-flex align-items-center justify-content-between bg-primary-01 gap-3 flex-wrap">
                                            <div class="d-flex align-items-center justify-content-between gap-3">
                                                <h4 class="font-18px px-3 py-2 bg-primary border-radius-10px text-white m-0">100</h4>
                                                <h5 class="font-16px text-capitalize m-0 ">New Orders</h5>
                                            </div>
                                            <ul>
                                                <li><a href="#" class="font-weight-400 font-14px" style="letter-spacing: 0.2px;">Manage Orders <i class="bi bi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="row mt-2 g-3">
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">121</h4>
                                                    <h4 class="font-14px opacity-05 m-0">On Delivery</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">42</h4>
                                                    <h4 class="font-14px opacity-05 m-0">Dine-In</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                                                    <h4 class="font-20px font-weight-600 mb-2">29</h4>
                                                    <h4 class="font-14px opacity-05 m-0">Take Away</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-3 d-flex align-items-center justify-content-center justify-content-lg-between flex-wrap gap-1">
                                            <div id="dunotchart4" class="mx-lg-n4"></div>
                                            <div class="orderSummaryOptions">
                                                <div class="orderInfoArea justify-content-between align-content-center mb-3 d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">On Delivery</p>
                                                    <div class="bar dark" style="--fill-bar: 30%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>
                                                <div class="orderInfoArea justify-content-between align-content-center mb-3 d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">Dine-In </p>
                                                    <div class="bar yellow" style="--fill-bar: 50%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>
                                                <div class="orderInfoArea justify-content-between align-content-center  d-flex gap-2">
                                                    <p class=" text-nowrap font-12px opacity-06 m-0">Take Away </p>
                                                    <div class="bar" style="--fill-bar: 20%;"></div>
                                                    <p class=" opacity-06 m-0 font-12px">(50%)</p>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="card h-auto mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between gap-3">
                                    <h5 class="card-title mb-0">Branches</h5>
                                    <select class="select-box select2Height-40px" data-placeholder="All Branches" data-minimum-results-for-search="Infinity" style="min-width: 157px;">
                                        <option></option>
                                        <option selected default>All Branches</option>
                                        <option value="0">Branches 1</option>
                                        <option value="0">Branches 2</option>
                                        <option value="0">Branches 3</option>
                                        <option value="0">Branches 4</option>
                                    </select>
                                </div>
                                <div id="dunotchart" class="mt-4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card h-auto mb-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h5 class="card-title mb-0">Trending Items</h5>
                                    <div class="tabs-style-1 width-100 width-lg-auto">
                                        <div class="tabs-links">
                                            <ul class="nav nav-pills" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="tabv2-1-tab" data-bs-toggle="tab" data-bs-target="#tabv2-1" type="button" role="tab" aria-controls="tabv2-1" aria-selected="true">Monthly</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="tabv2-2-tab" data-bs-toggle="tab" data-bs-target="#tabv2-2" type="button" role="tab" aria-controls="tabv2-2" aria-selected="false">Weekly</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="tabv2-3-tab" data-bs-toggle="tab" data-bs-target="#tabv2-3" type="button" role="tab" aria-controls="tabv2-3" aria-selected="false">Today</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content mt-4">
                                    <div class="tab-pane active" id="tabv2-1" role="tabpanel" aria-labelledby="tabv2-1-tab">
                                        <div class="horizontalScroll" style="height: 494px; overflow-y: auto">
                                            <ul class="bl-spacing-5px">
                                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                    <li>
                                                        <div class="d-flex align-items-start align-items-lg-center trendingItems gap-2">
                                                            <h3 class="font-18px mb-0 flex-shrink-0" style="width: 43px;">#<?php echo $i ?></h3>
                                                            <div class="d-flex align-items-center flex-wrap gap-2 gap-lg-3">
                                                                <img src="assets/images/product/1.jpg" alt="" style="width: 50px; height: 50px;box-shadow: 0px 0px 8px 0px #1F1F1F40; border:1px solid var(--bs-primary)" class="border-radius-6px">
                                                                <div>
                                                                    <ul>
                                                                        <li><a href="#" class="link-dark font-16px d-block text-truncate" style="width: 190px;">Double cheese meal</a></li>
                                                                    </ul>
                                                                    <p class="font-weight-400 m-0 font-14px text-primary"><span class=" font-weight-600">Category:</span> Extra Value Meal</p>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto flex-shrink-0">
                                                                <img src="assets/images/increment.svg" alt="">
                                                            </div>
                                                            <div class="text-center ms-auto">
                                                                <h4 class="font-16px font-weight-600">3123</h4>
                                                                <h6 class="font-12px font-weight-400 opacity-07 m-0">Sales</h6>
                                                            </div>
                                                        </div>
                                                    </li>

                                                <?php } ?>
                                            </ul>


                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabv2-2" role="tabpanel" aria-labelledby="tabv2-2-tab">
                                        <div style="height: 494px; overflow-y: auto">
                                            <ul class="bl-spacing-5px">
                                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                    <li>
                                                        <div class="d-flex align-items-start align-items-lg-center trendingItems gap-2">
                                                            <h3 class="font-18px mb-0 flex-shrink-0" style="width: 43px;">#<?php echo $i ?></h3>
                                                            <div class="d-flex align-items-center flex-wrap gap-2 gap-lg-3">
                                                                <img src="assets/images/product/1.jpg" alt="" style="width: 50px; height: 50px;box-shadow: 0px 0px 8px 0px #1F1F1F40; border:1px solid var(--bs-primary)" class="border-radius-6px">
                                                                <div>
                                                                    <ul>
                                                                        <li><a href="#" class="link-dark font-16px d-block text-truncate" style="width: 190px;">Double cheese meal</a></li>
                                                                    </ul>
                                                                    <p class="font-weight-400 m-0 font-14px text-primary"><span class=" font-weight-600">Category:</span> Extra Value Meal</p>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto flex-shrink-0">
                                                                <img src="assets/images/increment.svg" alt="">
                                                            </div>
                                                            <div class="text-center ms-auto">
                                                                <h4 class="font-16px font-weight-600">3123</h4>
                                                                <h6 class="font-12px font-weight-400 opacity-07 m-0">Sales</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabv2-3" role="tabpanel" aria-labelledby="tabv2-3-tab">
                                        <div style="height: 494px; overflow-y: auto">
                                            <ul class="bl-spacing-5px">
                                                <?php for ($i = 1; $i <= 10; $i++) { ?>
                                                    <li>
                                                        <div class="d-flex align-items-start align-items-lg-center trendingItems gap-2">
                                                            <h3 class="font-18px mb-0 flex-shrink-0" style="width: 43px;">#<?php echo $i ?></h3>
                                                            <div class="d-flex align-items-center flex-wrap gap-2 gap-lg-3">
                                                                <img src="assets/images/product/1.jpg" alt="" style="width: 50px; height: 50px;box-shadow: 0px 0px 8px 0px #1F1F1F40; border:1px solid var(--bs-primary)" class="border-radius-6px">
                                                                <div>
                                                                    <ul>
                                                                        <li><a href="#" class="link-dark font-16px d-block text-truncate" style="width: 190px;">Double cheese meal</a></li>
                                                                    </ul>
                                                                    <p class="font-weight-400 m-0 font-14px text-primary"><span class=" font-weight-600">Category:</span> Extra Value Meal</p>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto flex-shrink-0">
                                                                <img src="assets/images/increment.svg" alt="">
                                                            </div>
                                                            <div class="text-center ms-auto">
                                                                <h4 class="font-16px font-weight-600">3123</h4>
                                                                <h6 class="font-12px font-weight-400 opacity-07 m-0">Sales</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php } ?>
                                            </ul>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                            <div class="d-flex align-items-center gap-2">
                                <h5 class="card-title mb-0">Branches</h5>
                                <div class="d-none d-lg-block">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 border border-radius-4px px-2 py-1">
                                            <span style="width: 12px; height: 12px;" class="borde-radius-2px bg-primary"></span>
                                            <p class="font-12px font-weight-400 m-0">This Year</p>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 border border-radius-4px px-2 py-1">
                                            <span style="width: 12px; height: 12px; background: #FFA359" class="borde-radius-2px"></span>
                                            <p class="font-12px font-weight-400 m-0">Last Year</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <select class="select-box select2Height-40px" data-placeholder="All Branches" data-minimum-results-for-search="Infinity" style="min-width: 157px;">
                                    <option></option>
                                    <option selected default>All Branches</option>
                                    <option value="0">Branches 1</option>
                                    <option value="0">Branches 2</option>
                                    <option value="0">Branches 3</option>
                                    <option value="0">Branches 4</option>
                                </select>
                                <div class="DateCard bg-white border border-radius-10px" style="--minHeight: 40px">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-calendar2-event"></i>
                                    </div>
                                    <input type="text" class="selectDate" placeholder="Start Date">
                                    <span>-</span>
                                    <input type="text" class="selectDate" placeholder="End Date">
                                </div>
                            </div>
                        </div>
                        <div id="revenuChart"></div>
                        <div class=" d-lg-none">
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <div class="d-flex align-items-center gap-2 border border-radius-4px px-2 py-1">
                                    <span style="width: 12px; height: 12px;" class="borde-radius-2px bg-primary"></span>
                                    <p class="font-12px font-weight-400 m-0">This Year</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 border border-radius-4px px-2 py-1">
                                    <span style="width: 12px; height: 12px; background: #FFA359" class="borde-radius-2px"></span>
                                    <p class="font-12px font-weight-400 m-0">Last Year</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    window.Promise ||
        document.write(
            '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
    window.Promise ||
        document.write(
            '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
    window.Promise ||
        document.write(
            '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
</script>


<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        series: [{
            name: 'Actual',
            data: [{
                    x: '2011',
                    y: 1292,
                    goals: [{
                        name: 'Expected',
                        value: 1400,
                        strokeHeight: 5,
                        strokeColor: '#FF8100'
                    }]
                },
                {
                    x: '2012',
                    y: 4432,
                    goals: [{
                        name: 'Expected',
                        value: 5400,
                        strokeHeight: 5,
                        strokeColor: '#FF8100'
                    }]
                },
                {
                    x: '2013',
                    y: 5423,
                    goals: [{
                        name: 'Expected',
                        value: 5200,
                        strokeHeight: 5,
                        strokeColor: '#FF8100'
                    }]
                },
                {
                    x: '2014',
                    y: 6653,
                    goals: [{
                        name: 'Expected',
                        value: 6500,
                        strokeHeight: 5,
                        strokeColor: '#FF8100'
                    }]
                },
                {
                    x: '2015',
                    y: 8133,
                    goals: [{
                        name: 'Expected',
                        value: 6600,
                        strokeHeight: 13,
                        strokeWidth: 0,
                        strokeLineCap: 'round',
                        strokeColor: '#FF8100'
                    }]
                },
                {
                    x: '2016',
                    y: 7132,
                    goals: [{
                        name: 'Expected',
                        value: 7500,
                        strokeHeight: 5,
                        strokeColor: '#FF8100'
                    }]
                },
                {
                    x: '2017',
                    y: 7332,
                    goals: [{
                        name: 'Expected',
                        value: 8700,
                        strokeHeight: 5,
                        strokeColor: '#FF8100'
                    }]
                },
                {
                    x: '2018',
                    y: 6553,
                    goals: [{
                        name: 'Expected',
                        value: 7300,
                        strokeHeight: 2,
                        strokeDashArray: 2,
                        strokeColor: '#FF8100'
                    }]
                }
            ]
        }],
        chart: {
            height: 350,
            type: 'bar'
        },
        plotOptions: {
            bar: {
                columnWidth: '60%'
            }
        },
        colors: ['#F1416C'],
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false,

        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    // Dunotchart
    var dunotchart = {
        series: [33.3, 20.8, 21.9, 6.1, 4.5, 14.2],

        plotOptions: {
            pie: {
                donut: {
                    width: 200,
                    size: '80%',
                    background: 'transparent',

                },


            }
        },

        chart: {
            type: 'donut',
        },

        dataLabels: {
            enabled: false,
        },

        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    show: false
                }
            }
        }],
        legend: {
            width: 250,
            position: 'right',
            offsetY: 0,

        },
        colors: ['#EB5757', '#F2C94C', '#27AE60', '#2D9CDB', '#9B51E0', '#5C5C5C'],
        labels: [`Blue limits ${'<span class="opacity-05">(33.3%)</span>'}`, `HillTown Cafe ${'<span class="opacity-05">(20.8%)</span>'}`, `Illinois Track ${'<span class="opacity-05">(21.9%)</span>'}`, `Boho Beach ${'<span class="opacity-05">(6.1%)</span>'}`, `Fournous Cafe ${'<span class="opacity-05">(4.5%)</span>'}`, `OIA Beach ${'<span class="opacity-05">(14.2%)</span>'}`]
    };

    var chart = new ApexCharts(document.querySelector("#dunotchart"), dunotchart);
    chart.render();




    // Dunotchart
    var dunotchart2 = {
        series: [50, 29.17, 20.83],

        plotOptions: {
            pie: {
                donut: {
                    size: '40%',
                    background: 'transparent',

                },

            }
        },

        chart: {
            width: 200,
            type: 'donut',
        },

        dataLabels: {
            enabled: false,
        },

        responsive: [{
            breakpoint: 480,
            options: {
                legend: {
                    show: false
                }
            }
        }],
        legend: {
            show: false,
            width: 250,
            position: 'right',
            offsetY: 0,
        },
        colors: ['#4f4f4f', '#FFA359', '#f1416c'],

    };

    var chart = new ApexCharts(document.querySelector("#dunotchart2"), dunotchart2);
    var chart3 = new ApexCharts(document.querySelector("#dunotchart3"), dunotchart2);
    var chart4 = new ApexCharts(document.querySelector("#dunotchart4"), dunotchart2);
    chart.render();
    chart3.render();
    chart4.render();

    // revenu Chart
    var revenuChart = {
        series: [{
            name: 'This Year',
            data: ["30 ", "40", "35", "50 ", "49 ", "60 ", "70 ", "91 ", "125"]
        }, {
            name: 'Last Year',
            data: ["30 ", "40", "3", "5 ", "4 ", "60 ", "70 ", "9 ", "25"]
        }],
        chart: {
            height: 400,
            type: 'area',
            background: 'transparent'
        },
        dataLabels: {
            enabled: false
        },

        legend: {
            show: false,
        },
        colors: ['#FFA359', '#F1416C'],
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'category',
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        },
        yaxis: {
            labels: {
                formatter: function(value) {
                    return "$" + value;
                }
            },
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var revenu = new ApexCharts(document.querySelector("#revenuChart"), revenuChart);
    revenu.render();
</script>
