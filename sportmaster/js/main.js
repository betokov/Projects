$('document').ready(function() {
	var owl = $('.owl-carousel2'),
	owl2 = $('.owl-carousel3');

	owl.owlCarousel({
		loop:true,
		margin:0,
		nav: false,
		dots: false,
		responsive:{
			0:{
				items:1
			},

			992: {
				items: 3
			}
		}
	});

	$(".experts-recomendate .owl-next").click(function(){
		owl.trigger("next.owl.carousel");
	});
	$(".experts-recomendate .owl-prev").click(function(){
		owl.trigger("prev.owl.carousel");
	});

	owl2.owlCarousel({
		loop:true,
		margin:0,
		nav: false,
		dots: false,
		responsive:{
			0:{
				items:1
			},

			768: {
				items: 5
			}
		}
	});

	$(".technology__column1 .owl-next").click(function(){
		owl2.trigger("next.owl.carousel");
	});

});

window.onload = function () {
	let tabsNames = document.querySelectorAll('.technology-image');

	tabsNames.forEach(function(item, i) {
		item.addEventListener('click', tab);
	});

	function tab() {
		let idName = this.getAttribute('id'),
		tabsItem = document.querySelectorAll('.tabs__item');

		tabsNames.forEach(function(item, i) {
			if(item.classList.contains('technology-image_current')) {
				item.classList.remove('technology-image_current')
			}
		});

		this.classList.add('technology-image_current');


		tabsItem.forEach(function (item, i) {
			if(item.classList.contains('tabs__item_current')) {
				item.classList.remove('tabs__item_current');
			}

			if(item.classList.contains(idName)) {
				item.classList.add('tabs__item_current');	
			}
		});	

	}
}



