@extends('layouts.app')
@section('content')
    <div class="artboard-3-banner">
        <div class="container-fluid">
            <div id="canvas">
                <div id="book-zoom" style="visibility: hidden;height: 600px;transform: scale(0.2);">
                    <div class="sj-book"></div>
                    <button class="cross-button">Return Book</button>
                </div>
            </div>
            <div class="row align-items-center text-center">
                <div class="col-md-3 d-lg-flex d-none">
                    <div class="row aside-sec">
                        <div class="col-6 pe-0">
                            <img src="{{asset('assets/images/screen1.png')}}" class="side-frame" alt="">
                        </div>
                        <div class="col-6 ps-0">
                            <img src="{{asset('assets/images/screen2.png')}}" class="side-frame" alt="">
                        </div>
                        <div class="col-12 pt-2">
                            <img src="{{asset('assets/images/Window.png')}}" class="side-frame" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-lg-flex d-none justify-content-center text-center">
                    <!-- <a href="#"> <img src="{{asset('assets/images/full-size-image1.png')}}" class="center-image1" alt=""></a> -->
                </div>
                <div class="col-lg-3 col-md-12 d-flex justify-content-center flex-column">
                    <div class="book-area-new-ani position-relative ani-sec">
                        <a href="#"> <img src="{{asset('assets/images/Group 3.png')}}" class="new-top-book" alt="" id="top-book-new-ani"> </a>
                        <div class="new-text">
                        <h1>New Testament</h1>
                      </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books">
                                <div class="artboard-book">
                                    <a href="#"><img id="book-1" src="{{asset('assets/images/New-testament-images/First shelf/01-removebg-preview.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/Saint-Matthew.png')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-2" src="{{asset('assets/images/New-testament-images/First shelf/02-removebg-preview.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/02.jpg')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-3" src="{{asset('assets/images/New-testament-images/First shelf/03-removebg-preview.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/03.jpg')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-4" src="{{asset('assets/images/New-testament-images/First shelf/04-removebg-preview.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/04.jpg')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-5" src="{{asset('assets/images/New-testament-images/First shelf/The-Acts-of-the-Apostles-_1_-removebg-preview-removebg-preview.png')}}" data-id="{{asset('assets/images/New-testament-images/New-testament-images/04.jpg')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-1.png')}}" alt="" class="artboard-stand">
                            <div class="lights d-flex justify-content-between">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                            </div>
                        </div>
                        <div class="artboard-book-stand  mb-4">
                            <div class="artboard-books other-books">
                            <!-- <div class="artboard-book">
                                    <a href="#"><img id="book-5" src="{{asset('assets/images/New-testament-images/First shelf/The-Acts-of-the-Apostles-_1_-removebg-preview.png')}}" data-id="New-testament-images/New-testament-images/missed/The-Acts-of-the-Apostles.png" class="img-fluid sm-book" alt=""></a>
                                </div> -->
                                <div class="artboard-book">
                                    <a href="#"><img id="book-6" src="{{asset('assets/images/New-testament-images/Second shelf/07-removebg-preview.png')}}" class="img-fluid sm-book" data-id="{{asset('assets/images/New-testament-images/New-testament-images/05.jpg')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-7" src="{{asset('assets/images/New-testament-images/Second shelf/08-removebg-preview.png')}}" class="img-fluid sm-book" data-id="{{asset('assets/images/New-testament-images/New-testament-images/06.jpg')}}" class="img-fluid sm-book" alt=""></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-8" src="{{asset('assets/images/New-testament-images/Second shelf/09-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/Saint-Peter.png')}}" class="img-fluid sm-book"></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-10" src="{{asset('assets/images/New-testament-images/Second shelf/11-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/Saint-Jude.png')}}" class="img-fluid sm-book"></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-9" src="{{asset('assets/images/New-testament-images/Second shelf/10-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/Revelation.png')}}" class="img-fluid sm-book"></a>
                                </div>

                                <!-- <div class="artboard-book">
                                    <a href="#"><img src="{{asset('assets/images/New-testament-images/Second shelf/12-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-styles="css/steve-jobs-html4.css , css/steve-jobs.css" data-script="js/steve-jobs.js" class="img-fluid sm-book"></a>
                                </div> -->
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-2.png')}}" alt="" class="artboard-stand">
                            <div class="lights d-flex justify-content-between">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                              <img src="{{asset('assets/images/Light-shelf-of-books.png')}}" class="lights-1" alt="">
                            </div>
                        </div>
                        <div class="artboard-book-stand mb-4">
                            <div class="artboard-books other-books">
                                <div class="artboard-book">
                                    <a href="#"><img id="book-11" src="{{asset('assets/images/New-testament-images/Thirs shelf/01-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/The-Liturgy-Explained.png')}}" class="img-fluid sm-book"></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-12" src="{{asset('assets/images/New-testament-images/Thirs shelf/02-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/About-the-Apostles.png')}}" class="img-fluid sm-book"></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-13" src="{{asset('assets/images/New-testament-images/Thirs shelf/03-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/Fathers-of-the-Church.png')}}" class="img-fluid sm-book"></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-14" src="{{asset('assets/images/New-testament-images/Thirs shelf/04-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/Heroes-of-the-New\ Testament.png')}}" class="img-fluid sm-book"></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-15" src="{{asset('assets/images/New-testament-images/Thirs shelf/05-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/The-Sacraments.png')}}" class="img-fluid sm-book"></a>
                                </div>
                                <div class="artboard-book">
                                    <a href="#"><img id="book-16" src="{{asset('assets/images/New-testament-images/Thirs shelf/06-removebg-preview.png')}}" class="img-fluid sm-book" alt="" data-id="{{asset('assets/images/New-testament-images/New-testament-images/missed/Christology.png')}}" class="img-fluid sm-book"></a>
                                </div>
                            </div>
                            <img src="{{asset('assets/images/artboard-shelf-3.png')}}" alt="" class="artboard-stand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    let buttons = document.querySelectorAll('.initBook')
    // console.log(buttons)
    buttons.forEach(el => {
      el.addEventListener('click', function(e) {
        let page = e.target.dataset.page
        changeMetaContent(page, 'filename')
        let pageNumber = e.target.dataset.pagenumber
        // console.log(pageNumber);
        changeMetaContent(pageNumber, 'pageNumber')
        // $('.sm-book').trigger('click')
        initBook(e.target)
      })
    })

    function changeMetaContent(value, metaTagName) {
      let tag = document.querySelector('meta[name="' + metaTagName + '"]')
      tag.content = value
    }
  </script>

@endsection
