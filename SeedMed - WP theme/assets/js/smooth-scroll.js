jQuery(function($) {
  $.scrollTo(0);

  $('#link1').click(function() {
    $.scrollTo($('#logo1'), 1000);
    console.log("dsad")
  });
  $('#link2').click(function() {
    $.scrollTo($('#logo2'), 1500);
  });
  $('#link3').click(function() {
    $.scrollTo($('#logo3'), 2000);
  });
  $('#link4').click(function() {
    $.scrollTo($('#logo4'), 2500);
  });
  $('#link5').click(function() {
    $.scrollTo($('#logo5'), 3000);
  });
  $('#link6').click(function() {
    $.scrollTo($('#logo6'), 3500);
  });
  $('#link7').click(function() {
    $.scrollTo($('#logo7'), 4000);
  });
  $('#link8').click(function() {
    $.scrollTo($('#logo8'), 4500);
  });
  $('#link9').click(function() {
    $.scrollTo($('#logo9'), 5500);
  });

  $('.scroll').click(function() {
    $.scrollTo($('#link1'), 2000);
  });

});

$(window).scroll(function() {
  if ($(this).scrollTop() > 300) $('.scroll').fadeIn();
  else $('.scroll').fadeOut();
});
