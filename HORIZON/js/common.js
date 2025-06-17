
$(function(){


	Waves.init();
	Waves.attach('.button');


	$('.faq-list .item .question').on('click', function(){
		$(this).toggleClass('open');
		$(this).next().slideToggle();;
	});

	$('.area-tab > ul > li > span').on('click', function(){
		if(getNowDevice() == 'sp') {
			$(this).toggleClass('open');
			$(this).next().slideToggle();
		}
	});

	actionPcEveryOnceTime.area = function(){
		$('.area-tab > ul > li ul').removeAttr('style');
	}
	ActionSingle('area');


	$('.sp-menu a').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$('.global-navi').toggleClass('show');
	});


	$('.global-navi .accordion > a').on('click', function(e){
		if(getNowDevice() == 'pc') return;
		e.preventDefault();
		$(this).parent().toggleClass('open');
		$(this).next().slideToggle();
	});

	$('.global-navi .accordion.pulldownservice > a').on('click', function(e){
		e.preventDefault();
		$(this).parent().toggleClass('open');
		$(this).next().slideToggle();
	});

	$('.anchor-link').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('href');
		var d = 160;
		if(getNowDevice() == 'sp') d = 60;
		var pos = $(target).offset().top - d;
		$('html, body').animate({scrollTop: pos + 'px'}, {duration: 500});
	});
	

	if($(this).scrollTop() > 0) {
		$('#globalHeader').addClass('scrolled');
	}
	else {
		$('#globalHeader').removeClass('scrolled');
	}

	var topBtn = $('.to-top');
	topBtn.hide();
	//スクロールが100に達したらボタン表示
	$(window).scroll(function () {
		if($(this).scrollTop() > 0) {
			$('#globalHeader, html').addClass('scrolled');
		}
		else {
			$('#globalHeader, html').removeClass('scrolled');
		}
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	//スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});


	$(document).on('click','.ceec_advisor_toggle-open', function(){
	  $(this).slideToggle();
	  $(this).prev('.ceec_advisor_text_table').slideToggle();
	});
	$(document).on('click','.ceec_advisor_toggle-close', function(){
	  $(this).parent('.ceec_advisor_text_table').slideToggle();
	  $(this).parent().next('.ceec_advisor_toggle-open').slideToggle();
	});

});


$(function(){
  var pagetop = $('.box_hide');
  pagetop.hide();
  $(window).scroll(function () {
     if ($(this).scrollTop() > 400) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
});