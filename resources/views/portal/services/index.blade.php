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
                <table class="display align-middle" id="datatableCheckbox" cellspacing="0" width="100%"
                    data-ordering="false" data-searching="false">
                    <thead>
                        <tr>
                            <th></th>
                            <th>#ID</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Market</th>
                            <th>Price</th>
                            <th>Common Emergency</th>
                            <th>Note</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

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
