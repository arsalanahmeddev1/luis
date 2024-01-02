<script src="{{asset('assets/book/lib/turn.min.js')}}"></script>

<script type="text/javascript">
    function loadApp(pagenumber = undefined) {
        var flipbook = $('.sj-book');

        // Check if the CSS was already loaded

        if (flipbook.width() == 0 || flipbook.height() == 0) {
            setTimeout(loadApp, 10);
            return;
        }
        // console.log(flipbook);
        Hash.on('^page\/([0-9]*)$', {
            yep: function(path, parts) {

                var page = parts[1];
                // alert(page)
                if (page !== undefined) {
                    if ($('.sj-book').turn('is')) {
                        setTimeout(function() {
                            $('.sj-book').turn('page', 2);
                        }, 500);
                    }
                }
            },
            nop: function(path) {
                if ($('.sj-book').turn('is'))
                    $('.sj-book').turn('page', pagenumber === undefined ? 1 : pagenumber);
            }
        });

        // Arrows

        $(document).keydown(function(e) {

            var previous = 37,
                next = 39;

            switch (e.keyCode) {
                case previous:

                    $('.sj-book').turn('previous');

                    break;
                case next:

                    $('.sj-book').turn('next');

                    break;
            }

        });


        // Flipbook

        flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

        flipbook.turn({
            elevation: 50,
            acceleration: !isChrome(),

            autoCenter: true,
            gradients: true,
            duration: 1000,
            pages: 112,
            when: {
                turning: function(e, page, view) {

                    var book = $(this),
                        currentPage = book.turn('page'),
                        pages = book.turn('pages');

                    if (currentPage > 3 && currentPage < pages - 3) {

                        if (page == 1) {
                            book.turn('page', 2).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (page == pages) {
                            book.turn('page', pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    } else if (page > 3 && page < pages - 3) {
                        if (currentPage == 1) {
                            book.turn('page', 2).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        } else if (currentPage == pages) {
                            book.turn('page', pages - 1).turn('stop').turn('page', page);
                            e.preventDefault();
                            return;
                        }
                    }

                    updateDepth(book, page);

                    if (page >= 2)
                        $('.sj-book .p2').addClass('fixed');
                    else
                        $('.sj-book .p2').removeClass('fixed');

                    if (page < book.turn('pages'))
                        $('.sj-book .p111').addClass('fixed');
                    else
                        $('.sj-book .p111').removeClass('fixed');

                    Hash.go('page/' + page).update();

                },

                turned: function(e, page, view) {

                    var book = $(this);

                    if (page == 2 || page == 3) {
                        book.turn('peel', 'br');
                    }

                    updateDepth(book);

                    $('#slider').slider('value', getViewNumber(book, page));

                    book.turn('center');

                },

                start: function(e, pageObj) {

                    moveBar(true);

                },

                end: function(e, pageObj) {

                    var book = $(this);

                    updateDepth(book);

                    setTimeout(function() {

                        $('#slider').slider('value', getViewNumber(book));

                    }, 1);

                    moveBar(false);

                },

                missing: function(e, pages) {

                    for (var i = 0; i < pages.length; i++) {
                        addPage(pages[i], $(this));
                    }

                }
            }
        });

        function updateFlipbookDimensions() {
            var flipbook = $('.sj-book');
            var windowWidth = $(window).width();

            if (windowWidth <= 991) {
                // Set the width and height for smaller screens
                flipbook.turn('size', 650, 500);
            }
            if (windowWidth <= 480) {
                // Set the width and height for smaller screens
                flipbook.turn('size', 350, 210);
            }
            // if (windowWidth <= 648) {
            //     flipbook.turn('size', 450, 300)
            // }
        }

        // Initial call to set dimensions based on window width
        updateFlipbookDimensions();

        // Listen for window resize events
        $(window).resize(function() {
            updateFlipbookDimensions();
        });

        $('#slider').slider('option', 'max', numberOfViews(flipbook));

        flipbook.addClass('animated');

        // Show canvas

        $('#canvas').css({
            visibility: ''
        });
    }

    // Hide canvas

    // $('#canvas').css({visibility: 'hidden'});

    // Load turn.js

    $(document).ready(function() {
        // yepnope({
        // 	test: Modernizr.csstransforms,
        // 	yep: ['../../assests/book/lib/turn.min.js'],
        // 	nope: ['../../assests/book/lib/turn.html4.min.js', 'css/jquery.ui.html4.css', 'css/steve-jobs-html4.css'],
        // 	both: ['js/steve-jobs.js', 'css/jquery.ui.css', 'css/steve-jobs.css'],
        // 	complete: loadApp
        // });

    });



    // $('#album').turn({ gradients: true, acceleration: true });
</script>
<script>
    (function($) {
        $.getStylesheet = function(href) {
            var $d = $.Deferred();
            var $link = $('<link/>', {
                rel: 'stylesheet',
                type: 'text/css',
                href: href
            }).appendTo('head');
            $d.resolve($link);
            return $d.promise();
        };
    })(jQuery);

    var smBooks = document.querySelectorAll(".sm-book");

    var album = document.querySelector(".sj-book");
    var crossButton = document.querySelector(".cross-button");
    crossButton.style.visibility = "hidden";
    var btn = document.querySelector(".btn");
    let mainBody = document.querySelector('body');
    let mainOverlay = document.querySelector('.body-overlay')
    let overlay = document.createElement('div')

    album.style.visibility = "hidden";
    Modernizr.csstransforms;
    $(document).on("click", "[class*='sm-book']", function(e) {
        e.preventDefault();
        initBook(e.target)

    })

    function initBook(el) {
        thumbnail = $(el);
        console.log(el.id);
        const dataId = el.getAttribute('data-id');
        const hasExtension = dataId.includes('.');
        const imageUrl = hasExtension ? dataId : `${dataId}.jpg`;
        let bookElem = $(".sj-book").html(`<div depth="5" style="--bg-image: url(../../../assests/images/${imageUrl});" class="hard" data-id="${dataId}">
        <div class="side"></div>
    </div>
    <div depth="5" class="hard front-side">
        <div class="depth"></div>
    </div>
    <div class="own-size"></div>
    <div class="own-size even"></div>
    <div class="hard fixed back-side p111">
        <div class="depth"></div>
    </div>
    <div class="hard p112"></div>`);
        console.log(bookElem[0]);
        // console.log(bookElem);
        let canvas = document.querySelectorAll('#canvas');
        canvas.forEach(btn => {
            btn.style.display = 'none'
        })
        let styleSheet = $(el).data('styles');
        if (styleSheet == undefined) {

            styleSheet = ['css/steve-jobs-html4.css', 'css/steve-jobs-1.css'];
        } else {
            styleSheet = styleSheet.split(',');
        }
        // console.log(styleSheet, 123);
        let styles = ""
        styleSheet.forEach((el, index) => {
            if (index > 0) {

                styles += `, $.getStylesheet(styleSheet[${index}])`
            } else {
                styles += `$.getStylesheet(styleSheet[${index}])`
            }
        })
        // console.log(styles)
        let bookScript = "{{asset('assets/book/js/steve-jobs.js')}}"
        // console.log(styleSheet[1])
        // console.log(eval(styles))

        $.when(eval(styles), $.getScript(bookScript)).then(function() {
            // setTimeout(function() {
            // console.log(el.dataset.pagenumber)
            let pagenumber = el.dataset.pagenumber
            // console.log(pagenumber)
            loadApp(pagenumber);
            mainBody.classList.add('body-overlay-wrap')
            overlay.classList.add('body-overlay')
            mainBody.append(overlay)
            // console.log(overlay);
            let pageWrappers = document.querySelectorAll('#book-zoom');
            pageWrappers.forEach(pageWrapper => {
                pageWrapper.style.transform = 'scale(0.5)';
                // console.log(pageWrapper);
            })
            canvas.forEach(btn => {
                btn.style.display = 'block'
            })
            // },1000)
        }).then(function() {
            scaleFrom = thumbnail.height() * 1.1 / $('#book-zoom').height(),
                setTimeout(function() {
                    $('#book-zoom').transform('scale(0.9)');
                    console.log('scale(1)');
                    // if (window.innerWidth <= 767) {
                    //     $('#book-zoom').css('transform', 'scale(0.3)');
                    // } else {
                    //     $('#book-zoom').css('transform', 'scale(0.9)');
                    // }
                    $('.sj-book').turn('page', 2);
                }, 500);
        });

        var newBook = $(el);
        if (album.style.visibility === "hidden") {
            album.style.visibility = "visible";
            newBook.css('visibility', 'hidden');
            $('#canvas').zIndex('11');
            crossButton.style.visibility = "visible";
        }
    }

    // Add a click event listener to the cross button
    crossButton.addEventListener("click", function(e) {
        e.preventDefault();
        $('.sj-book').turn('page', 1);
        $('#book-zoom').transform('scale(0.2)').css("visibility", "hidden");
        $('#canvas').zIndex('0');
        overlay.classList.remove('body-overlay')
        setTimeout(function() {
            $(".sj-book").css("visibility", "hidden");
        }, 500);
        let newBook = $("[class*='sm-book']");
        crossButton.style.visibility = "hidden";
        if (window.innerWidth <= 767) {
            setTimeout(function() {
                if ($('.sj-book').turn('is')) {
                    $('.sj-book').turn('destroy');
                    $(window).unbind('keydown');
                }
                newBook.css('visibility', 'visible');
            });
        } else {
            setTimeout(function() {
                if ($('.sj-book').turn('is')) {
                    $('.sj-book').turn('destroy');
                    $(window).unbind('keydown');
                }
                newBook.css('visibility', 'visible');
            }, 500);
        }
        //     // if (windowWidth <= 480) {
        //     // Set the width and height for smaller screens
        //     setTimeout(function() {
        //         if ($('.sj-book').turn('is')) {
        //             $('.sj-book').turn('destroy');
        //             $(window).unbind('keydown');
        //         }
        //         newBook.css('visibility', 'visible');
        //     }, 500);
        // }

        visiblefunc('.login-btn')
        visiblefunc('.register-btn')
        // btnVisiblefunc('.register-btn')
    });


    function visiblefunc(element) {
        let btn = document.querySelector(element)
        if (btn.style.visibility = 'hidden') {
            btn.style.visibility = 'visible'
        }
    }
    $(document).ready(function() {
        $(getBookID()).trigger('click')

        function getBookID() {
            let bookID = window.location.search.split('=')[1]
            return `#book-${bookID}`

        }
    })


</script>
