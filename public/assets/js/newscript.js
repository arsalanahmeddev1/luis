
var a = document.getElementById('searchbtnnew');
$(document).ready(function () {

    $(document).on('click', '#searchbtnnew', function () {
        let pE = $(this).parent("form");
        let verse = pE[0][1].value;
        let chapter = pE[0][0].value;
        verse=verse+')';
        

        if (chapter != '' && verse != '') {

            var elements = document.querySelectorAll(`h6[class='${chapter}']`);
            parent='';
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                if (element.textContent.includes(verse)) {
                   parent = $(element).parent('.book-inner-wrap').attr('class');
                  break;
                }
              }
            let matchNumber = parent.match(/targetbook(\d+)/);
            if (matchNumber) {
                let numberAfterTargetbook = parseInt(matchNumber[1]);
                $('.sj-book').turn('page', numberAfterTargetbook)
            }

        }
        else if (chapter != '') {
            var matchingH6 = $('.box h3').filter(function () {
                return $(this).text().includes(chapter);
            });
            let match = matchingH6[2];

            parent = $(match).parent('.book-inner-wrap').attr('class');

            let matchNumber = parent.match(/targetbook(\d+)/);

            if (matchNumber) {
                let numberAfterTargetbook = parseInt(matchNumber[1]);
                $('.sj-book').turn('page', numberAfterTargetbook)
            } else {
                console.log('Number not found');
            }
        }
        else{
            alert('Please Select Chapter')
        }

    });

    $(document).on('click', '.form-last-page', function () {
        pages = $('.total_pages').data('id')
        $('.sj-book').turn('page', parseInt(pages-1))

    });

    $(document).on('click', '.form-first-page', function () {

        $('.sj-book').turn('page', 4)

    });
});




