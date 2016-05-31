$(document).ready(function(){



    (function marquee(){
        var marquee = $('.example-right');
        if (marquee.length <= 0)
            return;
        marquee.simplemarquee({
            direction: 'right'
        });
        $(window).on('load', function(){
            $('.merq_wr').css('opacity','1');
        });
    }());

    (function btoolt(){
        var btoolt = $('[data-toggle="tooltip"]');
        if (btoolt.length <= 0)
            return;
        btoolt.tooltip()
    }());

    (function count(){
        var count = $('.count');
        if (count.length <= 0)
            return;

        count.countdown({until: ts, compact: true, format: 'HMS'});
    }());

    (function pickme(){
        var pickme = $('.date_p');
        if (pickme.length <= 0)
            return;
        pickme.pickadate({
            format  : 'd.mm.yyyy'
        });
    }());

    (function burg_butt(){
        var burg_butt = $('.burg_butt');
        if (burg_butt.length <= 0)
            return;
        burg_butt.on('click', function(){
            $(this).parent().find('.mob_menu').slideToggle();
        });
    }());

    (function index_pp_slide(){
        var index_pp_slide = $('.index_pp_slide li');
        if (index_pp_slide.length <= 0)
            return;

        var photo,
            offset,
            photoViewportOffsetTop,
            photoViewportOffsetLeft;

        $(window).on('scroll resize load', function(){

        });

        index_pp_slide.hover(function(){

            photo = $(this);
            var photo_h = photo.find('.toolt_index_slide').height();
            var photo_w = photo.find('.toolt_index_slide').width();
            var cont_bx_wr_off = $('.cont_bx_wr').offset().left;
            var cont_bx_wr_w = $('.cont_bx_wr').width();
            var wind_w = $(window).width();
            offset = photo.offset();
            photoViewportOffsetTop = offset.top - $(document).scrollTop();
            photoViewportOffsetLeft = offset.left - $(document).scrollLeft();

            if (photoViewportOffsetLeft+photo_w > cont_bx_wr_w+cont_bx_wr_off){
                var $fixed = photo.find('.toolt_index_slide').addClass('show r_b').css({
                    'top': -(photo_h+90),
                    'left': 'auto',
                    'right': '5%'
                });
            }
            else{
                var $fixed = photo.find('.toolt_index_slide').addClass('show').css({
                    'top': -(photo_h+90)
                    // 'left': photoViewportOffsetLeft
                });
            }

        },function(){
            var $fixed = photo.find('.toolt_index_slide').removeClass('show r_b').css({
                'top': '',
                'right': ''
            });
        });

    }());

    (function faq_title(){
        var faq_title = $('.faq_title');
        if (faq_title.length <= 0)
            return;
        faq_title.on('click', function(){
            $(this).toggleClass('open').parent().find('.faq_text').slideToggle();
        });
    }());

    (function index_pp_slide_wr(){
        var index_pp_slide_wr = $('.index_pp_slide_wr');
        if (index_pp_slide_wr.length <= 0)
            return;
        $('.index_pp_slide').bxSlider({
            slideWidth: 90,
            pager: false,
            minSlides: 1,
            maxSlides: 10,
            moveSlides: 1,
            slideMargin: 10,
            nextSelector: '#slider-next',
            prevSelector: '#slider-prev',
            nextText: '',
            prevText: ''
        });
    }());


});



    function mol_wr(){
        var mol_wr = $('.mol_wr');
        if (mol_wr.length <= 0)
            return;

    setTimeout(function(){

        (function mol_canv(){

        var mol_canv = document.getElementById("mol_canv");

        if (mol_canv.length <= 0)
            return;

        else{
            if (mol_canv.getContext){

                var context = mol_canv.getContext("2d"),
                    mol_canv_offset = $('#mol_canv').offset(),
                    canv_left = Math.round(mol_canv_offset.left),
                    interval = 3,
                    canv_top = Math.round(mol_canv_offset.top);

                context.beginPath();

                $('.lv_item').each(function() {

                    var $this = $(this),
                        this_offset = $this.offset(),
                        $this_parent = $this.parent(),
                        this_parent_offset = $this_parent.offset(),
                        tpos = Math.round(this_offset.top),
                        lpos = Math.round(this_offset.left),
                        ptpos = Math.round(this_parent_offset.top),
                        plpos = Math.round(this_parent_offset.left),
                        widitem = Math.round($this.width()/2),
                        heighitem = Math.round($this.height()/2),
                        widpitem = Math.round($this_parent.width()/2),
                        heighpitem = Math.round($this_parent.height()/2);

                    context.moveTo(lpos-canv_left+widitem, tpos-canv_top+heighitem);
                    context.lineTo(plpos-canv_left+widpitem, ptpos-canv_top+heighpitem);
                    context.lineWidth = .5;
                    context.strokeStyle = "rgba(249,163,86,1)";
                    context.stroke();

                });
            }
            else {
                alert('Ваш браузер не поддерживает canvas')
            }

            var start = 1;
            var item_count = $('.lv_item').length,
                $anim_circ = $('.anim_circ'),
                $anim_circ_img = $('.anim_circ_img'),
                anim_class = 'animated zoomIn',
                anim_class_end = 'animated zoomOut',
                tooltip = $('.tooltip_s');

                    var vivus_i = new Vivus('svg_line', {type: 'async', duration: 40});
                        vivus_i.stop().reset();

                        

            function interval_anim(){
                if (start == 1){
                    start = 0;
                    var cur_item = Math.floor(Math.random() * item_count) + 1,
                        $lv_item_eq = $('.lv_item').eq(cur_item),
                        $lv_item_eq_offset = $lv_item_eq.offset(),
                        lv_item_eq_img = $lv_item_eq.children('.mol_item').children('.mol_img'),
                        c_left =  Math.round($lv_item_eq_offset.left - canv_left + lv_item_eq_img.width()/2),
                        c_top =  Math.round($lv_item_eq_offset.top - canv_top + lv_item_eq_img.height()/2),
                        img =  lv_item_eq_img.attr('data-img'),
                        cost =  lv_item_eq_img.attr('data-cost');



                        $anim_circ_img.removeClass(anim_class+' '+anim_class_end);   

                        setTimeout(function(){
                            $anim_circ.css({
                                'left': c_left,
                                'top': c_top
                            });
                        },300);
                        setTimeout(function(){
                            $anim_circ_img.css({'background-image': 'url("'+img+'")'}).addClass(anim_class);
                            anim_canv();
                        },800);
                        setTimeout(function(){
                            tooltip.html(cost).addClass('animated tada');
                        },2000);
                        setTimeout(function(){
                            $anim_circ_img.addClass(anim_class_end);
                            tooltip.removeClass('animated tada');
                        },1000+interval*1000);
                        setTimeout(function(){
                            start = 1;
                        },2000+interval*1000);

                    function anim_canv(){

                        // var left_line = $lv_item_eq_offset.left - canv_left + lv_item_eq_img.width()/2,
                        //     top_line = $lv_item_eq_offset.top - canv_top + lv_item_eq_img.height()/2,
                        var    top_line_20 = c_top-50,
                            left_line_20 = c_left-50;

                        $('#line').attr({d: 'M'+c_left+','+c_top+' C'+left_line_20+','+top_line_20+' 330,330 335,335'});

                        setTimeout(function(){
                            $('#line').css('opacity', '1')
                            vivus_i.reset().play();
                        }, 100);
                        setTimeout(function () {
                            $('#line').animate({opacity: 0}, 100);
                        }, interval*1000);
                    };
                };

            };
            interval_anim();
            refreshIntervalId = setInterval(interval_anim, 3100+interval*1000);
        
        }

    }());


    }, 100);

    };  

$(window).on('load resize', function(){
    var refreshIntervalId;
    var d_width = $(window).width();
    if (d_width >= 768){
        clearInterval(refreshIntervalId);
        mol_wr();
    }
}); 



function initMap() {

    var j_string_obj = JSON.parse(j_string),
        lat,lng,info, pos_g, center_g;

      center_g = {lat: j_string_obj[0].lat, lng : j_string_obj[0].lng};

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 3,
        center: center_g
      });

    Array.prototype.forEach.call(j_string_obj, function(el, i){

        lat = el.lat;
        lng = el.lng;
        info = el.user;
        pos_g = {lat: lat, lng: lng};

        var infowindow = new google.maps.InfoWindow({
            content: info
        });

        var marker = new google.maps.Marker({
            position: pos_g,
            map: map,
            title: 'Hello World!'
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

    });

}