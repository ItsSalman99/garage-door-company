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

                {{-- CATEGORY TABS (SHOW ONLY ONCE) --}}
                <div class="d-flex gap-3 mb-4 flex-wrap">
                    <button class="category-btn active" data-category="all">All</button>

                    @foreach ($categories as $cat)
                        <button class="category-btn" data-category="{{ Str::slug($cat->name) }}">
                            {{ $cat->name }}
                        </button>
                    @endforeach
                </div>

                {{-- PRODUCTS GRID --}}
                <div class="row g-4" id="productContainer">

                    @foreach ($categories as $cat)
                        @foreach ($cat->products as $product)
                            <div class="col-md-4 product-card" data-category="{{ Str::slug($cat->name) }}">
                                <div class="card border-0 shadow-sm product-item" data-product="{{ $product->name }}"
                                    data-image="{{ asset($product->image) }}">

                                    <img src="{{ asset($product->image) }}" class="card-img-top">

                                    <div class="card-body">
                                        <h5>{{ $product->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                </div>
            </div>

        </div>
    </div>

    @if (auth()->user()->hasRole('technician'))
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
                                <label>Select Company</label>
                                <select class="form-control" name="company_id" required>
                                    <option value="">Select Company</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->full_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="number" min="1" class="form-control" placeholder="Enter quantity">
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
    @endif



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
