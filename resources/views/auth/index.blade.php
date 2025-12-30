@extends('layout.main')

@section('content')
    <div class="signup bg-white rounded-4 overflow-hidden" style="box-shadow: 0px 0px 8px 0px #00000040;">
        <div class="right-box d-flex align-items-center order-1 order-lg-0 ">
            <div>
                {{-- <img src="assets/images/logo.svg" alt="" class="width-50 width-md-40 mx-auto mb-3"> --}}
                <div class="text-center">
                    <p class="m-0">Login your Account!</p>
                </div>
                <div class="mt-6 px-0 px-md-12">
                    <div class="row g-3">

                        <div class="col-6">
                            <a href="{{ route('login', ['login_as' => 'Universal garage company', 'id' => 1]) }}"
                                class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-center text-center py-4 fw-semibold">
                                Universal Garage Door
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="{{ route('login', ['login_as' => 'Buffalo garage company', 'id' => 2]) }}"
                                class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-center text-center py-4 fw-semibold">
                                Buffalo Garage Door
                            </a>
                        </div>

                        <div class="col-12">
                            <a href="{{ route('login', ['login_as' => 'Technician']) }}"
                                class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-center text-center py-4 fw-semibold">
                                Technician
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="left-box login-show-left d-flex align-items-center justify-content-center"
            style="background: url(assets/images/login/right.jpg) no-repeat center/cover;"></div>

    </div>

    @push('extra-js')
        <script>
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();

                $('#loginBtn').prop('disabled', true).text('Logging in...');
                var formData = new FormData(this)

                $.ajax({
                    url: '{{ route('login.store') }}',
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status === true) {
                            $('.success').html('Login successful! Redirecting...');
                            Toast.fire({
                                icon: "success",
                                title: "Signed in successfully",
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
                            $('.error').html("Invalid credentials!");
                        }
                    },
                    complete: function() {
                        $('#loginBtn').prop('disabled', false).text('Login');
                    }
                });
            });
        </script>
    @endpush
@endsection
