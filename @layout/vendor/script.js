var percent = 0;
var maxPercent = 90;

function calculatePercents(max) {

    if ( percent < max) {
        return ++percent;
    } else {
        // showElements();
        return max;
    }
}

function calculatePercentsTimeout() {
    var currentPercent = calculatePercents(maxPercent);
    //rerender
    if ( currentPercent !== maxPercent ) {
        setTimeout(calculatePercentsTimeout, 10);
    } else {
        setTimeout(showElements, 500);
    }
    $('.load-progress').css('width', currentPercent + '%');
    $('.load-data span').html(currentPercent);
}

function loadPage(status) {

    if (status == 'start') {

        setTimeout(calculatePercentsTimeout, 10);

    } else if (status == 'finished') {

        console.log('page was loaded');

    }
}

function showElements() {
    $('.main-preloader').addClass('hide');
}

$(document).ready(function () {

    loadPage('start');

    var backgroundColor = '',
        radialGradientColor = '',
        sizeRadial = '';

    $.ajax({
        url: 'settings-for-buttons-gradient.json',
        type: 'GET',
        cache: false,
        success: function (result) {
            if (result) {
                result.forEach(function (element) {
                    backgroundColor = element.backgroundColor;
                    radialGradientColor = element.radialGradientColor;
                    sizeRadial = element.size;
                });
            }
        },
        error: function () {
            console.log('Error in parse');
        }
    });

    //btn gradient hover
    $('.btn-gradient').mousemove(function(e) {
        // var bg = backgroundColor;
        // var radial_gradient = radialGradientColor;
        // var size = sizeRadial;
        var offset = $(this).offset();
        var X = e.pageX - offset.left;
        var Y = e.pageY - offset.top;
        $(this).css(
            "background",
            "radial-gradient(circle at " +
            X +
            "px " +
            Y +
            "px, " +
            radialGradientColor +
            ", " +
            backgroundColor +
            " " +
            sizeRadial +
            ")"
        );
    });

    //hover for table item
    $('.table-div-item').on('mouseenter', function () {
        $('.table-div-item').removeClass('hover');
        var dataNum = $(this).attr('data-num');
        $(this).closest('.table-div-wrap').find('[data-num="'+dataNum+'"]').addClass('hover');
    }).on('mouseleave', function () {
        $('.table-div-item').removeClass('hover');
    });

    //replace item position
    if($(window).width() >= 1341) {
        $('.advantage-item').on('click', function () {
            var currentItem = $(this);
            var activeItem = $('.advantage-item.active');
            var currentY = currentItem.css('top');
            var currentX = currentItem.css('left');
            var activeY = activeItem.css('top');
            var activeX = activeItem.css('left');
            if(currentItem.hasClass('active')) {
                return false
            } else {
                activeItem.css({
                    'top': currentY,
                    'left': currentX
                }).removeClass('active');
                currentItem.css({
                    'top': activeY,
                    'left': activeX
                }).addClass('active');

                showTextInActiveItem(currentItem);
            }
        });
    }

    //tab theme
    $('.btn-tab').on('click', function () {

        var tabContent = $(this).attr('data-tab');

        $('.btn-tab').removeClass('active');
        $(this).addClass('active');

        $('.tab-content').not($('.tab-content[data-tab="'+tabContent+'"]')).hide();
        $('.tab-content[data-tab="'+tabContent+'"]').show();

    });

    $('[data-fancybox]').fancybox({
        touch: false
    });
    //close fancybox on click anywhere
    // $(document).mousedown(function (e) {
    //     var div = $('.popup, .datepicker, .ui-timepicker-container');
    //     if (!div.is(e.target) && div.has(e.target).length === 0) {
    //         $.fancybox.close();
    //     }
    // });
    //close other popups when open current
    $('.popup a[data-fancybox]').on('click', function () {

        var newPopup = $(this).attr('href');

        $.fancybox.close(true);

        $.fancybox.open({src:newPopup});

    });

    //enable sign up
    $('.form-check-input').on('change', function () {

        var checkInput = $(this);
        var button = checkInput.attr('data-button');

        if(checkInput.is(':checked')) {
            $('.btn.disabled[data-button="'+button+'"]').removeClass('disabled');
        } else {
            $('.btn[data-button="'+button+'"]').addClass('disabled');
        }

    });

    //custom select
    $('.select .dropdown-item').click(function(){
        var selText = $(this).text();
        $(this).parents('.select').find('.dropdown-toggle').html(selText);
    });

    //plus minus changing
    $('.plus-minus .btn').on('click', function (e) {
        e.preventDefault();
        var countWrap = $(this).closest('.plus-minus');
        var countInput = countWrap.find('.form-control');
        var step = parseInt(countInput.attr('step'));
        var maxValue = parseInt(countInput.attr('max'));
        var minValue = parseInt(countInput.attr('min'));
        var currentValue = parseInt(countInput.val());
        if($(this).hasClass('plus')) {
            addValue(countWrap, step, maxValue, minValue, currentValue, countInput);
        } else {
            subtractValue(countWrap, step, maxValue, minValue, currentValue, countInput);
        }
    });

    //select all points
    $('.select-all').on('change', function () {

        var checkAll = $(this);
        var table = checkAll.closest('.table');

        if(checkAll.is(':checked')) {
            table.find('.form-check').not('.green').find('input[type="checkbox"]').prop('checked',true);
        } else {
            table.find('.form-check').not('.green').find('input[type="checkbox"]').prop('checked',false);
        }

    });

    //toggle menu
    $('[data-toggle-element]').on('click', function () {
        var element = $(this).attr('data-toggle-element');
        toggleElement(element);
        $(this).toggleClass('active');
    });

    if($('#editor')[0]) {
        $('#editor').summernote();
    }

    //select training
    $('.select-training').on('click', function () {

        var typeTraining = $(this).closest('.table-div-col').find('.training-type').text();
        var electPopup = $('#elect-training');

        electPopup.find('.elect').html(typeTraining);

    });

    $('[datepicker]').datepicker({
        language: 'ru',
        autoclose: true
    });

    $('[timepicker]').timepicker({
        dropdown: true,
        scrollbar: true,
        zindex: 100004
    });

    //choose doctor
    $('.choose-doctor').on('click', function () {

        var docName = $(this).closest('.doctor-item').find('.card-title').text(),
            docType = $(this).closest('.doctor-item').find('.specialist').text(),
            docPrice = $(this).closest('.doctor-item').find('.price').text();

        $('#advice-popup').find('.specialist-name').html(docName);
        $('#advice-popup').find('.specialist-type').html(docType);
        $('#advice-popup').find('.specialist-price').html(docPrice);

    });

    if($('.v-scroll')[0] && $(window).width() >= 992) {
        $('.v-scroll').mCustomScrollbar({
            theme: 'dark-thin'
        });
    }
    if( $('.v-scroll')[0] ) {
        $('.dialog-content .v-scroll').mCustomScrollbar({
            theme: 'dark-thin'
        });
    }

    if($('.question-age-wrap')[0]) {
        $('.question-age-wrap').mCustomScrollbar({
            theme: 'dark-thin'
        });
        setTimeout(function () {
            $('.question-age-wrap').mCustomScrollbar('scrollTo',['top',null]);
        }, 100);
    }

    scrollChatBody();
    //send message in dialog
    $('.write-message').on('submit', function (e) {

        e.preventDefault();

        var textArea = $(this).find('.form-control');

        sendMessageInDialog(textArea);

    });

    //parse countries
    $.ajax({
        url: 'countries.json',
        type: 'GET',
        cache: false,
        success: function (result) {
            if (result) {
                result.forEach(function (element) {
                    $('select[name="country"]').append('<option value="'+element.name+'">'+element.name+'</option>')
                });
            }
        },
        error: function () {
            console.log('Error in parse');
        }
    });

    //add service
    $('.add-service').on('click', function () {

        addService();

    });

    //active fullscreen
    $('.btn-full-screen').on('click', function () {

        var idWrap = $(this).closest('.card').attr('id');

        full_screen(idWrap);

    });

    //profi carousel
    $('.profi-carousel').slick({
       dots: false,
       arrows: true,
        speed: 700,
        slidesToShow: 7,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    //add new day
    $('.add-day').on('click', function () {

        var dayItem = $(this).closest('li').prev('li').clone();

        $(this).closest('li').before(dayItem);

        numForDays();

    });

    //crop photo
    $('#crop-photo').Jcrop({
        maxSize: [390,390]
    });

    //toggle menu button
    $('.btn-toggle-menu').on('click' ,function () {
        var menuBtn = $(this);

        if(menuBtn.hasClass('active')) {
            menuBtn.removeClass('active');
            closeMainMenu();
        } else {
            menuBtn.addClass('active');
            openMainMenu();
        }
    });

    //close main menu
    $('.bg-close-modal').on('click', function () {
       closeMainMenu();
    });

    $(".share").jsSocials({
        url: "http://dietoved.hbmdev.com/html/",
        shareIn: "popup",
        showCount: false,
        shares: ["twitter", "facebook", "googleplus", "vkontakte"]
    });

    //dynamic width to input edit
    $('.enable-edit')
        .keyup(resizeInput)
        .each(resizeInput);


    //humans scheme
    $('.for-human').on('mouseenter click focus', function () {

        var dataSheme = $(this).attr('data-scheme');

        $('.human-scheme img').hide();
        $('.human-scheme [data-scheme="'+dataSheme+'"]').show();

    });


    //review, add comment
    $('body').on('click', '.add-comment', function (e) {

        e.preventDefault();

        var reviewFormWrap = $(this).closest('.message').children('.review-form');

        reviewFormWrap.slideToggle();

    });

    //back to top profi section
    $('.to-top.profi').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $('.profi-section').offset().top
        }, 1500);
    })

});

