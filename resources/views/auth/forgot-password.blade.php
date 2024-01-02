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
                    <form action="" class="forgot-form">
                        <div class="verification-area">
                            <h3 class="hd-lg">Forgot password</h3>
                            <p class="primary-para f-open">Enter your email for the verification proccess,we will send 4 digits code to your email.</p>
                            <div class="field-wrap">
                                <label for="" class="label-field">Email</label>
                                <input type="text" class="input-field w-100" placeholder="Enter Email">
                                <a href="{{route('verification')}}" class="nav-btn submit-btn w-100 mb-20">CONTINUE</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

