@extends('portal.layout.main')

@section('content')
    <div class="cover-all-content">
        <div class="page-title d-flex align-items-center justify-content-between gap-3 flex-wrap">
            <h2>Services</h2>
        </div>
        <br>
        <br>
        <div class=" position-relative">
            <div class="DTable-top-elements justify-content-center justify-content-lg-end">
                <div class="d-flex  flex-wrap flex-lg-nowrap gap-2">
                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-primary gap-2"><i
                            class="bi bi-person-plus-fill"></i> Add Service</a> --}}
                </div>
            </div>
            <div class="cover-datatable">
                <table class="display align-middle" id="datatableCheckbox" cellspacing="0" width="100%" data-ordering="false"
                    data-searching="false">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Quotation</th>
                            <th>#ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Market</th>
                            <th>Common Emergency</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $item)
                            <tr>
                                <td></td>
                                <td><i class="bi bi-plus-square-fill text-primary service-item" data-service-id="{{ $item->id }}"
                                    data-service="{{ $item->name }}"></i></td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td style="max-width: 120px;">
                                    <span class="d-inline-block text-truncate" style="max-width: 120px;">
                                        {{ $item->description }}
                                    </span>
                                </td>
                                <td>{{ $item->market }}</td>
                                <td>{{ $item->is_emergency }}</td>
                                <td>{{ $item->status }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
                        <form id="quotationForm">
                            @csrf
                            <input type="hidden" name="service_id" id="serviceId" value="">

                            <div class="mb-3">
                                <label>service</label>
                                <input type="text" class="form-control" id="serviceTitle" readonly>
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
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="number" min="1" class="form-control" name="price"
                                            placeholder="Enter price">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="number" min="1" class="form-control" name="quantity"
                                            placeholder="Enter quantity">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label>Customer Name</label>
                                        <input type="text" class="form-control" name="customer_name"
                                            placeholder="Enter customer name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label>Customer Email</label>
                                        <input type="email" class="form-control" name="customer_email"
                                            placeholder="Enter email">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Customer Phone</label>
                                <input type="tel" class="form-control" name="customer_phone"
                                    placeholder="Enter customer phone">
                            </div>
                            <div class="mb-3">
                                <label>Customer Address</label>
                                <textarea class="form-control" name="customer_address" rows="4" placeholder="Customer address..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Note</label>
                                <textarea class="form-control" name="note" rows="4" placeholder="Your requirements..."></textarea>
                            </div>

                            <button class="btn btn-primary w-100" type="submit" id="saveBtn">Submit Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @push('extra-js')
        <script>

            const serviceItems = document.querySelectorAll('.service-item');

            serviceItems.forEach(item => {
                item.addEventListener('click', () => {
                    const service = item.getAttribute('data-service');
                    const serviceId = item.getAttribute('data-service-id');

                    document.getElementById('serviceTitle').value = service;
                    document.getElementById('serviceId').value = serviceId;

                    const modal = new bootstrap.Modal(document.getElementById('quotationModal'));
                    modal.show();
                });
            });

            $('#quotationForm').on('submit', function(e) {
                e.preventDefault();

                $('#saveBtn').prop('disabled', true).text('Saving in...');
                var formData = new FormData(this)

                $.ajax({
                    url: '{{ route('portal.quotation.storeService') }}',
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === true) {
                            $('.success').html('Save successful! Redirecting...');
                            Toast.fire({
                                icon: "success",
                                title: response.message,
                                timer: 2000,
                                timerProgressBar: true,
                                didClose: () => {
                                    window.location.reload();
                                }
                            });
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: response.message,
                                timer: 2000,
                                timerProgressBar: true
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            let msg = '';
                            $.each(errors, function(key, value) {
                                msg += value[0] + "<br>";
                            });
                            $('.error').html(msg);
                        } else {
                            $('.error').html("Invalid!");
                        }
                    },
                    complete: function() {
                        $('#saveBtn').prop('disabled', false).text('Save');
                    }
                });
            });
        </script>
    @endpush
@endsection