$(window).on('load', function () {

    loadPage('finished');

    maxPercent = 100;
    setTimeout(calculatePercentsTimeout, 10);

    setNumHowWorksList();
    replaceImgSrc();
    checkNumHoverTableItem();

    //advantages
    if($(window).width() >= 1341) {
        setActiveElement();
        setAdvantagesHeight();
        setPositionAdvantages();
    }

    //num list
    $('.num-list').find('li').each(function (i) {

        i += 1;

        $(this).find('a').prepend(i + '. ');

    });


    //num for days
    numForDays();

    //animate for successfully submit event, only for presentation
    $('.submit').on('click', function (e) {
        e.preventDefault();
        var button = $(this);
        button.addClass('loading');
        setTimeout(function () {
            button.addClass('success');
        }, 1000);
        setTimeout(function () {
           button.removeClass('loading success');
        }, 3000);
    });


});

$(window).on('scroll', function () {

   var vScroll = $(this).scrollTop();

   parallaxHomeTopTheme(vScroll);

   if($(window).width() >= 768) {
       parallaxTheme(vScroll);
   }

   if($('.fixed-scroll-sidebar')[0]) {
       setBottomPosition($('.fixed-scroll-sidebar'));
   }

   if(vScroll != 0) {
       closeMainMenu();
   }

    if($('.to-top')[0] && vScroll > $('#wrapper').height()/2) {

       $('.to-top').addClass('active');

    } else {

       $('.to-top').removeClass('active');

    }

});

function parallaxHomeTopTheme(vScroll) {

   var parallaxElement = $('.folder .parallax-theme');

   if(parallaxElement[0]) {
      // parallaxElement.css({
      //     'transform': 'translate('+ vScroll / 12 +'px,0)'
      // });
   }

}

function parallaxTheme(vScroll) {

    $('.parallax-element').each(function(){
        var thisVScroll = 0;
        var parallaxElement = $(this);
        var elementText = parallaxElement.find('.online-services-text');
        var elementPhoto = parallaxElement.find('.photo');
        thisVScroll = Math.min(0, parallaxElement.offset().top - vScroll - $(window).height() );
        if( elementText[0] && elementText.offset().top - vScroll < $(window).height() ){
            elementText.css({'-ms-transform':'translate(0, '+ '-' + Math.abs(thisVScroll) / 44 +'%)',
                '-webkit-transform':'translate(0, '+ '-' + Math.abs(thisVScroll) / 44 +'%)',
                'transform':'translate(0, '+ '-' + Math.abs(thisVScroll) / 44 +'%)'});
        }
        if( elementPhoto[0] && elementPhoto.offset().top - vScroll < $(window).height() ){
            elementPhoto.css({'-ms-transform':'translate(0, '+ '-' + Math.abs(thisVScroll) / 24 +'%)',
                '-webkit-transform':'translate(0, '+ '-' + Math.abs(thisVScroll) / 24 +'%)',
                'transform':'translate(0, '+ '-' + Math.abs(thisVScroll) / 24 +'%)'});
        }
    });

}

function setAdvantagesHeight() {

    var wrapHeight = 0;

    $('.advantage-item:nth-child(n+2)').each(function () {

        var elemHeight = $(this).outerHeight();

        wrapHeight = wrapHeight + elemHeight;

    });

    $('.advantages-list').height(wrapHeight);

}

function setActiveElement() {

    var activeElem = $('.advantage-item').first();

    activeElem.addClass('active').css({
        'top': 200,
        'left': 0
    });

}

function setPositionAdvantages() {

    var prevElemHeight = 0;

    var offsetLeft = $('.advantage-item').eq(1).css('left');

    $('.advantage-item:nth-child(n+3)').each(function () {

        var elem = $(this);

        var firstElemHeight = elem.eq(0).outerHeight();

        prevElemHeight += firstElemHeight;

        elem.css({
            'top': prevElemHeight,
            'left': offsetLeft
        });

    });

    $('.advantage-item').eq(1).css({
        'top': 0,
        'left': offsetLeft
    });

}

function setNumHowWorksList() {

    $('.how-works-list li').each(function (i) {

        i = i + 1;

        $(this).attr('data-num', i);

    });

}

function replaceImgSrc() {

    $('img[data-src]').each(function(){
        $(this).attr('src',$(this).attr('data-src')).removeAttr('data-src');
    });

}

function checkNumHoverTableItem() {

    var cNum = 0;
    var iNum = 0;

    $('.table-div-col').each(function (i) {

        cNum = i;

        $(this).find('.table-div-item').each(function (i) {

            iNum = i;

            $(this).attr('data-num', iNum);

        });

    });

}

function backToTop() {

    $('html, body').animate({
        scrollTop: $('.header').offset().top
    }, 1500);

}

function showTextInActiveItem(currentItem) {
    $('.advantage-description').slideUp();
    currentItem.find('.advantage-description').slideDown();
}

function addValue(countWrap, step, maxValue, minValue, currentValue, countInput) {
    if(currentValue === maxValue) {
        countWrap.addClass('disable-add');
    } else {
        currentValue += step;
        countWrap.removeClass('disable-add').addClass('enable-subtract');
    }
    countInput.val(currentValue);
}

function subtractValue(countWrap, step, maxValue, minValue, currentValue, countInput) {
    if(currentValue === minValue) {
        countWrap.removeClass('enable-subtract');
    } else {
        currentValue -= step;
        countWrap.removeClass('disable-add')
    }
    countInput.val(currentValue);
}

function toggleElement(element) {
    $(element).slideToggle();
}

function setBottomPosition(fixedElement) {

    var footerOffsetTop = Math.min(90, $('.footer').offset().top - $(window).scrollTop() - $(window).height() );

    if ( $('.footer').offset().top - $(window).scrollTop() < $(window).height() ){
        fixedElement.css('bottom',''+ Math.abs(footerOffsetTop) +'px');
    } else{
        fixedElement.css('bottom', '0');
    }

}

