@extends('layouts.app')
@section('content')
    <div class="contact-us-banner">
        <div class="container container-c">
            <div class="row contact-book-wrapper ">
                <div class="col-md-6 pe-0 justify-content-center text-center align-items-center d-none d-md-flex" style="position: relative; z-index: 12;">
                    <div class="contact-right-book">
                        <img src="{{asset('assets/images/Our-Faith.png')}}" alt="" class="logo-img">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="position: relative; z-index:12;">
                    <form action="" class="successful-form">
                        <div class="verification-area">
                            <div class="check-icon-wrap">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h4 class="text-md f-open text-center">Successfully</h4>
                            <p class="primary-para text-center mb-32">Your password has been reset successfully</p>
                            <a href="{{route('login')}}" class="nav-btn submit-btn w-100 uppercase">Continue</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        // show-passowrd
        const passFields = document.querySelectorAll('.pass-field')
        const passBtn = document.querySelectorAll('.show-pass')
        console.log(passBtn);
        console.log(passBtn);
        passBtn.forEach((btn, index) => {
            btn.addEventListener('click', function(e) {
                // alert('hellow')
                e.preventDefault();
                if (passFields[index].type === 'password') {
                    passFields[index].type = 'text'
                    btn.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    passFields[index].type = 'password'
                    btn.classList.replace('fa-eye-slash', 'fa-eye');
                }
            })
        })
    </script>
@endsection

