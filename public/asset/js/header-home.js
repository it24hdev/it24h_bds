$(document).ready(function () {


	function isOnScreen(elem) {
        if( elem.length == 0 ) {
            return;
        }
        var $window = jQuery(window)
        var viewport_top = $window.scrollTop() //vị trí đang scroll
        var viewport_height = $window.height()  // chiều cao màn hình
        var viewport_bottom = viewport_top + viewport_height
        var $elem = jQuery(elem)
        var top = $elem.offset().top
        var height = $elem.height()
        var bottom = top + height

        return (top >= viewport_top && top < viewport_bottom) ||
            (bottom > viewport_top && bottom <= viewport_bottom) ||
            (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
    }


	function runOnScroll() {

		if(jQuery(window).scrollTop() >200 && ($(".header_bar").hasClass("master_header_sticky") == false)){
			$(".header_bar").addClass("master_header_sticky");
			$(".header_wrapper").addClass("customnav");
			document.getElementById("logo_image").src = "https://wpresidence.net/wp-content/uploads/2019/11/logo.png";
		}
		if(jQuery(window).scrollTop() <200 && ($(".header_bar").hasClass("master_header_sticky") == true)){
			$(".header_bar").removeClass("master_header_sticky");
			$(".header_wrapper").removeClass("customnav");
			document.getElementById("logo_image").src = "https://wpresidence.net/wp-content/uploads/2020/07/transparentopt.png";
		}
	}
	$(window).scroll(runOnScroll);

	 $(".adv_search_tab_item").on("click",function(){
        var item = $(".adv_search_tab_item");
        item.removeClass('active');
        $(this).addClass('active');
        var tabattr = $(this).attr("data");
        var tab = $(".tab-pane");
        tab.removeClass('active');
        $(tabattr).addClass('active');
    });

	let min = 10;
	let max = 100;

	const calcLeftPosition = value => 100 / (100 - 10) *  (value - 10);

	$('#rangeMin').on('input', function(e) {
	  const newValue = parseInt(e.target.value);
	  if (newValue > max) return;
	  min = newValue;
	  $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
	  $('#min').html(newValue);
	  $('#line').css({
	    'left': calcLeftPosition(newValue) + '%',
	    'right': (100 - calcLeftPosition(max)) + '%'
	  });
	});

	$('#rangeMax').on('input', function(e) {
	  const newValue = parseInt(e.target.value);
	  if (newValue < min) return;
	  max = newValue;
	  $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
	  $('#max').html(newValue);
	  $('#line').css({
	    'left': calcLeftPosition(min) + '%',
	    'right': (100 - calcLeftPosition(newValue)) + '%'
	  });
	});
});