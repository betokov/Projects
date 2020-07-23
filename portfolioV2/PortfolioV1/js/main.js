$(function(){


//SCROLL MENU
$('.js-nav a').on("click", function(e){

	e.preventDefault();

	var $this = $(this),
	name = $($this).attr("href");
	console.log(name);
	var upset = $(name).offset().top+2;

	$("html, body").animate({

		scrollTop : upset
	}, 1500);


});//END CLICK


//MENU FIXED

var headerH = $(".header").innerHeight(),
navH = $('.js-nav').innerHeight();


$(document).on("scroll", function(){

	var scrollTop = $(this).scrollTop();

	if(scrollTop > headerH){
		$(".header-top").addClass("fixed");
		$('.js-header').css("padding-top", navH*2);
	}
	else{
		$(".header-top").removeClass("fixed");
		$('.js-header').removeAttr("style");

	}

});//END SCROLL



$('.js-burger').on("click", function(e){

	e.preventDefault();

	$(this).toggleClass('burger').toggleClass('krest');
	$('.js-nav').slideToggle();

});//end click

$('.js-email2').submit(function(){

	var $this = $(this),

	form_data = $this.serialize();

	$.ajax({

		type: "POST",
		url: "/message.php",
		data: form_data,
		success: function(form){
			$('input[type="text"]').val(""),
			$('input[type="email"]').val(""),
			$('textarea').val(""),
			$('.js-sendform').hide();
			$('.js-window').fadeIn()
		}

	});

	return false;

});





//BUTTON "WRITE"
$('.js-btn').on("click", function(e){

	e.preventDefault();

	$('body').prepend('<div class="fon js-fon"></div>').css("overflow-y", "hidden");
	$('.js-sendform').fadeIn();

});//END CLICK


//CONTACTS
$('.js-email').submit(function(){

	$('body').prepend('<div class="fon js-fon"></div>').css("overflow-y", "hidden");


	var $this = $(this),

	form_data = $this.serialize();

	$.ajax({

		type: "POST",
		url: "/message.php",
		data: form_data,
		success: function(form){
			$('input[type="text"]').val(""),
			$('input[type="email"]').val(""),
			$('textarea').val(""),
			$('.js-window').fadeIn()
		}

	});

	return false;

});

	//Close form
	$('.js-close').on("click", function(e){
		e.preventDefault();
		$(".js-fon").remove();
		$(".js-window").fadeOut();
		$('body').removeAttr("style");
		$('.js-sendform').fadeOut();
	});//END CLICK

	$('body').on('click', '.js-fon', function(){
		$(".js-fon").remove();
		$(".js-window").fadeOut();
		$('body').removeAttr("style");
		$('.js-sendform').fadeOut();
	});


	/*СТЕРАЮЩАЯСЯ НАДПИСЬ*/
	var typed = new Typed('.js-typed', {
		strings: ["Welcome To My Blog!"],
		typeSpeed: 50,
		showCursor: true
	});

});//END READY