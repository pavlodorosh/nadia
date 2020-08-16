$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  }) 
//   $(document).ready(function(){
//     $(".dropdown").hover(            
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
//             $(this).toggleClass('open');        
//         },
//         function() {
//             $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
//             $(this).toggleClass('open');       
//         }
//     );
// });
$(document).ready(function(){
  $(".dropdown a").click(function() {
    // $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideToggle("400");
    $(this).next('div').slideToggle()
    $(this).toggleClass('open'); 
  });
});
$(document).ready(function () {
 
  var show = true;
  var countbox = ".total";
  $(window).on("scroll load resize", function () {
      if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
      var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
      var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
      var w_height = $(window).height(); // Высота окна браузера
      var d_height = $(document).height(); // Высота всего документа
      var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
      if (w_top + 800 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
          $('.number').css('opacity', '1');
          $('.number').spincrement({
              thousandSeparator: "",
              duration: 1600
          });
           
          show = false;
      }
  });

});
$(window).scroll(function(){
  if ($(window).scrollTop() >= 300) {
      $('.fix.info').addClass('d-none');
      $('.logo').addClass('fix');
      $('header').addClass('fix');
  }
  else {
      $('.fix.info').removeClass('d-none');
      $('.logo').removeClass('fix');
      $('header').removeClass('fix');
  }
});
$('.carousel').carousel({
  interval: 3000
})

$(function() {
	var $a = $(".tabs li");
	$a.click(function() {
		$a.removeClass("active");
		$(this).addClass("active");
	});
});

