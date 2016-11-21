;
'use strict';



var step_slider_selector = '#slide-viewport';
var active_step_class = 'active_ste_slide';
var next_step_btn_selector = '.next-step';
var step_slide_speed = 500;

var step_animation_flag = false;

var video_frame_selector = '.video_btn';

var validation_inputs_selectors = 'textarea,input.valid[type="text"],input.valid[type="password"]';

var validation_pop_selector = '#validation_popup';

var close_pop_selectors = '.close_p';


var textarea_min_length = 5;
var textarea_max_length = 999;

var descriptor_max_length = 70;
var offer_h1_max_length = 80;
var offer_h2_max_length = 70;

var ph1_min_length = 1;
var ph1_max_length = 2;

var ph2_min_length = 3;
var ph2_max_length = 4;

var ph3_min_length = 9;
var ph3_max_length = 9;

var email_min_length = 5;
var email_alt_min_length = 0;
var email_max_length = 40;

var addr_max_length = 40;

var pass_min_length = 6;
var pass_max_length = 16;

var video_min_length = 25;
var video_max_length = 150;


jQuery.fn.ForceNumericOnly =
    function() {
        return this.each(function() {
            $(this).keydown(function(e) {
                var key = e.charCode || e.keyCode || 0;
                return (
                    key == 8 ||
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
};


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return false;
}

function findGetParameter(parameterName) {
    var result = false,
        tmp = [];
    location.search
        .substr(1)
        .split("&")
        .forEach(function(item) {
            tmp = item.split("=");
            if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        });
    return result;
}

function youtube_parser(url) {
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    return (match && match[7].length == 11) ? match[7] : false;
}

function init_step_slider_height() {
    $(step_slider_selector).height($('.' + active_step_class).outerHeight()).addClass('inited');
}

function go_to_step(step) {
    if (!step_animation_flag) {

        var cur_step = $('.' + active_step_class).data('step');

        if (cur_step != step) {

            step_animation_flag = true;

            //console.log($('section[data-step="' + step + '"]').offset().top);

            var slide_scroll = $('section[data-step="' + step + '"]').offset().top;


            // if (parseInt(step) < parseInt(cur_step)) {

            // 	slide_scroll = -$('.' + active_step_class).prev().outerHeight();

            // }else{
            // 	slide_scroll = $('.' + active_step_class).outerHeight();
            // }

            var viewport_scroll_top = $(step_slider_selector).scrollTop() + slide_scroll;

            //console.log('cur_viewport_scroll_top = ', $(step_slider_selector).scrollTop(), '; active_slide_height = ', slide_scroll, '; viewport_scroll_top = ', viewport_scroll_top);

            //$('section[data-step="' + step + '"]').show();

            $(step_slider_selector).animate({
                scrollTop: viewport_scroll_top,
                height: $('section[data-step="' + step + '"]').outerHeight()
            }, step_slide_speed, function() {
                $('.' + active_step_class).find('iframe.ytb_video').each(function() {
                    console.log('remove video ' + $(this).attr('src'));
                    $(this).remove();
                });
                $('.' + active_step_class).removeClass(active_step_class);
                $('section[data-step="' + step + '"]').addClass(active_step_class);

                step_animation_flag = false;

                $('.menu_a').removeClass('active');
                $('.menu_a[data-step="' + step + '"]').addClass('allowed').addClass('active');

            });
            $("html, body").animate({
                scrollTop: 0
            }, step_slide_speed);

            if (parseInt(step) != 1) {
                $('.back_btn').show();
            } else {
                $('.back_btn').hide();
            }

        }



    } else {
        console.log('step_animation blocked by flag');
    }

}

function append_video(elem) {
    var video_id = elem.data('video');
    elem.html('<iframe class="ytb_video" src="https://www.youtube.com/embed/' + video_id + '?rel=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>');
    console.log('append video ', video_id);
}

function hfixed() {
    if ($(step_slider_selector).scrollTop() == 0) {
        if ($(window).scrollTop() > 55) {
            $('.header').addClass('h-fixed');
        } else {
            $('.header').removeClass('h-fixed');
        }
    } else {
        $('.header').addClass('h-fixed');
    }
}

/*function init_hfixed() {
    if ($(window).scrollTop() > 55) {
        $('.header').addClass('h-fixed');
    }
}*/

function get_input_parameters(type_data) {

    var name_input, max_length, min_length, type_of_input;
    var input_obj = {};

    switch (type_data) {

        case 'descriptor':
            input_obj.name_input = '"Дескриптор"';
            input_obj.min_length = textarea_min_length;
            input_obj.max_length = descriptor_max_length;
            input_obj.type_of_input = 'textarea';
            break;

        case 'what_sell':

            input_obj.name_input = '"Что Вы продаете?"';
            input_obj.min_length = textarea_min_length;
            input_obj.max_length = textarea_max_length;
            input_obj.type_of_input = 'textarea';

            break;

        case 'what_buy':

            input_obj.name_input = '"Что покупает клиент?"';
            input_obj.min_length = textarea_min_length;
            input_obj.max_length = textarea_max_length;
            input_obj.type_of_input = 'textarea';

            break;

        case 'what_take':

            input_obj.name_input = '"Что получает клиент?"';
            input_obj.min_length = textarea_min_length;
            input_obj.max_length = textarea_max_length;
            input_obj.type_of_input = 'textarea';

            break;

        case 'offer_h1':

            input_obj.name_input = '"Основа"';
            input_obj.min_length = textarea_min_length;
            input_obj.max_length = offer_h1_max_length;
            input_obj.type_of_input = 'textarea';

            break;

        case 'offer_h2':

            input_obj.name_input = '"Преимущество"';
            input_obj.min_length = textarea_min_length;
            input_obj.max_length = offer_h2_max_length;
            input_obj.type_of_input = 'textarea';

            break;

        case 'ph1':

            input_obj.name_input = '"Код страны(телефон)"';
            input_obj.min_length = ph1_min_length;
            input_obj.max_length = ph1_max_length;
            input_obj.type_of_input = 'phonepart';

            break;

        case 'ph2':

            input_obj.name_input = '"Код города(телефон)"';
            input_obj.min_length = ph2_min_length;
            input_obj.max_length = ph2_max_length;
            input_obj.type_of_input = 'phonepart';

            break;

        case 'ph3':

            input_obj.name_input = '"Номер телефона"';
            input_obj.min_length = ph3_min_length;
            input_obj.max_length = ph3_max_length;
            input_obj.type_of_input = 'phonepart';

            break;

        case 'act_email':

            input_obj.name_input = '"Емейл для заявок"';
            input_obj.min_length = email_min_length;
            input_obj.max_length = email_max_length;
            input_obj.type_of_input = 'email';

            break;

        case 'page_email':

            input_obj.name_input = '"Емейл на странице"';
            input_obj.min_length = email_alt_min_length;
            input_obj.max_length = email_max_length;
            input_obj.type_of_input = 'email';

            break;

        case 'page_addr':

            input_obj.name_input = '"Адрес"';
            input_obj.min_length = textarea_min_length;
            input_obj.max_length = addr_max_length;
            input_obj.type_of_input = 'textarea';

            break;

        case 'pass':

            input_obj.name_input = '"Пароль"';
            input_obj.min_length = pass_min_length;
            input_obj.max_length = pass_max_length;
            input_obj.type_of_input = 'pass';

            break;

        case 'email':

            input_obj.name_input = '"Емейл"';
            input_obj.min_length = email_min_length;
            input_obj.max_length = email_max_length;
            input_obj.type_of_input = 'email';

            break;

        case 'video':

            input_obj.name_input = '"Продающее видео"';
            input_obj.min_length = video_min_length;
            input_obj.max_length = video_max_length;
            input_obj.type_of_input = 'video';

            break;
    }
    return input_obj;
}

function live_validation_input(elem) {

    var type_data = $(elem).data('input-type');

    var inp_value = $(elem).val();

    var input_obj = get_input_parameters(type_data);

    if (input_obj.type_of_input == 'textarea' || input_obj.type_of_input == 'phonepart' || input_obj.type_of_input == 'email' || input_obj.type_of_input == 'pass' || input_obj.type_of_input == 'video') {

        if (inp_value.length > input_obj.max_length) {

            $(elem).addClass('error-input').addClass('error-over');
            console.log(type_data + ' - live validation - error - over');
            $(elem).parent().children('span').addClass('error-over');

        } else {

            $(elem).removeClass('error-input').removeClass('error-empty').removeClass('error-over');
            console.log(type_data + ' - live validation - good');
            $(elem).parent().children('span').removeClass('error-over');

        }
    }

}

function validate_input(elem) {
    var type_data = $(elem).data('input-type');

    var inp_value = $(elem).val();

    console.log('input type = ' + type_data, '; input value = ' + inp_value);

    var input_obj = get_input_parameters(type_data);

    console.log('input_obj = ', input_obj);

    if (input_obj.type_of_input == 'textarea') {

        if (inp_value.length < input_obj.min_length) {

            $(elem).addClass('error-input').addClass('error-empty');
            console.log(type_data + ' - error - empty');
        } else if (inp_value.length > input_obj.max_length) {

            $(elem).addClass('error-input').addClass('error-over');
            console.log(type_data + ' - error - over');

        } else {
            $(elem).removeClass('error-input').removeClass('error-empty').removeClass('error-over');
            console.log(type_data + ' - good');
        }

    } else

    if (input_obj.type_of_input == 'phonepart') {

        var patt1 = new RegExp(/^\d*$/);
        var patt2 = new RegExp(/^\d\d\d\-\d\d\-\d\d$/);

        if (inp_value.length < input_obj.min_length) {

            $(elem).addClass('error-input').addClass('error-empty');
            $(elem).closest('.input').addClass('error-input');
            console.log(type_data + ' - error - empty');

        } else if (inp_value.length > input_obj.max_length) {

            $(elem).addClass('error-input').addClass('error-over');
            $(elem).closest('.input').addClass('error-input');
            console.log(type_data + ' - error - over');

        } else if (!$(elem).hasClass('iph3')) {
            //console.log(inp_value);

            if (!patt1.test(inp_value)) {

                $(elem).addClass('error-input').addClass('error-nonum');
                $(elem).closest('.input').addClass('error-input');
                console.log(type_data + ' - error - nonumber');

            }

        } else if ($(elem).hasClass('iph3')) {
            //console.log(inp_value);
            if (!patt2.test(inp_value)) {

                $(elem).addClass('error-input').addClass('error-nonum');
                $(elem).closest('.input').addClass('error-input');
                console.log(type_data + ' - error - nonumber');

            }

        } else {
            $(elem).removeClass('error-input').removeClass('error-empty').removeClass('error-over').removeClass('error-nonum');
            $(elem).closest('.input').removeClass('error-input');
            console.log(type_data + ' - good');
        }

    } else

    if (input_obj.type_of_input == 'email') {

        if (inp_value.length < input_obj.min_length) {

            $(elem).addClass('error-input').addClass('error-empty');
            console.log(type_data + ' - error - empty');

        } else if (inp_value.length > input_obj.max_length) {

            $(elem).addClass('error-input').addClass('error-over');
            console.log(type_data + ' - error - over');

        } else if (inp_value.length > 0 && !validateEmail(inp_value)) {

            $(elem).addClass('error-input').addClass('error-noemail');
            console.log(type_data + ' - error - noemail');

        } else {
            $(elem).removeClass('error-input').removeClass('error-empty').removeClass('error-over').removeClass('error-noemail');
            console.log(type_data + ' - good');
        }

    } else

    if (input_obj.type_of_input == 'pass') {

        var patt = new RegExp(/^[a-zA-Z0-9_]*$/);

        if (inp_value.length < input_obj.min_length) {

            $(elem).addClass('error-input').addClass('error-empty');
            console.log(type_data + ' - error - empty');

        } else if (inp_value.length > input_obj.max_length) {

            $(elem).addClass('error-input').addClass('error-over');
            console.log(type_data + ' - error - over');

        } else if (inp_value.length > 0 && !patt.test(inp_value)) {

            $(elem).addClass('error-input').addClass('error-nopass');
            console.log(type_data + ' - error - nopass');

        } else {
            $(elem).removeClass('error-input').removeClass('error-empty').removeClass('error-over').removeClass('error-noemail');
            console.log(type_data + ' - good');
        }

    } else

    if (input_obj.type_of_input == 'video') {

        console.log('youtube_video_id = ' + youtube_parser(inp_value));

        if (inp_value != '0' && inp_value.length < input_obj.min_length) {

            $(elem).addClass('error-input').addClass('error-empty');
            console.log(type_data + ' - error - empty');

        } else if (inp_value.length > input_obj.max_length) {

            $(elem).addClass('error-input').addClass('error-over');
            console.log(type_data + ' - error - over');

        } else if (inp_value != '0' && !youtube_parser(inp_value)) {

            $(elem).addClass('error-input').addClass('error-novideo');
            console.log(type_data + ' - error - novideo');

        } else {
            $(elem).removeClass('error-input').removeClass('error-empty').removeClass('error-over').removeClass('error-novideo');
            console.log(type_data + ' - good');
        }

    }


}

function validate_wrap(wrap, if_good) {
    wrap.find(validation_inputs_selectors).each(function(index, el) {

        validate_input(el);

    });

    var errors_elements = wrap.find('.error-input');

    if (errors_elements.length == 0) {

        if (wrap.is('section')) {

            $('.' + active_step_class).addClass('passed');

        }

        if_good();

        console.log('validation - true');
        console.log('_______________');

    } else {

        console.log('validation - false');
        console.log('_______________');

        var errors_wrap = $(validation_pop_selector).find('p');
        errors_wrap.html('');

        errors_elements.each(function(index, el) {

            var type_data = $(this).data('input-type');
            var name_input, max_length, error_text;

            var input_obj = get_input_parameters(type_data);

            if (input_obj.type_of_input == 'textarea') {

                if ($(this).hasClass('error-empty')) {
                    error_text = '<span>Поле ' + input_obj.name_input + ' не заполнено</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-over')) {
                    error_text = '<span>Превышен лимит символов (' + input_obj.max_length + ') в поле ' + input_obj.name_input + '</span>';
                    errors_wrap.append(error_text);
                }

            } else

            if (input_obj.type_of_input == 'phonepart') {

                if ($(this).hasClass('error-empty')) {
                    error_text = '<span>Поле ' + input_obj.name_input + ' не заполнено</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-over')) {
                    error_text = '<span>Превышен лимит символов (' + input_obj.max_length + ') в поле ' + input_obj.name_input + '</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-nonum')) {
                    error_text = '<span>Символы в поле ' + input_obj.name_input + ' должны быть цифрами</span>';
                    errors_wrap.append(error_text);
                }

            } else

            if (input_obj.type_of_input == 'email') {

                if ($(this).hasClass('error-empty')) {
                    error_text = '<span>Поле ' + input_obj.name_input + ' не заполнено</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-over')) {
                    error_text = '<span>Превышен лимит символов (' + input_obj.max_length + ') в поле ' + input_obj.name_input + '</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-noemail')) {
                    error_text = '<span>Значение в поле ' + input_obj.name_input + ' не является емейлом</span>';
                    errors_wrap.append(error_text);
                }

            } else

            if (input_obj.type_of_input == 'pass') {

                if ($(this).hasClass('error-empty')) {
                    error_text = '<span>Поле ' + input_obj.name_input + ' не заполнено</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-over')) {
                    error_text = '<span>Превышен лимит символов (' + input_obj.max_length + ') в поле ' + input_obj.name_input + '</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-nopass')) {
                    error_text = '<span>Значение в поле ' + input_obj.name_input + ' должно состоять из латинских букв и цифр</span>';
                    errors_wrap.append(error_text);
                }

            } else

            if (input_obj.type_of_input == 'video') {

                if ($(this).hasClass('error-empty')) {
                    error_text = '<span>Поле ' + input_obj.name_input + ' не заполнено</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-over')) {
                    error_text = '<span>Превышен лимит символов (' + input_obj.max_length + ') в поле ' + input_obj.name_input + '</span>';
                    errors_wrap.append(error_text);
                } else

                if ($(this).hasClass('error-novideo')) {
                    error_text = '<span>Значение в поле ' + input_obj.name_input + ' не ссылка на youtube</span>';
                    errors_wrap.append(error_text);
                }

            }

        });

        $(validation_pop_selector).arcticmodal();
    }
}

