@extends('layouts.app')
@section('content')

    <div class="contact-us-banner">
        <div class="container container-c">
            <div class="row">
                <div class="col-12">
                    <div class="row contact-book-wrapper">
                        <div class="col-6 pe-0 justify-content-center text-center align-items-center d-none d-md-flex">
                            <div class="contact-right-book">
                                <img src="{{asset('assets/images/Our-Faith.png')}}" class="logo-img" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12" style="position: relative; z-index:12;">
                            <div class="subscription-wrap">
                                <h4 class="hd-lg mb-20 text-center">Starter Plan</h4>
                                <p class="primary-para mb-20 text-center f-500">Perfect for testing</p>
                                <h3 class="Secondary-hd text-center mb-20">$12 <span class="primary-para">/month</span></h3>
                                <button class="nav-btn submit-btn w-100 mb-20">Select Plan</button>
                                <ul class="subs-list">
                                    <li class="d-flex align-items-center"><span class="me-2"><i class="fa-solid fa-check"></i></span> 10 Credits per month</li>
                                    <li class="d-flex align-items-center"><span class="me-2"><i class="fa-solid fa-check"></i></span> 100 bonus credits for first month</li>
                                    <li class="d-flex align-items-center"><span class="me-2"><i class="fa-solid fa-check"></i></span> 20+ languanges</li>
                                    <li class="d-flex align-items-center"><span class="me-2"><i class="fa-solid fa-check"></i></span> 80+ copywriting tools</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection
