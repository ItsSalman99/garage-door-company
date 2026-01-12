@extends('portal.layout.main')

@section('content')
    <div class="cover-all-content">
        <div class="page-title d-flex align-items-center justify-content-between gap-3 flex-wrap">
            <h2>All Quotations</h2>
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
                            <th>#ID</th>
                            <th>Product</th>
                            <th>Service</th>
                            <th>Company</th>
                            <th>Technician</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Customer Phone</th>
                            <th>Customer Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotations as $key => $item)
                            <tr>
                                <td></td>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ isset($item->product) ? $item->product->name : 'N/A' }}</td>
                                <td>{{ isset($item->service) ? $item->service->name : 'N/A' }}</td>
                                <td>{{ $item->company->full_name }}</td>
                                <td>{{ $item->technician->full_name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->total }}</td>
                                <td{{ $item->customer_name }}< /td>
                                    <td>{{ $item->customer_email }}</td>
                                    <td>{{ $item->customer_phone }}</td>
                                    <td>{{ $item->customer_address }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td class="text-center">
                                        <ul class="dropdownStyle-v1">
                                            <li class="dropdown tableDropdown">
                                                <a href="javascript:void(0)" class="dropdown-toggle caret-none"
                                                    data-bs-toggle="dropdown" role="button" id="navbarDropdown"
                                                    aria-expanded="false"><i
                                                        class="bi bi-three-dots-vertical font-19px link-dark"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="navbarDropdown">
                                                    <li>
                                                        <a href="{{ route('portal.quotation.show', ['id' => $item->id]) }}" class="dropdown-item">View Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('portal.quotation.generateBill', ['id' => $item->id]) }}" class="dropdown-item">Generate Pdf Bill</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    @push('extra-js')
        <script>
            $('#addForm').on('submit', function(e) {
                e.preventDefault();

                $('#saveBtn').prop('disabled', true).text('Saving...');
                var formData = new FormData(this)

                $.ajax({
                    url: '{{ route('portal.technicians.store') }}',
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === true) {
                            $('.success').html('Created successful! Redirecting...');
                            Toast.fire({
                                icon: "success",
                                title: response.message,
                                timer: 2000,
                                timerProgressBar: true,
                                didClose: () => {
                                    window.location.href = response.redirect;
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
