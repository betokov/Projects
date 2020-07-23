$(document).ready(function () {
    //slider on header
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        effect: 'fade',
        simulateTouch: false,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }
    });

    //Scroll menu
    $('.navigation--list a, .main-footer--button, .my-swiper--button').on('click', function() {
        var elemLink = $(this).attr('href');
        var destination = $(elemLink).offset().top;

        $('.js-navigation--mobile-block').removeClass('navigation--mobile-block__active');
        $('.js-navigation--burger').removeClass('navigation--burger__open');

        $('html').animate({
            scrollTop: destination - 70
        }, 1000);
    }) ;

    //scrollbar for about me
    var swiperAbout = new Swiper('.about--description .swiper-container', {
        direction: 'vertical',
        slidesPerView: 'auto',
        freeMode: true,
        scrollbar: {
            el: '.about--description .swiper-scrollbar',
        },
        mousewheel: true,
    });

    // for portfoli filter jquary
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter a').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

});//End Ready

window.onload = function () {
    let burger = document.querySelector('.js-navigation--burger'),
        nav = document.querySelector('.js-navigation--mobile-block'),
        navBlock = document.querySelector('.js-navigation'),
        header = document.querySelector('.main-header'),
        skillsSection = document.querySelector('.skills').offsetTop;

    //fixed menu
    if (pageYOffset >= header.offsetHeight + 50) {
        navBlock.classList.add('navigation__fixed');
    }

    window.addEventListener('scroll', function () {
        if (pageYOffset > document.querySelector('.about').offsetTop) {
                navBlock.classList.add('navigation__fixed');
        }   else {
                navBlock.classList.remove('navigation__fixed');
        }
    });

    //mobile menu
    burger.addEventListener('click', () => {
        burger.classList.toggle('navigation--burger__open');
        nav.classList.toggle('navigation--mobile-block__active');
    });

    //viewport vh
    if (window.innerWidth < 768) {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    //progressbar
    let progressbar = {
        color: '#708090',
        trailColor: '#eee',
        trailWidth: 1,
        strokeWidth: 2,
        easing: 'bounce',
        from: {color: '#1976d2', a: 0},
        to: {color: '#1976d2', a: 1},
        // Set default step function for all animate calls
        step: function (state, circle, last) {
            circle.path.setAttribute('stroke', state.color);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('0%');
            } else {
                circle.setText(value + '%');
            }
        }
    };

    let recensere = new ProgressBar.Circle('.skills-list--skill__recensere', progressbar),
        html = new ProgressBar.Circle('.skills-list--skill__html', progressbar),
        css = new ProgressBar.Circle('.skills-list--skill__css', progressbar),
        preprocess = new ProgressBar.Circle('.skills-list--skill__preprocess', progressbar),
        js = new ProgressBar.Circle('.skills-list--skill__js', progressbar),
        vuejs = new ProgressBar.Circle('.skills-list--skill__vue', progressbar),
        jquery = new ProgressBar.Circle('.skills-list--skill__jquery', progressbar),
        build = new ProgressBar.Circle('.skills-list--skill__build', progressbar),
        backend = new ProgressBar.Circle('.skills-list--skill__backend', progressbar),
        oneMore = 0;

    function animateSkills() {
        recensere.animate(0.4);
        html.animate(0.9);
        css.animate(0.7);
        preprocess.animate(0.7);
        js.animate(0.5);
        vuejs.animate(0.3);
        jquery.animate(0.6);
        build.animate(0.5);
        backend.animate(0.3);
    }

    if (pageYOffset >= skillsSection - 100) {
        animateSkills();
        oneMore += 1;
    }

    window.addEventListener('scroll', function () {
        if (pageYOffset >= skillsSection - 100) {
            if (oneMore == 0) {
                animateSkills();
                oneMore += 1;
            }
        }
    });


    //progressbar mobile
    let buttonProgress = document.querySelector('.js-skills--button'),
        listProgress = document.querySelector('.skills-list');

    buttonProgress.addEventListener("click", function () {
        listProgress.classList.toggle('skills-list__view');
        buttonProgress.classList.toggle('skills--button__active');
    });

    //Map
    let newMap = document.querySelector('.new-map'),
        education = document.querySelector('#education').offsetTop,
        countForMap = 0;

    if (pageYOffset >= education) {
        initMap();
    }

    function initMap() {
        newMap.setAttribute("src", "https://api-maps.yandex.ru/2.1/?7293582a-d52e-4d29-9127-18e638c44040&lang=ru_RU");
        newMap.setAttribute('async', '');

        countForMap += 1;

        setTimeout(function () {
            ymaps.ready(init);

            function init() {

                var myMap = new ymaps.Map("map", {

                    center: [55.78206627707018, 37.705283499999936],

                    zoom: 18,
                    controls: []
                }, {
                    suppressMapOpenBlock: true
                });

                myMap.behaviors.disable('scrollZoom')

            }
        }, 500);
    };

    window.addEventListener('scroll', function () {

        if (pageYOffset >= education && countForMap == 0) {
            initMap();
        }

    });


    //Form
    let form = document.querySelector('.js-contacts-form');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        let xhr = new XMLHttpRequest(),
            firstname = document.querySelector("input[name='firstname']"),
            email = document.querySelector("input[name='email']"),
            message = document.querySelector("textarea[name='message']"),
            answer = 'firstname=' + encodeURIComponent(firstname.value) + '&email=' + encodeURIComponent(email.value) + '&message=' + encodeURIComponent(message.value),
            modalSuccess = document.querySelector('.modal-success'),
            overlay = document.querySelector('.modal-overlay');

        function closeModal() {
            document.querySelector('html').style.overflowY = 'scroll';
            overlay.classList.remove('display__block');
            modalSuccess.classList.remove('display__block');
        }

        xhr.open('POST', 'mail.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (xhr.readyState != 4) return;

            if (xhr.status != 200) {
                console.log(xhr.status + ': ' + xhr.statusText);
            } else {
                let closeButton = document.querySelector('.modal-close');

                firstname.value = '';
                email.value = '';
                message.value = '';

                modalSuccess.classList.add('display__block');
                overlay.classList.add('display__block');
                document.querySelector('html').style.overflow = 'hidden';
                document.body.style.overflow = 'hidden';
                overlay.addEventListener('click', closeModal);
                closeButton.addEventListener('click', closeModal);
            }

        };

        xhr.send(answer);
    });
};