function send_first_part(callback) {

    var enter_char = new RegExp(String.fromCharCode(10), 'g');

    var descriptor = $('textarea[data-input-type="descriptor"]').val().replace(/^\s+|\s+$/g, '');

    var target = $('input[name="user_hash"]').val();

    var page_title = descriptor.replace(enter_char, ' ');

    descriptor = descriptor.replace(enter_char, ' <br>');

    var what_sell = $('textarea[data-input-type="what_sell"]').val().replace(/^\s+|\s+$/g, '');
    var what_buy = $('textarea[data-input-type="what_buy"]').val().replace(/^\s+|\s+$/g, '');
    var what_take = $('textarea[data-input-type="what_take"]').val().replace(/^\s+|\s+$/g, '');
    var offer_h1 = $('textarea[data-input-type="offer_h1"]').val().replace(/^\s+|\s+$/g, '').replace(enter_char, ' <br>');
    var offer_h2 = $('textarea[data-input-type="offer_h2"]').val().replace(/^\s+|\s+$/g, '').replace(enter_char, ' <br>');
    var phone_p1 = $('input[data-input-type="ph1"]').val();
    var phone_p2 = $('input[data-input-type="ph2"]').val();
    var phone_p3 = $('input[data-input-type="ph3"]').val();
    var act_email = $('input[data-input-type="act_email"]').val();
    var page_email = $('input[data-input-type="page_email"]').val();
    var page_addr = $('input[data-input-type="page_addr"]').val();

    if (page_email.length == 0) {
        page_email = act_email
    }

    var register_part = {
        target: target,
        descriptor: descriptor,
        what_sell: what_sell,
        what_buy: what_buy,
        what_take: what_take,
        offer_h1: offer_h1,
        offer_h2: offer_h2,
        phone_p1: phone_p1,
        phone_p2: phone_p2,
        phone_p3: phone_p3,
        act_email: act_email,
        page_email: page_email,
        page_addr: page_addr
    }

    console.log('send_first_part - ', register_part);

    if (callback) {
        callback();
    }

}


