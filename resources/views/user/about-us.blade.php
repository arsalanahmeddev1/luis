@extends('layouts.app')
@section('content')
    
    <div class="about-us-banner">
        <div class="container container-c">
            <div class="row">
                <div class="col-12">
                    <div class="row book-wrapper">
                        <div class="book-overlay"></div>
                        <div class="col-6 pe-0 d-md-flex d-none justify-content-center text-center align-items-center">
                            <div class="right-book">
                                <img src="{{ asset('assets/images/Our-Faith.png') }}" class="logo-img" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="left-side">

                                <h1 class="about-heading">About Us</h1>
                                <h5 class="about-h5">Our Vision</h5>
                                <p class="content">We aspire to awaken your curiosity about God. We strive to be the
                                    preferred learning channel
                                    about Him (God) for all, faithful and non-faithful, Christians, regardless of the
                                    denomination, and non-
                                    Christians. Our objective is to be a vehicle for everyone to get an in-depth
                                    understanding of Christian
                                    doctrines.</p>
                                <h5 class="about-h5">Our Mission</h5>
                                <p class="content">Create a platform that presents religious topics in the form of
                                    electronic books and allow users
                                    to pull books of interest from a shelf for reading. Books such as all the books within
                                    the Bible,
                                    Christology (Study of Jesus, the person, and His deeds) Mariology (study of the Virgin
                                    Mary), About the
                                    Bible, and many more. Facilitate information of interest via email/text; information
                                    such as prayer of the
                                    day, and biography of the saint of the day. Provide the means for users to keep notes
                                    about specific
                                    passages of the Bible. Example: you go to Mass and hear a Homily about Mathew; you can
                                    then write
                                    notes to better understand the meaning of the verse. Over time, you can compile an
                                    endless series of
                                    notes organized by books and verses that will help you better understand the Word of God
                                    with much
                                    more meaning.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
