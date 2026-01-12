@extends('portal.layout.main')

@section('content')
    <div class="cover-all-content">
        <div class="page-title d-flex align-items-center justify-content-between gap-3 flex-wrap">
            <h2>Quotation Of <small class=" opacity-06 font-weight-400 font-24px">({{ $quotation->product?->name ?? ($quotation->service?->name ?? 'Not Found') }})</small></h2>
            <div class="d-flex flex-wrap gap-2">
                <ul class="d-flex flex-wrap gap-3">
                    <li><a href="#" class="btn white-btn gap-2 border-radius-10px border font-weight-400"
                            onclick="goBack()"><i class="bi bi-chevron-left font-16px"></i> Go Back</a></li>
                </ul>
            </div>
        </div>
        <br>
        <br>
        <div class="according-style-2">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item mb-5 rounded-2 overflow-hidden">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button ps-5 pe-10" type="button" data-bs-toggle="collapse"
                            data-bs-target="#according-st-1-1" aria-expanded="true" aria-controls="collapseOne">
                              Details
                        </button>
                    </h2>
                    <div id="according-st-1-1" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body pt-0 px-5 pb-5">
                            <hr class="mb-5 mt-0">
                            <div class="row g-4">
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Company Name: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0 text-truncate">
                                            {{ $quotation->company->full_name }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Company Email: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"
                                            style="overflow-x: auto; overflow-y:hidden">{{ $quotation->company->email }}</h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Company Phone: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0">{{ $quotation->company->phone }}</h5>
                                    </div>
                                </div>

                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Product Category: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ $quotation->product->category?->name ?? ($quotation->service->category?->name ?? 'Not Found')  }}</h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Product Name: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ $quotation->product?->name ?? ($quotation->service?->name ?? 'Not Found') }}</h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Product Brand: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ isset($quotation->product->brand) ? $quotation->product->brand : 'N/A' }} </h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Technician Name: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ $quotation->technician->full_name }} </h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Technician Email: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ $quotation->technician->email }} </h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Technician Phone: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ $quotation->technician->email }} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <br>
        <br>

        <div class="according-style-2">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item mb-5 rounded-2 overflow-hidden">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button ps-5 pe-10" type="button" data-bs-toggle="collapse"
                            data-bs-target="#according-st-1-1" aria-expanded="true" aria-controls="collapseOne">
                              Customer Details
                        </button>
                    </h2>
                    <div id="according-st-1-1" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body pt-0 px-5 pb-5">
                            <hr class="mb-5 mt-0">
                            <div class="row g-4">
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Customer Name: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0 text-truncate">
                                            {{ $quotation->customer_name }}
                                        </h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Customer Email: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"
                                            style="overflow-x: auto; overflow-y:hidden">{{ $quotation->customer_email }}</h5>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Customer Phone: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0">{{ $quotation->customer_phone }}</h5>
                                    </div>
                                </div>

                                <div class=" col-lg-12">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Customer Address: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ $quotation->customer_address  }}</h5>
                                    </div>
                                </div>
                                <div class=" col-lg-12">
                                    <div class="pb-3 border-bottom">
                                        <h6 class=" font-weight-400 font-16px mb-2">Note: </h6>
                                        <h5 class=" font-weight-600 font-18px m-0"> {{ $quotation->note }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2 g-4 mb-5">
                    <div class="col-md-4">
                        <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                            <h4 class="font-18px opacity-05 mb-3">Order Completion</h4>
                            <h4 class="font-24px font-weight-500 mb-0">1</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                            <h4 class="font-18px opacity-05 mb-3">Total Spent ($)</h4>
                            <h4 class="font-24px font-weight-500 mb-0">$300.00</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                            <h4 class="font-18px opacity-05 mb-3">Total Discounts ($)</h4>
                            <h4 class="font-24px font-weight-500 mb-0">$15.50</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                            <h4 class="font-18px opacity-05 mb-3">Last Order</h4>
                            <h4 class="font-24px font-weight-500 mb-0">October 22, 12:36am</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-radius-10px bg-white p-3 primary-border-hover" data-bs-toggle="tooltip"
                            data-bs-title="Aqua Panna">
                            <h4 class="font-18px opacity-05 mb-3">Favourite Product</h4>
                            <h4 class="font-24px font-weight-500 mb-0 text-truncate">Aqua Panna</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-radius-10px bg-white p-3 primary-border-hover">
                            <h4 class="font-18px opacity-05 mb-3">Favourite Branch</h4>
                            <h4 class="font-24px font-weight-500 mb-0 text-truncate">Blue limits</h4>
                        </div>
                    </div>


                </div>

            </div>

        </div>/
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h1 class="modal-title font-24px font-weight-600 d-flex align-items-center gap-3 m-0"
                        id="exampleModalLabel"> Create Address</h1>
                </div>
                <div class="modal-body" style="background: #F6F8FF;">
                    <form action="">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class=" form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Description </label>
                            <textarea rows="5" class=" form-control" style="--min-height: 100px; --max-height: 200px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Delivery Zone</label>
                            <select class="select-box" data-placeholder="Select any Branch">
                                <option></option>
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>

                            </select>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-3 mt-4 pt-2 flex-wrap">
                            <button type="button" class="btn btn-outline-primary extra-btn-padding-30"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary extra-btn-padding-30">Save</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="tagsAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-between">
                    <h1 class="modal-title font-24px font-weight-600 d-flex align-items-center gap-3 m-0"
                        id="exampleModalLabel"><i class="bi bi-tags"></i> Add Tags</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background: #F6F8FF;">
                    <div class="tagsparrent">
                        <input type="text" name="input" class="tagsInput form-control"
                            placeholder="Enter Your Tags">
                        <div class="mt-5 text-center d-inline-block translate-middle-x position-relative start-50">
                            <button type="button" class="btn btn-primary extra-btn-padding-25">Add Tag</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    @push('extra-js')
        <script>
            // generate random whilist items (for the demo)
            var input = document.querySelector('.tagsInput'),
                tagify = new Tagify(input, {
                    whitelist: ["Complementary", "Beautiful Cars", "Foods", "Window", "Red Bike", "Monster Truck"],
                    maxTags: 5,

                    dropdown: {
                        maxItems: 20,
                        enabled: 0 // show suggestions dropdown after 1 typed character
                    },
                    enforceWhitelist: true
                }),
                button = input.nextElementSibling; // "add new tag" action-button



            function onInvalidTag(e) {
                console.log("invalid", e.detail)
            }
        </script>
    @endpush
@endsection
