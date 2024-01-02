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
                <form action="" class="new-pass-form">
            <div class="verification-area">
                <h3 class="hd-lg">New Password</h3>
                <p class="primary-para f-open">Set the new password for your account so you can login and access all
                    featuress.</p>
                <div class="field-wrap">
                    <div class="field-wrap ">
                        <label for="" class="label-field">Enter new password</label>
                        <div class="relative">
                            <input type="password" class="input-field w-100 pass-field"
                                placeholder="8 characters at least">
                            <div class="eye-icon">
                                <i class="fa-solid fa-eye show-pass"></i>
                            </div>
                        </div>
                    </div>
                    <div class="field-wrap ">
                        <label for="" class="label-field">Confirm password</label>
                        <div class="relative">
                            <input type="password" class="input-field w-100 pass-field"
                                placeholder="8 characters at least">
                            <div class="eye-icon">
                                <i class="fa-solid fa-eye show-pass"></i>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('succesful')}}" class="nav-btn submit-btn w-100 mb-20">Update password</a>
                </div>
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
        btn.addEventListener('click', function (e) {
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
