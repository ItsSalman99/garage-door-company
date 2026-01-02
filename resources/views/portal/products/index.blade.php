@extends('portal.layout.main')

@push('extra-css')
    <style>
        .category-btn {
            padding: 10px 25px;
            border-radius: 30px;
            border: none;
            background: #f4f4f4;
            font-weight: 500;
            transition: .3s;
            cursor: pointer;
        }

        .category-btn.active {
            background: dodgerblue;
            color: white;
        }

        .category-btn:hover {
            background: dodgerblue;
            color: white;
        }

        .card img {
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
        }
    </style>
@endpush

@section('content')
    <div class="cover-all-content">
        <div class="page-title d-flex align-items-center justify-content-between gap-3 flex-wrap">
            <h2>Products</h2>
        </div>
        <br>
        <br>
        <div class=" position-relative">
            <div class="DTable-top-elements justify-content-center justify-content-lg-end">
                <div class="d-flex  flex-wrap flex-lg-nowrap gap-2">
                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-primary gap-2"><i
                            class="bi bi-person-plus-fill"></i> Add Product</a> --}}
                </div>
            </div>
            <div class="container py-5">

                <!-- Category Tabs -->
                <div class="d-flex gap-3 mb-4">
                    <button class="category-btn active" data-category="all">All</button>
                    <button class="category-btn" data-category="electronics">Electronics</button>
                    <button class="category-btn" data-category="clothing">Clothing</button>
                    <button class="category-btn" data-category="accessories">Accessories</button>
                    <button class="category-btn" data-category="home">Home & Garden</button>
                </div>

                <!-- Products Grid -->
                <div class="row g-4" id="productContainer">

                    <!-- Product -->
                    <div class="col-md-4 product-card" data-category="electronics">
                        <div class="card border-0 shadow-sm product-item" data-product="Headphones">
                            <img src="https://picsum.photos/400/300?1" class="card-img-top">
                            <div class="card-body">
                                <h5>Headphones</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 product-card" data-category="electronics">
                        <div class="card border-0 shadow-sm product-item" data-product="Headphones">
                            <img src="https://picsum.photos/400/300?2" class="card-img-top">
                            <div class="card-body">
                                <h5>Smart Watch</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 product-card" data-category="clothing">
                        <div class="card border-0 shadow-sm product-item" data-product="Headphones">
                            <img src="https://picsum.photos/400/300?3" class="card-img-top">
                            <div class="card-body">
                                <h5>Leather Jacket</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 product-card" data-category="accessories">
                        <div class="card border-0 shadow-sm product-item" data-product="Headphones">
                            <img src="https://picsum.photos/400/300?4" class="card-img-top">
                            <div class="card-body">
                                <h5>Sunglasses</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 product-card" data-category="home">
                        <div class="card border-0 shadow-sm product-item" data-product="Headphones">
                            <img src="https://picsum.photos/400/300?5" class="card-img-top">
                            <div class="card-body">
                                <h5>Plant Pot</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h1 class="modal-title font-24px font-weight-600 d-flex align-items-center gap-3 m-0"
                        id="exampleModalLabel"> Add Technicians</h1>
                </div>
                <div class="modal-body" style="background: #F6F8FF;">
                    <form id="addForm">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <label for="full_name">Full Name:</label>
                                <input type="text" name="full_name" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="full_name">Phone:</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <label for="full_name">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <label for="full_name">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <label for="full_name">Date Of Birth:</label>
                                <input type="date" name="dob" class="form-control">
                            </div>
                            <div class="col-lg-12">
                                <label for="full_name">Address:</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label for="full_name">Country:</label>
                                <input type="text" name="country" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <label for="full_name">City:</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-3 mt-4 pt-2 flex-wrap">
                                <button type="button" class="btn btn-outline-primary extra-btn-padding-30"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" id="saveBtn"
                                    class="btn btn-primary extra-btn-padding-30">Save</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h1 class="modal-title font-24px font-weight-600 d-flex align-items-center gap-3 m-0"
                        id="exampleModalLabel"><i class="bi bi-sliders"></i> Filters</h1>
                    <ul>
                        <li><a href="#" class=" link-primary font-14px text-decoration-underline">Clear All</a></li>
                    </ul>
                </div>
                <div class="modal-body" style="background: #F6F8FF;">
                    <form action="">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Phone</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Tag</label>
                                    <select class="select-box" data-placeholder="All Types"
                                        data-minimum-results-for-search="Infinity" style="min-width: 220px;">
                                        <option></option>
                                        <option selected default>All Types</option>
                                        <option>Types 1</option>
                                        <option>Types 2</option>
                                        <option>Types 3</option>
                                        <option>Types 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Has Orders</label>
                                    <select class="select-box" data-placeholder="Has Orders"
                                        data-minimum-results-for-search="Infinity" style="min-width: 220px;">
                                        <option></option>
                                        <option selected default>Has Orders</option>
                                        <option>Has Orders 1</option>
                                        <option>Has Orders 2</option>
                                        <option>Has Orders 3</option>
                                        <option>Has Orders 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Blacklists</label>
                                    <select class="select-box" data-placeholder="Blacklists"
                                        data-minimum-results-for-search="Infinity" style="min-width: 220px;">
                                        <option></option>
                                        <option selected default>Blacklists</option>
                                        <option>Blacklists 1</option>
                                        <option>Blacklists 2</option>
                                        <option>Blacklists 3</option>
                                        <option>Blacklists 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Loyalty Enabled</label>
                                    <select class="select-box" data-placeholder="All Types"
                                        data-minimum-results-for-search="Infinity" style="min-width: 220px;">
                                        <option></option>
                                        <option selected default>All Types</option>
                                        <option>Loyalty Enabled 1</option>
                                        <option>Loyalty Enabled 2</option>
                                        <option>Loyalty Enabled 3</option>
                                        <option>Loyalty Enabled 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">House Account Enabled</label>
                                    <select class="select-box " data-placeholder="All Status"
                                        data-minimum-results-for-search="Infinity" style="min-width: 177px;">
                                        <option></option>
                                        <option>All Status</option>
                                        <option>Draft</option>
                                        <option>Pending</option>
                                        <option>Active</option>
                                        <option>Ahead</option>
                                        <option>Call Center</option>
                                        <option>API</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Deleted</label>
                                    <select class="select-box " data-placeholder="Any"
                                        data-minimum-results-for-search="Infinity" style="min-width: 177px;">
                                        <option></option>
                                        <option>Any</option>
                                        <option>Any 1</option>
                                        <option>Any 2</option>
                                        <option>Any 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group m-0">
                                    <label for="">Updated After</label>
                                    <input type="text" class="form-control selectDate" placeholder="All Soruce">
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-3 mt-4 pt-2 flex-wrap">
                                <button type="button" class="btn btn-outline-primary extra-btn-padding-30"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary extra-btn-padding-30">Apply</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="quotationModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h5 class="modal-title">Request a Quotation</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form>
                        <input type="hidden" id="productName">

                        <div class="mb-3">
                            <label>Product</label>
                            <input type="text" class="form-control" id="productTitle" readonly>
                        </div>

                        <div class="mb-3">
                            <label>Quantity</label>
                            <input type="number" class="form-control" placeholder="Enter quantity">
                        </div>

                        <div class="mb-3">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" placeholder="Your requirements..."></textarea>
                        </div>

                        <button class="btn btn-primary w-100">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('extra-js')
        <script>
            const buttons = document.querySelectorAll('.category-btn');
            const products = document.querySelectorAll('.product-card');

            buttons.forEach(btn => {
                btn.addEventListener('click', () => {

                    // Remove active class
                    buttons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const category = btn.getAttribute('data-category');

                    products.forEach(product => {
                        if (category === "all" || product.getAttribute('data-category') === category) {
                            product.style.display = "block";
                        } else {
                            product.style.display = "none";
                        }
                    });

                });
            });

            const productItems = document.querySelectorAll('.product-item');

            productItems.forEach(item => {
                item.addEventListener('click', () => {
                    const product = item.getAttribute('data-product');

                    document.getElementById('productTitle').value = product;

                    const modal = new bootstrap.Modal(document.getElementById('quotationModal'));
                    modal.show();
                });
            });
        </script>
    @endpush
@endsection
