$(document).ready(function () {

    // Show benefits and animate quote
    var scrollPosition = 0,
        videoHeight = $('.video').height(),
        quoteHeight = $('.video').height() + $('.benefits').height() + $('.gallery').height();

    // Desktop
    $('body').on("mousewheel", function() {
        scrollPosition = getScrollPosition();
        if (scrollPosition > findHalf(videoHeight)) {
            showBenefits();
        }

        if (scrollPosition >= quoteHeight) {
            $('.quote__image').animate({left:'0%'}, 1000);
            $('.quote__right').animate({left:'0%'}, 1000);
        }
    });

    // Mobile
    $('body').on("scrollstart", function() {
        scrollPosition = getScrollPosition();
        if (scrollPosition > findHalf(videoHeight)) {
            showBenefits();
        }

        if (scrollPosition >= quoteHeight) {
            $('.quote__image').animate({left:'0%'}, 1000);
            $('.quote__right').animate({left:'0%'}, 1000);
        }
    });



    // Magnific popup
    $('.download__button').magnificPopup({
        type: 'inline',
        focus: '#name'
    });

    // Main page show popup after delay
    var url = window.location.href;
    if( url.indexOf('?banner=true') !== -1 || url.indexOf('&banner=true') !== -1) {
        setTimeout(function(){
            $.magnificPopup.open({
                items: {
                    src: $('#form-popup'),
                    type: 'inline'
                }
            });
        }, 5000);
    }

    // Popup ajax
    $('#popup__download__file').on('click', function (event) {
        event.preventDefault();

        var errors = false;
        var name = $('#download__popup__name').val();
        var email = $('#download__popup__email').val();

        if (name.length < 2) {
            $('#download__popup__name').notify("Enter your name!");
            errors = true;
        }
        if (email.length < 2 || validateEmail(email) === false) {
            $('#download__popup__email').notify('Enter correct email!');
            errors = true;
        }

        if (errors === false) {
            $.ajax({
                url: '/download',
                type: 'POST',
                dataType: 'json',
                data: {
                    'name' : name,
                    'email' : email
                },
                success: function () {
                    document.getElementById('documentLink').click();
                    var magnificPopup = $.magnificPopup.instance;
                    magnificPopup.close();
                }
            });
        }
    });
});

function getScrollPosition() {
    return $(document).scrollTop();
}

function findHalf(height) {
    return height / 2;
}

function showBenefits() {
    $(".benefits__item").each(function(i) {
        $(this).delay(400 * i).fadeIn(1000);
    });
}