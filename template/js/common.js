/**
 * JavaScript
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

$(document).ready(function() {

	$(".auth_buttons").click(function() {
		$(this).next().slideToggle();
	});
	$(".main_mnu_button").click(function() {
		$(".main_mnu ul").slideToggle();
	});


	// Pop-up FancyBox
	// Dokumentace: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	$(".fancybox").fancybox();

	// Slider Carousel
	// Dokumentace: http://owlgraphic.com/owlcarousel/
	var owl = $(".carousel");
	owl.owlCarousel({
		items : 2,
		autoHeight : true,
		loop:true,
	});
	owl.on(/*"mousewheel"*/ ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev");
		} else {
			owl.trigger("owl.next");
		}
		e.preventDefault();
	});
	$(".next_button").click(function() {
		owl.trigger("owl.next");
	});
	$(".prev_button").click(function() {
		owl.trigger("owl.prev");
	});
	
	// Ajax odesilani emaila FORM
	// Dokumentace: http://api.jquery.com/jquery.ajax/
	$("#callback").submit(function() {
		$.ajax({
			type: "GET",
			url: "mail.php",
			data: $("#callback").serialize()
		}).done(function() {
			alert("Děkujeme!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

});

function win(){
    x=prompt('Введите пароль:', 'Пароль');
    if (x==pass)
        document.write('Здравствуйте, <b>авторизированный</b> пользователь!');
    else
        document.write('Вы ввели неправильный пароль.');
}