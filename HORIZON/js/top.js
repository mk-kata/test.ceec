
$(function(){

	$('.c-box14 .area-tab a').on('click', function(e){
		e.preventDefault();
		var area = $(this).attr('data-area');
		$('.c-box14 .information-box .calendar .calendar-box').removeClass('show');
		$('.c-box14 .information-box .calendar .calendar-box[data-area="' + area + '"]').addClass('show');

		$('.c-box14 .detail-information .detail-information-inner').removeClass('show');
		$('.c-box14 .detail-information .detail-information-inner[data-area="' + area + '"]').addClass('show');
	});



});