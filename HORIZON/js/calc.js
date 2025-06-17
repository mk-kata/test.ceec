
$(function(){

	$('.c-box02 .list .item .item-box, .c-box-type01 .list .item .item-title').matchHeight();


	var pos = $('.c-box02, .c-box-type01').offset().top;


	actionPcEveryTime.act = function(){
		pos = $('.c-box02, .c-box-type01').offset().top;
	}
	ActionSingle('act');

	$(window).scroll(function(){
		if($(document).scrollTop() > pos) {
			$('.index-btn').addClass('show');
		}
		else {
			$('.index-btn').removeClass('show');
		}
	});

	$('.index-btn > a').on('click', function(e){
		e.preventDefault();
		$('.index-btn .content').toggleClass('show');
		$('.index-btn > a').toggleClass('show');
	});

});