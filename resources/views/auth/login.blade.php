@extends('layouts.app')
@section('content')
    <div class="contact-us-banner">
        <div class="container container-c">
            <div class="row contact-book-wrapper ">
                <div class="col-md-6 pe-0 justify-content-center text-center align-items-center d-none d-md-flex"
                    style="position: relative; z-index: 12;">
                    <div class="contact-right-book">
                        <img src="{{ asset('assets/images/Our-Faith.png') }}" alt="" class="logo-img">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="position: relative; z-index: 12;">
                    <form action="{{ route('login') }}" class="login-form" method="POST">

                        <div class="verification-area">
                            <h3 class="hd-lg">Login Page</h3>
                            <div class="field-wrap">
                                <label for="" class="label-field">User Name</label>
                                <input type="email" name="email" id="email" class="input-field w-100"
                                    placeholder="Enter Name">
                                <span class="text-danger email-error">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="field-wrap">
                                <label for="" class="label-field">Password</label>
                                <input type="password" name="password" id="password" class="input-field w-100"
                                    placeholder="Enter Password">
                                <span class="text-danger password-error">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-check mb-20">
                                <input class="form-check-input cs-check" type="checkbox" value=""
                                    id="flexCheckChecked" checked>
                                <label class="form-check-label cs-label" for="flexCheckChecked">
                                    Remember me on this computer
                                </label>
                            </div>
                            <button class="nav-btn submit-btn w-100 mb-20" type="submit">LOG IN </button>
                            <a href="{{ route('forgot-password') }}"
                                class="label-field forgot-text text-center d-flex justify-content-center ">Forgot
                                Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".submit-btn").click(function(e) {

            e.preventDefault();

            var email = $("#email").val();
            var password = $("#password").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('login') }}",
                data: {
                    email: email,
                    password: password
                },
                success: function(data, response) {
                    console.log(response.error);
                    if ($.isEmptyObject(data.error)) {

                        window.location = "{{ route('index') }}";
                    } else {
                        console.log(response);
                    }
                },
                error: function(response) {
                    if (response.responseJSON.errors) {
                        var email = response.responseJSON.errors.email;
                        var pass = response.responseJSON.errors.password;
                        if (email) {
                            $(".email-error").text(response.responseJSON.errors.email[1] ? response
                                .responseJSON.errors.email[1] : response.responseJSON.errors.email[
                                    0])
                        } else {
                            $(".email-error").text('')
                        }
                        if (pass) {
                            $(".password-error").text(response.responseJSON.errors.password[0])
                        } else {
                            $(".password-error").text('')
                        }

                    } else {
                        $(".password-error").text('Incorrect Password')
                        $(".email-error").text('')
                    }
                }
            });

        });


    </script>
@endsection
