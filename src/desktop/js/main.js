;
'use strict';

var step_slider_selector = '#slide-viewport';
var active_step_class = 'active_ste_slide';
var next_step_btn_selector = '.next-step';
var step_slide_speed = 500;

var step_animation_flag = false;

var video_frame_selector = '.video_btn';

var validation_inputs_selectors = 'textarea,input[type="text"]';

var validation_pop_selector = '#validation_popup';

var close_pop_selectors = '.close_p';


var textarea_min_length = 5;
var textarea_max_length = 999;

var descriptor_max_length = 70;
var offer_h1_max_length = 80;
var offer_h2_max_length = 70;



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

function validateEmail(email) {var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;return re.test(email);};



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

            if (parseInt(step)!=1) {
            	$('.back_btn').show();
            }else{
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

function get_input_parameters(type_data){

    var name_input,max_length,min_length,type_of_input;
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
    }
    return input_obj;
}

function live_validation_input(elem) {

    var type_data = $(elem).data('input-type');

    var inp_value = $(elem).val();

    var input_obj = get_input_parameters(type_data);

    if (input_obj.type_of_input == 'textarea') {

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

    console.log('input_obj = ',input_obj);

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

    }
        
        
}

function validate_active_step(if_good) {
    $('.' + active_step_class).find(validation_inputs_selectors).each(function(index, el) {

        validate_input(el);

    });

    var errors_elements = $('.' + active_step_class).find('.error-input');

    if (errors_elements.length == 0) {

    	$('.' + active_step_class).addClass('passed');
        
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
                }

                if ($(this).hasClass('error-over')) {
                    error_text = '<span>Превышен лимит символов (' + input_obj.max_length + ') в поле ' + input_obj.name_input + '</span>';
                    errors_wrap.append(error_text);
                }

            }

        });

        $(validation_pop_selector).arcticmodal();
    }
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

$(document).ready(function() {
    hfixed();
    init_step_slider_height();
//____________
    go_to_step(5);
//____________
    $(next_step_btn_selector).click(function(e) {
        e.preventDefault();

        var _this = this;

        validate_active_step(function() {

            var next_step = $(_this).closest('section').next().data('step');

            go_to_step(next_step);

            console.log('go to step ' + next_step);


        });





    });

    $(video_frame_selector).click(function(e) {
        e.preventDefault();
        append_video($(this));
    });

    $(validation_inputs_selectors).on('change input', function(e) {
        live_validation_input(this);
    });

    $(close_pop_selectors).click(function(e) {
        e.preventDefault();
        $(this).parent().arcticmodal('close');
    });
    //lets_phone
    $('.iph1,.iph2,.iph3').on('input',function(e){
        console.log('keypress on phone part');

        var inp_wrap = $(this).closest('.input');

        if ($(this).hasClass('iph1')){

            if ($(this).val().length > 0) {
                $(this).width($(this).val().length*9);
            }

            if ($(this).val().length > 2) {
                $(this).addClass('error');
                inp_wrap.addClass('error-input').addClass('error_country_code');
            }else{
                $(this).removeClass('error');
                inp_wrap.removeClass('error_country_code');
            }
        
        } 


        if ($(this).hasClass('iph2')){

            if ($(this).val().length > 2) {
                $(this).width($(this).val().length*9);
            }
            
            if ($(this).val().length > 4) {
                $(this).addClass('error');
                inp_wrap.addClass('error-input').addClass('error_city_code');
            }else{
                $(this).removeClass('error');
                inp_wrap.removeClass('error_city_code');
            }
        }

        if (!inp_wrap.hasClass('error_city_code') && !inp_wrap.hasClass('error_country_code')) {
            inp_wrap.removeClass('error-input');
        }

    });

    $('.iph1,.iph2').ForceNumericOnly();

    $('span.placeholder_p').click(function(){
        $(this).hide();
        $(this).parent().find('.iph1').focus();
    });

    $('.iph3').mask('999-99-99');
    $('.iph3').blur(function() {if($(this).val().length != 9) {$(this).closest('.input').addClass('error-input');}});
    $('.iph3').focus(function() {$(this).closest('.input').removeClass('error-input');});

    //


    $('input[name="act_email"]').blur(function() {if(!validateEmail($(this).val())) {$(this).addClass('error-input');}});
    $('input[name="act_email"]').focus(function() {$(this).removeClass('error-input');});

    $('input[name="page_email"]').blur(function() {
    
        if($(this).val().length>0 && !validateEmail($(this).val())) {
            $(this).addClass('error-input');
        }

    });

    $('input[name="page_email"]').focus(function() {$(this).removeClass('error-input');});

    $('input[name="page_addr"]').blur(function() {if($(this).val().length < 6 || $(this).val().length > 40) {$(this).addClass('error-input');}});
    $('input[name="page_addr"]').focus(function() {$(this).removeClass('error-input');});




    $('.menu_a').click(function(e) {
        e.preventDefault();
        if ($(this).hasClass('allowed')) {
        	var target_step = $(this).data('step');
        	if ($('.'+active_step_class).hasClass('passed')) {
        		validate_active_step(function(){go_to_step(target_step);});
        	}else{
            	go_to_step(target_step);
        	}
            close_menu();
        }else{
        	$('.not-allowed').arcticmodal();
        }
    });

    $('.back_btn').click(function(e){
        e.preventDefault();
    	var target_step = $('.'+active_step_class).prev().data('step');
    	if ($('.'+active_step_class).hasClass('passed')) {
    		validate_active_step(function(){go_to_step(target_step);});
    	}else{
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

});

$(window).scroll(function() {
    hfixed();
});

$(step_slider_selector).scroll(function() {
    hfixed();
});