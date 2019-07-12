$(document).ready(function () {
    svg4everybody({});
    initMobileMenu();
    initStickyMenu();

    AOS.init({
        duration: 1200
    });

    $.reject({
        reject: { msie: true, edge: true },
        display: ['firefox', 'chrome', 'opera']
    }); 
/*
    $(".main-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function (data) {
            $('input[type=number]').val('');
            window.location = 'http://1001resnitsa.ru/thanks.html';
        });
        return false;
    });

 $("#header-form").submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function (data) {
            $('input[type=number]').val('');
            window.location = 'http://1001resnitsa.ru/thanks.html';
        });
        return false;
    });
*/
	$(".main-form").submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "wp-content/themes/beauty/mail.php",
			data: $(this).serialize()
		}).done(
			function(data){
			$('input[type=number]').val('');
			var currentLocation = window.location;	
			$(window).attr('location', currentLocation + '/thanks');	
		});
		return false;
	});
	
	$(".course__info a.course__btn").click(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "wp-content/themes/beauty/mail.php",
			data: $(this).serialize()
		}).done(
			function(data){
			$('div.course__title').text();
			var currentLocation = window.location;	
			$(window).attr('location', currentLocation + '/thanks');		
		});
		return false;
	});
		
    function initMobileMenu() {
        $('.nav__mobile-btn').click(function () {
            $(this).toggleClass('active');
            if ($('.mobile-menu').is(":visible")) {
                $('.mobile-menu').fadeOut(200);
                $('body').css('overflow', 'initial');
                $('body').css('overflow-x', 'hidden');
            } else {
                $('.mobile-menu').fadeIn(200);
                $('body').css('overflow', 'hidden');
            }
            $('.nav__phone').toggleClass('menu-fix');
        });
    }

    function setOpacity() {
        var sortedItems = $('.slide-wrap li:visible').sort(function (a, b) {
            return $(a).position().left > $(b).position().left
        });

        $(sortedItems[0]).css('opacity', 0.3);
        $(sortedItems[4]).css('opacity', 0.3);
        $(sortedItems[2]).css('opacity', 1);
        $(sortedItems[1]).css('opacity', 0.7);
        $(sortedItems[3]).css('opacity', 0.7);
    }

    setInterval(setOpacity, 60);

    if ($(window).scrollTop() > 0) {
        $('.nav__wrapper').addClass('is-scroll');
    }
    function initStickyMenu() {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('.nav__wrapper').addClass('is-scroll');
            } else {
                $('.nav__wrapper').removeClass('is-scroll');
            }
        });
    }

    $('.extension__read-more').click(function () {
        $('.extension__desc').css('max-height','100%');
        $('.extension__desc-overlay').css('display','none');
        $('.extension__read-more').css('display', 'none');
    });

    $('.slide-wrap').RollingSlider({
        showArea: "#slider",
        prev: "#jprev",
        next: "#jnext",
        moveSpeed: 400,
        autoPlay: true,
        stay: 5000
    });

    initVolumeSlider();

    function initVolumeSlider() {
        var inProgress = false;
        var intervalId;
        initAuto();

        $('.volume-slider__dots button').click(function(){
            if(!inProgress) {
                activateSlide($(this).data('v-slider'));
                clearInterval(intervalId);
            }
        });

        $('.volume-slider__arrow--prev').click(function () {
            if (!inProgress) {
                activateSlide(getPrev());
                clearInterval(intervalId);
            }
        });

        $('.volume-slider__arrow--next').click(function () {
            if (!inProgress) {
                activateSlide(getNext());
                clearInterval(intervalId);
            }
        });

        function getPrev() {
            var prev = (getCurrent() - 1);
            if(prev < 0) {
                prev = getTotal() + prev;
            }
            return prev;
        }

        function initAuto() {
            intervalId = setInterval(function () {
                activateSlide(getNext());
            }, 5000);
        }

        function getNext() {
            return (getCurrent() + 1) % getTotal();
        }

        function getCurrent() {
            return parseInt($('.volume-slider__dots .active').data('v-slider'));
        }

        function getTotal() {
            return $('.volume-slider__dots button').length;
        }

        function activateSlide(slide) {
            inProgress = true;
            $('.volume-slider__dots .active').removeClass('active');
            $('.volume-slider__dots [data-v-slider=' + slide + ']').addClass('active');

            $('.volume-slider__info--active').fadeOut(200, function () {
                $(this).removeClass('volume-slider__info--active');
                $('.volume-slider__info[data-v-slider=' + slide + ']').fadeIn(200).addClass('volume-slider__info--active');
            });

            $('.volume-slider__image--active').fadeOut(200, function () {
                $(this).removeClass('volume-slider__image--active')
                $('.volume-slider__image[data-v-slider=' + slide + ']').fadeIn(200).addClass('volume-slider__image--active');
                inProgress = false;
            });
        }
    }

    var tok = '7419202727.b5afa4f.9d920fdf8d89407e8ac4cfd0cbe7b8b6', // access Token
        userid = 7419202727, // ID пользователя, можно выкопать в исходном HTML, можно использовать спец. сервисы либо просто смотрите следующий пример :)
        kolichestvo = 7; // ну это понятно - сколько фоток хотим вывести

    $.ajax({
        url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent',
        dataType: 'jsonp',
        type: 'GET',
        data: { access_token: tok, count: kolichestvo }, // передаем параметры, которые мы указывали выше
        success: function (result) {
            //console.log(result);
            for (x in result.data) {
                $('.insta-slider').append('<div class="slick-slide"><div class="insta-frame"><img src="' + result.data[x].images.low_resolution.url + '"></div></div>'); // result.data[x].images.low_resolution.url - это URL картинки среднего разрешения, 306х306
                // result.data[x].images.thumbnail.url - URL картинки 150х150
                // result.data[x].images.standard_resolution.url - URL картинки 612х612
                // result.data[x].link - URL страницы данного поста в Инстаграм 
            }
            $('.insta-slider').slick({
                dots: false,
                infinite: true,
                autoplay: true,
                speed: 300,
                focusOnSelect: false,
                arrows: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-arrow slick-prev"></button>',
                nextArrow: '<button type="button" class="slick-arrow slick-next"></button>',
                responsive: [
                    {
                        breakpoint: 1800,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 1500,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 890,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 590,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 350,
                        settings: {
                            centerMode: true,
                            centerPadding: '25px',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 320,
                        settings: {
                            centerMode: true,
                            centerPadding: '65px',
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        },
        error: function (result) {
            console.log(result); // пишем в консоль об ошибках
        }
    });

    $('.modalBtn').on('click', openModal);
    $('.closeBtn').on('click', closeModal);
    window.addEventListener('click', outsideClick);
    function openModal() {
        $('.modal').css('display', 'block');
        $('body').css('overflow', 'hidden');
    }
    function closeModal() {
        $('.modal').css('display', 'none');
        $('body').css('overflow', 'initial');
        $('body').css('overflow-x', 'hidden');
    }
    function outsideClick(e) {
        if (e.target == $('.modal')) {
            $('.modal').css('display', 'none');
            $('body').css('overflow', 'initial');
            $('body').css('overflow-x', 'hidden');
        }
    }

    $('.header__video-btn').on('click', openModalVideo);
    $('.closeBtn').on('click', closeModalVideo);
    window.addEventListener('click', outsideClickVideo);
    function openModalVideo() {
        $('.modal-video').css('display', 'block');
        $("iframe").attr("src", "http://www.youtube.com/embed/XSQQUqJQjUw?autoplay=1");
        $('body').css('overflow', 'hidden');
    }
    function closeModalVideo() {
        $('.modal-video').css('display', 'none');
        $("iframe").attr("src", "http://www.youtube.com/embed/XSQQUqJQjUw?autoplay=0");
        $('body').css('overflow', 'initial');
        $('body').css('overflow-x', 'hidden');
    }
    function outsideClickVideo(e) {
        if (e.target == $('.modal-video')) {
            $('.modal-video').css('display', 'none');
            $("iframe").attr("src", "http://www.youtube.com/embed/XSQQUqJQjUw?autoplay=0");
            $('body').css('overflow', 'initial');
            $('body').css('overflow-x', 'hidden');
        }
    }

    function new_map( $el ) {
 
	// var
	var $markers = $el.find('.marker');
 
 
	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
 
 
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
 
 
	// add a markers reference
	map.markers = [];
 
 
	// add markers
	$markers.each(function(){
 
    	add_marker( $(this), map );
 
	});
 
 
	// center map
	center_map( map );
 
 
	// return
	return map;
 
}
 
/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/
 
function add_marker( $marker, map ) {
 
	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
 
	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});
 
	// add to array
	map.markers.push( marker );
 
	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});
 
		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {
 
			infowindow.open( map, marker );
 
		});
	}
 
}
 
/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/
 
function center_map( map ) {
 
	// vars
	var bounds = new google.maps.LatLngBounds();
 
	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){
 
		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
 
		bounds.extend( latlng );
 
	});
 
	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}
 
}
 
/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;
 
$(document).ready(function(){
 
	$('.acf-map').each(function(){
 
		// create map
		map = new_map( $(this) );
 
	});
 
});
});