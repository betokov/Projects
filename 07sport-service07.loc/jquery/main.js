$(document).ready(function(){
/*
BLOCK KARUSEL
*/
var owl = $(".slider");

owl.owlCarousel({

        loop:true,//Зацикливаем слайдер
        nav:true, //Навигация включена
        autoplay:true,//автозапуск
        smartSpeed:1000,//Время движения
        margin:0,    
        navText:['<span class="slider-left"></span>','<span class="slider-right"></span>'],
        responsive:{
          0:{
            items:1
        },       
        1000:{
            items:1
        },
        1248:{
            items:1
        }
    }

});

/*BLOCK KORZINA FIXED*/

var headerH = $('.js-header').height(),
navH = $('.js-nav-container').innerHeight();

$(document).on("scroll", function(){
var documentScroll =  $(this).scrollTop();
if(documentScroll > headerH){
    $('.js-nav-container').addClass('fixed');
    // $('.js-header').css('paddingTop', navH);
}
else{
            $('.js-nav-container').removeClass('fixed');
            $('.js-header').removeAttr('style');
        }

});

/* BLOCK MENU SLIDETOGGLE*/

$('.js-down2-first').on("click", function(e){
    e.preventDefault();
    var $this = $(this),
        answer = $this.attr('href');
    
    if(!$this.hasClass('active')){
        $('.js-faq-content').slideUp();
        $('.js-faq-title').removeClass('active');
    }
    
    $("." + answer).slideToggle();
    $this.toggleClass('active');

});

/*KORZINA*/

$('.add').on("click", function(e){
e.preventDefault();
var $this = $(this),
    answer = $this.attr('href');
    price = $this.attr('price'),
    allprice = $('.b').html(),
    newcount = $('.a').html(),
    // console.log(price + " " + allprice);
    newprice = Number(price) + Number(allprice);
    newcount++;
    $('.b').html(newprice);
    $('.a').html(newcount);
    $this.css("display", "none");
    $("." + answer).css("display", "block");
});

$('.remove').on("click", function(e){
e.preventDefault();

    var $this = $(this),
    answer = $this.attr('href'),
    price = $(this).attr('price'),
    allprice = $('.b').html(),
    newcount = $('.a').html();
    // console.log(price + " " + allprice);
    if(newcount > 0){
     var newprice = Number(allprice) - Number(price);
    newcount--;
    $('.b').html(newprice);
    $('.a').html(newcount);
    $this.css("display", "none");
    $("." + answer).css("display", "block");
 }
});


});//END ready

