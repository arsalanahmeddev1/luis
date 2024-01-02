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
                        <div class="col-md-6 col-sm-12">
                            <div class="contact-left-side">
                                <h1 class="contact-heading">Contact Us</h1>
                                <div class="form-main">
                                    <label for="type" class="form-label">Name</label>
                                    <input type="name" class="input-field w-100" id="type"
                                        placeholder="Enter Name">
                                    <label for="type" class="form-label">Email Address*</label>
                                    <input type="email" class="input-field w-100" id="type"
                                        placeholder="Enter Email">
                                    <label for="type" class="form-label">Phone</label>
                                    <input type="phone" class="input-field w-100" id="type"
                                        placeholder="Enter Phone">
                                    <label for="type" class="form-label">Subject</label>

                                    <select class="input-field w-100 form-select" aria-label="Default select example">
                                        <option selected>Suggestions/Improvements</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label for="type" class="form-label">Message*</label>
                                <textarea name="" class="input-field w-100" id="" cols="30" rows="10"
                                    placeholder="Your Text here...."></textarea>
                                <button class="nav-btn submit-btn w-100">Submit</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
