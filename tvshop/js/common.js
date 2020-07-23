window.onload = function() {


	let cartGoods = document.querySelector('.js-cart-goods'),
	blackBack = document.querySelector('.black-back'),
	close = document.querySelector('.close'),
	goobsBlock = document.querySelector('.js-goods_block'),
	cart = document.querySelector('.js-cart'),
	countCart = document.querySelector('.js-cart_nav');



	fetch('http://localhost:3000/goods')
	.then(response => response.json())
	.then(json => {


		for (let i = 0; i < 8; i++) {

			let div = document.createElement('div');
			div.className = 'col-12 col-sm-2 col-md-3';

			div.innerHTML = `
			<div class="card">
			<img src="${json[i].url}" alt="${json[i].title}">
			<div class="card_title">
			${json[i].title}
			</div>
			<div class="card_price js-card_price" data-price="${json[i].price}">
			${json[i].price} руб.
			</div>
			<button class="btn js-btn">Добавить в корзину</button>
			</div>
			`;

			goobsBlock.appendChild(div);

		}

		let btns = goobsBlock.querySelectorAll('.js-btn');
		btns.forEach((item) => item.addEventListener('click', addToCart));

	});





	/*GOODS*/
	function createGood(start, end) {

		fetch('http://localhost:3000/goods')
		.then(response => response.json())
		.then(json => {

			if(json.length < end){
				end = json.length;
			}


			goobsBlock.innerHTML = '';

			for (let i = start; i < end; i++) {

				let div = document.createElement('div');
				div.className = 'col-12 col-sm-2 col-md-3'
				div.innerHTML = `

				<div class="card">
				<img src="${json[i].url}" alt="${json[i].title}">
				<div class="card_title">
				${json[i].title}
				</div>
				<div class="card_price js-card_price" data-price="${json[i].price}">
				${json[i].price} руб.
				</div>
				<button class="btn js-btn">Добавить в корзину</button>
				</div>
				`;

				goobsBlock.appendChild(div);

			}

			let btns = goobsBlock.querySelectorAll('.js-btn');
			btns.forEach((item) => item.addEventListener('click', addToCart));

		});

		document.documentElement.scrollTop = 204;

	}/*END GOODS*/






	/*PAGINATION*/
	function pagination() {

		let paginationList = document.querySelector('.js-pagination-list');

		fetch('http://localhost:3000/goods')
		.then(response => response.json())
		.then(json => {

			let count = 0;

			for (let i = 0; i < Math.ceil(json.length / 8); i++) {
				let btn = document.createElement('button');


				if(i == 0) {
					btn.classList.add('pag_active');
				}

				btn.innerHTML = `${i+1}`;
				btn.setAttribute('data-pag', `${count} ${count + 8}`);
				btn.addEventListener('click', nextPag);
				paginationList.appendChild(btn);
				count += 8;
			}

		});

	}/*END PAGINATION*/




	/*NEXT PAG*/
	function nextPag(){

		let pags = document.querySelectorAll('.js-pagination-list button');

		pags.forEach(item => {
			item.classList.remove('pag_active');
		});

		let pag = this.getAttribute('data-pag').split(' '),
		[start, end] = pag;

		this.classList.add('pag_active');


		createGood(+start, +end);
	}/*END NEXT PAG*/




	/*CART*/
	function openCart() {

		blackBack.classList.add('display-block');
		cartGoods.classList.add('opacity-show');
		document.body.classList.add('overflow');

	}


	function closeCart(){

		blackBack.classList.remove('display-block');
		cartGoods.classList.remove('opacity-show');
		document.body.classList.remove('overflow');

	}

	function addToCart() {

		let cartGoodsBlock = cartGoods.querySelector('.js-cart-goods_block'),
		item = this.parentElement.cloneNode(true),
		div = document.createElement('div');

		item.querySelector('.js-btn').remove();
		div.classList.add('delCart');
		div.addEventListener('click', removeFromCart);
		item.appendChild(div);



		if(cartGoodsBlock.querySelector('h1')){
			cartGoodsBlock.querySelector('h1').remove();
		}




		cartGoodsBlock.appendChild(item);

		/*Повышение счетчика*/
		countCart.innerHTML = Number(countCart.innerHTML) + 1;

		/*Складывание цен*/
		let price = this.parentElement.querySelector('.js-card_price').getAttribute('data-price'),
		    priceForCalc = price.replace(/\s/g, ''),
		    oldPrice = cartGoods.querySelector('p span');


		    oldPrice.innerHTML = Number(priceForCalc) + Number(oldPrice.innerHTML);
	}


	function removeFromCart() {
		this.parentElement.remove();

		/*Понижение счетчика*/
		countCart.innerHTML = Number(countCart.innerHTML) - 1;

		/*Вычитание цен*/
		let price = this.parentElement.querySelector('.js-card_price').getAttribute('data-price'),
		    priceForCalc = price.replace(/\s/g, ''),
		    oldPrice = cartGoods.querySelector('p span');


		    oldPrice.innerHTML = Number(oldPrice.innerHTML) - Number(priceForCalc);

		if(Number(countCart.innerHTML) == 0){

			let h1 = document.createElement('h1');
			h1.innerHTML = 'Ваша корзина пока пуста';
			cartGoods.querySelector('.js-cart-goods_block').appendChild(h1);

		}
	}

	cart.addEventListener('click', openCart);
	close.addEventListener('click', closeCart);
	blackBack.addEventListener('click', closeCart);



	pagination();

















}/*END ONLOAD*/