function init_slider(selector, slideWidth) {

    //sider otz
    slider = $(selector).bxSlider({
        infiniteLoop: true,
        //nextSelector:left_selector,
        //prevSelector:right_selector,
        slideWidth: slideWidth,
        controls: true,
        pager: false,
        auto: false,
        speed: 500,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        onSlideNext: function($slideElement, oldIndex, newIndex) {},
        onSlidePrev: function($slideElement, oldIndex, newIndex) {},
        onSliderLoad: function() {
            console.log('load_slider - ', selector);
        }
    });
    return slider
}


function open_menu() {
    var to_top = $('.header .login').offset().top - $(window).scrollTop();
    $('#menu').addClass('opened');
    $('body').removeAttr('style').addClass('scroll_blocked');
    $('#menu .close').css('top', to_top + 'px');
}

function close_menu() {
    $('#menu').removeClass('opened');
    $('body').removeClass('scroll_blocked');
}

function open_login() {
    var to_top = $('.header .login').offset().top - $(window).scrollTop();
    $('#login').addClass('opened');
    $('#login .close').css('top', to_top + 'px');
}

function close_login() {
    $('#login').removeClass('opened');
}

function login(wrap, callback) {

    validate_wrap(wrap, function() {

        var data = wrap.serialize();

        console.log('logining', data);

        var user_hash = 'USER_HASH';

        console.log('set coockie - ', user_hash);
        setCookie('dnkatom', user_hash, 1);

        init_user_by_hash(user_hash);

        close_login();

        if (event == "login_to_send") {
            //send_first_part(function(){
            go_to_step(7);
            //});

        }


    });

}


