
/*WOW-JS
***************************************************/
var wow = new WOW({
	boxClass:     'wow',        // default
	animateClass: 'animated',  // default
	offset:       0,           // default
	mobile:       false,      // default
	live:         true        // default
});

wow.init();


/*INIT
***************************************************/
init  = function(){

	var nav_active = document.getElementById("about").setAttribute("class", "nav-active"), //default link
		message = document.getElementById('sand-message'), //form
	 	nav = document.getElementById("nav"), //id=nav
	 	links = nav.getElementsByTagName("a"), //all links in id=nav
	 	line = document.getElementById("line"),//thanks line
	 	krest = document.getElementById("krest"),//thanks krest
	 	knowledge_title = document.getElementById("knowledge-title");//menu knowledge

	 	//MENU KNOWLEDGE
	 	var knowledge = knowledge_title.querySelectorAll('li');
	 	for (var i = 0; i < knowledge.length; i++) {
	 		knowledge[i].addEventListener("click", menuKnowledge);
	 	}



 		//KNOWLEDGE
 		var request = new XMLHttpRequest();
 		var params = 'knowledge=all';
 		var knowledgeBlock = document.getElementById("knowledge");
 		var div;

 		request.onreadystatechange = function() {

 			if(request.readyState == 4 && request.status == 200) {


 				var answer = request.responseText;
 				var newArr = answer.split(' ');

 				for (var i = 0; i < newArr.length-1; i++) {
 					div = document.createElement('span');
 					knowledgeBlock.appendChild(div).innerHTML = newArr[i];
 				}

 			}
 		}


 		request.open("POST", "knowledge.php", true);
 		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
 		request.send(params);
 		/********************************************************************/

//click all menu links
for (var i = 0; i <  links.length; i++) {
	links[i].addEventListener("click", myMenu);
}


	message.addEventListener("submit", ajaxPost);//send form
	line.addEventListener("click", closeLine);//thanks line
	krest.addEventListener("click", closeThanks);//thanks krest
	window.addEventListener('scroll', scrollMenu);//scroll menu


}


/*MENU KNOWLEDGE
*******************************************************************/
function menuKnowledge() {
	var	knowledge_title = document.getElementById("knowledge-title"),
	knowledge = knowledge_title.querySelectorAll('li');

	for (var i = 0; i < knowledge.length; i++) {
		knowledge[i].removeAttribute("class", "active-knowledge");
	}

	this.setAttribute("class", "active-knowledge");


	var knowledgeBlock = document.getElementById("knowledge");
	var div;
	var params = "knowledge="+this.getAttribute("id");
	var request = new XMLHttpRequest();



	request.onreadystatechange = function() {

		if(request.readyState == 4 && request.status == 200) {
			knowledgeBlock.innerHTML = "";
			var answer = request.responseText;
			var newArr = answer.split(' ');

			for (var i = 0; i < newArr.length-1; i++) {
				div = document.createElement('span');
				knowledgeBlock.appendChild(div).innerHTML = newArr[i];
			}

		}
	}


	request.open("POST", "knowledge.php", true);
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	request.send(params);


}


/*MENU
*******************************************************************/
function myMenu(e){

	e.preventDefault();

	var nav = document.getElementById("nav"); //id=nav
	var links = nav.getElementsByTagName("a"); //all links in id=nav

	for (var i = 0; i <  links.length; i++) {
		links[i].removeAttribute("class", "nav-active");
	}

	this.setAttribute("class", "nav-active");


	var section = document.getElementsByTagName("section");


	for (var i = 0; i <  section.length; i++) {
		section[i].style.display = "none";
	}


	var block = this.getAttribute("id");
	var sectionClass = document.getElementsByClassName(block);
	sectionClass[0].style.display = "block";
}





/*SLIDER
******************************************************************/
var items = document.querySelectorAll('.item'),
right = document.querySelector('#right'),
left = document.querySelector('#left'),
have = document.querySelector('.have');
var j = 0;






for (var i = 0; i < items.length; i++) {
	var span = document.createElement('span');
	span.classList.add('circle');
	span.setAttribute('data-chet', i);
	span.addEventListener('click', prev);
	have.appendChild(span);
}

var haveCol = have.querySelectorAll('span');

haveCol[0].classList.add('circle-active');



function prev(){

	for (var i = 0; i < haveCol.length; i++) {
		haveCol[i].classList.remove('circle-active');
	}

	this.classList.add('circle-active');
	var chet = this.getAttribute('data-chet');

	for (var i = 0; i < items.length; i++) {
		items[i].classList.remove('item-active');
	}

	items[chet].classList.add('item-active');
	j = chet;
}







function leftClick() {
	haveCol[j].classList.remove('circle-active');
	items[j].classList.remove('item-active');
	j--;

	if(j < 0) {
		j = items.length-1;
	}

	haveCol[j].classList.add('circle-active');
	items[j].classList.add('item-active');
};

function rightClick() {
	haveCol[j].classList.remove('circle-active');
	items[j].classList.remove('item-active');
	j++;

	if(j >= items.length) {
		j = 0;
	}

	haveCol[j].classList.add('circle-active');
	items[j].classList.add('item-active');

}



right.addEventListener('click', rightClick);
left.addEventListener('click', leftClick);

setInterval(function() {
	rightClick();
}, 10000)











/*****************************************************************/






/*SEND MESSAGE
*******************************************************************/
function ajaxPost(e) {

	e.preventDefault();

	var inp_firstname = document.querySelector('input[name=firstname]'),
	inp_email = document.querySelector('input[name=email]'),
	inp_message = document.querySelector('textarea[name=message]');

	var params = 'firstname=' + inp_firstname.value + '&email=' + inp_email.value +
	'&message='+ inp_message.value;

	var request = new XMLHttpRequest();

	request.onreadystatechange = function() {
		if(request.readyState == 4 && request.status == 200) {



				inp_firstname.value = '';
				inp_email.value = '';
				inp_message.value = '';

				document.querySelector('body').style.overflowY = "hidden";

				//DIV THANKS
				var thanks = document.getElementById('thanks');
				thanks.style.display = "block";
				line.style.display = "block";

				/***************************************************/


		}
	}


	request.open("POST", "message.php", true);
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	request.send(params);
}


/*CLOSE THANKS ON LINE
********************************************************************/
function closeLine(){


	var line = document.getElementById("line"),
	thanks = document.getElementById("thanks");

	line.style.display = "none";
	thanks.style.display = "none";
	document.querySelector('body').style.overflowY = "scroll";
}

/*CLOSE THANKS ON KREST
********************************************************************/
function closeThanks(){

	var line = document.getElementById("line"),
	thanks = document.getElementById("thanks");

	line.style.display = "none";
	thanks.style.display = "none";
	document.querySelector('body').style.overflowY = "scroll";
}

/*SCROLL MENU
********************************************************************/
function scrollMenu () {
	var scrolled = document.documentElement.scrollTop;
	var heightHeader = document.getElementById('header').offsetHeight;
	var menu = document.getElementById("menu");

	if(scrolled >= heightHeader){

		menu.setAttribute("class", "menuScroll");

	} else {
		menu.removeAttribute("class", "menuScroll");
	}
}






window.onload = init;