function sendMessageInDialog(textArea) {
    var user = '';
    if( $('#user').is(':checked') ){
        user = 'user';
    } else if ( $('#admin').is(':checked') ) {
        user = 'admin';
    }
    var message = textArea;
    var templateMessagee = '' +
        '<div class="message '+ user +'">' +
            '<div class="user-photo">' +
                '<img src="img/users/'+user+'.jpg" alt="some text" />' +
            '</div>' +
            '<div class="text">' +
                '<p>'+ message.val()+'</p>' +
            '</div>' +
        '</div>';
    if ( message.val() != '' ){
        $('.messages-aerodrome').append(templateMessagee);
        scrollChatBody();
    }
    message.val('');
    console.log(message.val());
}

function scrollChatBody(){
    $('.dialog-content .v-scroll').mCustomScrollbar('scrollTo','bottom');
}

function addService() {

    var row = $('.new-service'),
    input = row.find('.form-control'),
    rowNew = row.clone();

    if(input.val() != ''){
        row.not(rowNew).removeClass('new-service');
        rowNew.find('.form-control').val('');
        row.after(rowNew);
    } else {
        $('.new-service .form-control').focus();
    }
}

function numForDays() {

    var i = 0;

    $('.days-list').find('.day-item').each(function () {

       i += 1;

       $(this).attr('data-day-num', i).find('span').html(i);

    });

}

function openMainMenu() {
    var menu = $('.nav-main.custom-nav');
    menu.removeClass('top');
    setTimeout(function () {
        $('.bg-close-modal').fadeIn(600);
        menu.removeClass('light');
    }, 1000);

}

function closeMainMenu() {
    var menu = $('.nav-main.custom-nav');
    $('.btn-toggle-menu').removeClass('active');
    menu.addClass('light');
    setTimeout(function () {
        menu.addClass('top');
    }, 1000);
    setTimeout(function () {
        $('.bg-close-modal').fadeOut(600);
    }, 1500);

}

function resizeInput() {
    var input = $(this);
    input.attr('size', input.val().length);
    setTimeout(function () {
        if(input.val().length <= 0) {
            input.attr('size', 3);
        }
    }, 500);
}

//////////////////////

function full_screen(gameId) {
    if("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || "mozFullScreenEnabled" in document || "msFullscreenEnabled" in document)
    {
        if(document.fullscreenEnabled || document.webkitFullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled)
        {
            console.log("User allows fullscreen");
            var element = document.getElementById(gameId);
            if("requestFullscreen" in element)
            {
                element.requestFullscreen();
            }
            else if ("webkitRequestFullscreen" in element)
            {
                element.webkitRequestFullscreen();
            }
            else if ("mozRequestFullScreen" in element)
            {
                element.mozRequestFullScreen();
            }
            else if ("msRequestFullscreen" in element)
            {
                element.msRequestFullscreen();
            }

        }
    }
    else
    {
        console.log("User doesn't allow full screen");
    }
}

function screen_change() {
    if(document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement)
    {
        console.log("Current full screen element is : " + (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement))
    }
    else
    {
        if ("exitFullscreen" in document)
        {
            document.exitFullscreen();
        }
        else if ("webkitExitFullscreen" in document)
        {
            document.webkitExitFullscreen();
        }
        else if ("mozCancelFullScreen" in document)
        {
            document.mozCancelFullScreen();
        }
        else if ("msExitFullscreen" in document)
        {
            document.msExitFullscreen();
        }
    }
}

document.addEventListener("fullscreenchange", screen_change);
document.addEventListener("webkitfullscreenchange", screen_change);
document.addEventListener("mozfullscreenchange", screen_change);
document.addEventListener("MSFullscreenChange", screen_change);

document.addEventListener("fullscreenerror", function(){console.log("Full screen failed");});
document.addEventListener("webkitfullscreenerror", function(){console.log("Full screen failed");});
document.addEventListener("mozfullscreenerror", function(){console.log("Full screen failed");});
document.addEventListener("MSFullscreenError", function(){console.log("Full screen failed");});