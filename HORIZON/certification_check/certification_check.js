jQuery(function($){

$(document).on('click','.ccqitem', function(){

  $(this).siblings().css('background-color','#FFF');
  $(this).siblings().children('span').css('color','#2b2b8a');
  $(this).css('background-color','#2b2b8a');
  $(this).children('span').css('color','#FFF');

  let clickNum = $(this).attr('id');
  let baseId = '#certification_check_content_';
  let ccList = ['bels','casbee','dbj'];

  function displayNext(current){
    $(baseId+'result').css('display','none');
    let next = current + 1;
    $(baseId+'question_'+next).css('display','block');
    let speed = 350;
    let position = $(baseId+'question_'+current).height()/2 + $(baseId+'question_'+current).offset().top;
    $($.support.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
    return false;
  }

  function displayResult(type){
    $.each(ccList, function(index,value) {
      $(baseId+'result_'+value).css('display','none');
    });
    $(baseId+'result').css('display','block');
    $(baseId+'result_'+type).css('display','block');
    let speed = 350;
    let position = $(baseId+'result').offset().top - 150;
    $($.support.safari ? 'body' : 'html').animate({scrollTop:position}, speed, 'swing');
    return false;
  }

  function rePlay(current){
    $.each(ccList, function(index,value) {
      $(baseId+'result_'+value).css('display','none');
    });
    let totalNum = 5;
    for (let i = totalNum; i >= current + 1; i--){
      $(baseId+'question_'+i).css('display','none');
    }
  }

  switch (clickNum) {
    case 'C_1-1':
      if ($(baseId+'question_2').css('display') == 'block') {
        rePlay(1);
        displayNext(1);
      } else {
        displayNext(1);
      }
    break;
    case 'C_1-2':
      if ($(baseId+'question_2').css('display') == 'block') {
        rePlay(1);
        displayResult('bels');
      } else {
        displayResult('bels');
      }
    break;
    case 'C_2-1':
      if ($(baseId+'question_3').css('display') == 'block') {
        rePlay(2);
        displayNext(2);
      } else {
        displayNext(2);
      }
    break;
    case 'C_2-2':
      if ($(baseId+'question_3').css('display') == 'block') {
        rePlay(2);
        displayResult('bels');
      } else {
        displayResult('bels');
      }
    break;
    case 'C_3-1':
      if ($(baseId+'question_4').css('display') == 'block') {
        rePlay(3);
        displayNext(3);
      } else {
        displayNext(3);
      }
    break;
    case 'C_3-2':
      if ($(baseId+'question_4').css('display') == 'block') {
        rePlay(3);
        displayResult('dbj');
      } else {
        displayResult('dbj');
      }
    break;
    case 'C_4-1':
      if ($(baseId+'question_5').css('display') == 'block') {
        rePlay(4);
        displayNext(4);
      } else {
        displayNext(4);
      }
    break;
    case 'C_4-2':
      if ($(baseId+'question_5').css('display') == 'block') {
        rePlay(4);
        displayResult('dbj');
      } else {
        displayResult('dbj');
      }
    break;
    case 'C_5-1':
      displayResult('casbee');
    break;
    case 'C_5-2':
      displayResult('dbj');
    break;
    default:
      $(baseId+'question').text("データが不正です。ページを再読み込みしてお試しください。");
    break;
  };

});

$(document).on('click','#certification_check_content_result_reset', function(){
  $('#certification_check_content_result_box div').css('display','none');
  $('#certification_check_content_result').css('display','none');
  for (let i = 2; i < 6; i++){
    $('#certification_check_content_question_'+i).css('display','none');
    console.log(i);
  }
  $('.ccqitem').css('background-color','#FFF');
  $('.ccqitem').children('span').css('color','#2b2b8a');
  $('html, body').animate({ scrollTop: 0 }, 350);
});

});