function init_user_by_hash(hash) {

    console.log('init_by_hash - ', hash);

    $('input[name="user_hash"]').val(hash);

    var email = "USER_EMAIL"

    var status = "confrim";

    console.log('user email = ', email);
    console.log('status = ', email);

    $('section[data-step="6"]').remove();

    if (status == "confrim") {

        console.log('!get_first_part_from_server');
        go_to_step(7);

    }

    console.log('refresh coockie - ', hash);
    setCookie('dnkatom', hash, 1);

}

function init_user() {

    var hash = getCookie('dnkatom');

    console.log('get coockie - ', hash);
    if (hash) {
        init_user_by_hash(hash);
    } else {
        hash = findGetParameter('confrim');
        console.log('get confrim hash - ', hash);
        if (hash) {
            init_user_by_hash(hash);
        }
    }
}

$(document).ready(function() {
    hfixed();
    init_step_slider_height();
    init_user();
    //____________
    //go_to_step(6);
    //____________
    $(next_step_btn_selector).click(function(e) {
        e.preventDefault();

        var _this = this;
        var wrap = $(this).closest('section');

        validate_wrap(wrap, function() {

            var next_step = $(_this).closest('section').next(':visible').data('step');

            go_to_step(next_step);

            console.log('go to step ' + next_step);


        });





    });

    $(video_frame_selector).click(function(e) {
        e.preventDefault();
        append_video($(this));
    });

    $(validation_inputs_selectors).on('keyup', function(e) {
        live_validation_input(this);
    });

    $(close_pop_selectors).click(function(e) {
        e.preventDefault();
        $(this).parent().arcticmodal('close');
    });
    //login part

    $('input[name="password"]').blur(function() {
        if ($(this).val().length < 4) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="password"]').focus(function() {
        $(this).removeClass('error-input');
    });

    $('input[name="email"]').blur(function() {
        if (!validateEmail($(this).val())) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="email"]').focus(function() {
        $(this).removeClass('error-input');
    });

    $('form.login').submit(function(e) {
        e.preventDefault();
        var event = $(this).attr('data-event');
        login($(this));
    });

    //lets_phone
    $('.iph1,.iph2,.iph3').on('input', function(e) {
        console.log('keypress on phone part');

        var inp_wrap = $(this).closest('.input');
        var phone_inp = $('input[name="phone"]');

        if ($(this).hasClass('iph1')) {

            if ($(this).val().length > 0) {
                $(this).width($(this).val().length * 9);
            }

            if ($(this).val().length > 2) {
                $(this).addClass('error');
                inp_wrap.addClass('error-input').addClass('error_country_code');
                phone_inp.addClass('error-input').addClass('error_country_code');
            } else {
                $(this).removeClass('error');
                inp_wrap.removeClass('error_country_code');
                phone_inp.removeClass('error_country_code');
            }

        }


        if ($(this).hasClass('iph2')) {

            if ($(this).val().length > 2) {
                $(this).width($(this).val().length * 9);
            }

            if ($(this).val().length > 4) {
                $(this).addClass('error');
                inp_wrap.addClass('error-input').addClass('error_city_code');
                phone_inp.addClass('error-input').addClass('error_city_code');
            } else {
                $(this).removeClass('error');
                inp_wrap.removeClass('error_city_code');
                phone_inp.removeClass('error_city_code');
            }
        }

        if (!inp_wrap.hasClass('error_city_code') && !inp_wrap.hasClass('error_country_code')) {
            inp_wrap.removeClass('error-input');
            phone_inp.removeClass('error-input');
        }


    });
    /*$('.iph1,.iph2,.iph3').on('keyup',function(){

        var phone_inp = $('input[name="phone"]');

        var phone_value = $('.iph1').val() + ',' + $('.iph2').val() + ',' + $('.iph3').val();

        phone_inp.val(phone_value);

        console.log(phone_value);

    });*/

    $('.iph1,.iph2').ForceNumericOnly();

    $('span.placeholder_p').click(function() {
        $(this).hide();
        $(this).parent().find('.iph1').focus();
    });

    $('.iph3').mask('999-99-99');
    $('.iph3').blur(function() {
        if ($(this).val().length != 9) {
            $(this).closest('.input').addClass('error-input');
        }
    });
    $('.iph3').focus(function() {
        $(this).closest('.input').removeClass('error-input');
    });

    //


    $('input[name="act_email"]').blur(function() {
        if (!validateEmail($(this).val())) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="act_email"]').focus(function() {
        $(this).removeClass('error-input');
    });

    $('input[name="page_email"]').blur(function() {

        if ($(this).val().length > 0 && !validateEmail($(this).val())) {
            $(this).addClass('error-input');
        }

    });

    $('input[name="page_email"]').focus(function() {
        $(this).removeClass('error-input');
    });

    $('input[name="page_addr"]').blur(function() {
        if ($(this).val().length < 6 || $(this).val().length > 40) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="page_addr"]').focus(function() {
        $(this).removeClass('error-input');
    });




    $('.sec6 .wrap .block.absolute a').click(function(e) {

        e.preventDefault();
        var event = $(this).data('event');
        if (event == 'register') {

            send_first_part(function() {

                $('.sec6 .wrap .block.absolute').fadeOut();
                $('.sec6 .wrap .block-after').addClass('show');

            });

        }

        if (event == 'login') {

            open_login();

            $('form.login').attr('data-event', 'login_to_send');

        }

    });

    $('.video_trigger').click(function(e) {
        e.preventDefault();

        var event = $(this).data('event');
        $('.video_trigger').removeClass('active');
        $(this).addClass('active')
        if (event == 'hide') {
            $('#content_video').val('0').hide();
        } else {
            $('#content_video').val('').show();
        }

    });


    $('a.login').click(function(e) {
        e.preventDefault();
        open_login();
        $('form.login').attr('data-event', 'login');
    });

    $('#login .close').click(function(e) {
        e.preventDefault();
        close_login();
    });

    $('.menu_a').click(function(e) {
        e.preventDefault();
        if ($(this).hasClass('allowed')) {
            var target_step = $(this).data('step');
            var wrap = $('.' + active_step_class);
            if ($('.' + active_step_class).hasClass('passed')) {
                validate_wrap(wrap, function() {
                    go_to_step(target_step);
                });
            } else {
                go_to_step(target_step);
            }
            close_menu();
        } else {
            $('.not-allowed').arcticmodal();
        }
    });

    $('.back_btn').click(function(e) {
        e.preventDefault();
        var target_step = $('.' + active_step_class).prev().data('step');
        var wrap = $('.' + active_step_class);
        if ($('.' + active_step_class).hasClass('passed')) {
            validate_wrap(wrap, function() {
                go_to_step(target_step);
            });
        } else {
            go_to_step(target_step);
        }
    });

    $('.politic').click(function(e) {
        e.preventDefault();
        $('.conf-pop').arcticmodal();
    });

    $('.btn_menu_open').click(function(e) {
        e.preventDefault();
        open_menu();
    });

    $('#menu .close').click(function(e) {
        e.preventDefault();
        close_menu();
    });


    var offer_slider_inited = false;
    $('#offer_pop').click(function(e) {
        e.preventDefault();
        $('.offer-pop').arcticmodal();
        if (!offer_slider_inited) {
            offer_slider = init_slider('.offer-pop .init_slider', 980);
            offer_slider_inited = true
        }
    });

    var content_video_slider_inited = false;
    $('#content_video_pop').click(function(e) {
        e.preventDefault();
        $('.content-video-pop').arcticmodal();
        if (!content_video_slider_inited) {
            content_video_slider = init_slider('.content-video-pop .init_slider', 640);
            content_video_slider_inited = true
        }
    });


});

$(window, step_slider_selector).scroll(function() {
    hfixed();
});
