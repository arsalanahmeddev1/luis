@extends('layouts.app')
@section('content')
    {{-- {{dd($errors->any())}} --}}
    <div class="contact-us-banner">
        <div class="container container-c">
            <div class="row contact-book-wrapper register-wrap  ">
                <div class="col-md-6 pe-0 justify-content-center text-center align-items-center d-none d-md-flex"
                    style="position: relative; z-index: 12;">
                    <div class="contact-right-book">
                        <img src="{{ asset('assets/images/Our-Faith.png') }}" alt="" class="logo-img">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="position: relative; z-index:12;">
                    <form action="{{ route('register') }}" class="register-form" method="POST">
                        @csrf
                        <div class="verification-area register">
                            <h3 class="hd-lg">Create Account</h3>

                            {{-- @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach --}}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">First Name*</label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}"
                                            class="input-field w-100" placeholder="Enter First Name">
                                        <span class="text-danger">
                                            @error('first_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">Last Name*</label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}"
                                            class="input-field w-100" placeholder="Enter Last Name">
                                        <span class="text-danger">
                                            @error('last_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">Email*</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="input-field w-100" placeholder="Enter Email">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="monthYearInput" class="label-field">Birth Date*</label>
                                        <input type="month" name="birth_date" value="{{ old('birth_date') }}"
                                            class="input-field w-100" id="monthYearInput">
                                        <span class="text-danger">
                                            @error('birth_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field pb-10">Password*</label>
                                        <div class="relative">
                                            <input type="password" name="password" class="input-field w-100 pass-field"
                                                placeholder="8 characters at least">
                                            <div class="eye-icon">
                                                <i class="fa-solid fa-eye show-pass"></i>
                                            </div>
                                        </div>
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field pb-10">Confirm Password*</label>
                                        <div class="relative">
                                            <input type="password" name="password_confirmation"
                                                class="input-field w-100 pass-field" placeholder="8 characters at least">
                                            <div class="eye-icon">
                                                <i class="fa-solid fa-eye show-pass"></i>
                                            </div>
                                        </div>
                                        <span class="text-danger">
                                            @error('password_confirmation')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">Primary Language*</label>
                                        <select class="form-select input-field w-100" name="primary_language"
                                            value="{{ old('primary_language') }}" aria-label="Default select example">
                                            <option selected>English</option>
                                            <option value="1">English</option>
                                            <option value="2">English</option>
                                            <option value="3">English</option>
                                        </select>
                                    </div>
                                    <span class="text-danger">
                                        @error('primary_language')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">Secondary Language</label>
                                        <select class="form-select input-field w-100" name="secondary_language"
                                            value="{{ old('secondary_language') }}" aria-label="Default select example">
                                            <option selected>Spanish</option>
                                            <option value="1">Spanish</option>
                                            <option value="2">Spanish</option>
                                            <option value="3">Spanish</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('secondary_language')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">Perish*</label>
                                        <input type="text" name="perish" value="{{ old('perish') }}"
                                            class="input-field w-100" placeholder="">
                                        <span class="text-danger">
                                            @error('perish')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">City*</label>
                                        <input type="text" name="city" value="{{ old('city') }}"
                                            class="input-field w-100" placeholder="">
                                        <span class="text-danger">
                                            @error('city')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="field-wrap">
                                        <label for="" class="label-field">Impairment*</label>
                                        <select class="form-select input-field w-100" name="impairment"
                                            value="{{ old('impairment') }}" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="1">Select</option>
                                            <option value="2">Select</option>
                                            <option value="3">Select</option>
                                        </select>
                                        <span class="text-danger">
                                            @error('impairment')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check mb-20">
                                        <input class="form-check-input cs-check" type="checkbox" value=""
                                            id="flexCheckChecked" checked>
                                        <label class="form-check-label cs-label remember" for="flexCheckChecked">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button class="nav-btn submit-btn w-100 mb-20 uppercase" type="submit">Continue</button>

                                <p class="primary-para text-center d-flex justify-content-center align-items-center">
                                    Already have an Account? <a href="{{ route('login') }}"
                                        class="primary-para login-btn ps-2"> Login Here</a></p>
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
