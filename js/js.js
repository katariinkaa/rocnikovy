var win = $(window);
/*
 *-*- scroll animacia -*-*
 */
$(document).ready(function () {

	$("a").on('click', function (event) {

		if (this.hash !== "") {
			event.preventDefault();

			var hash = this.hash;
			$('html,body').animate({
				scrollTop: $(hash).offset().top
			}, 800);
		}
	});
});

/* 
 * Menu Slider
 */
var burger = $('.fa-bars'),
	nav = $('nav'),
	x = $('.fa-times'),
	tma = $('.tma');

tma.hide();

burger.click(function () {
	tma.fadeIn(500);
	nav.css({
		left: '0',
	});
});

x.click(function () {
	tma.fadeOut(500);

	if (win.width() < 960) {
		nav.css({
			left: '-100%',
		});
	}
	else {
		nav.css({
			left: '-20vw',
		});
	}
});
// Skryť po esc
$(document).on('keyup', function (event) {
	if (event.which === 27) {
		tma.fadeOut(500);
		nav.css({
			left: '-20vw'
		});
	}
});


/* 
 * Peknucko zmiznutie
 */

$('.peknucko').delay(3000).fadeOut();


/*
 * Slider v menu
 */
var otvor = $('.otvor'),
	roll = $('.roll');

otvor.mouseenter(function () {
	otvor.find('a').css({
		color: 'white',
		marginLeft: '10%',
	});
	roll.css({
		top: '50%',
		opacity: '1',
		zIndex: '5',
	});
});
otvor.mouseleave(function () {
	otvor.find('a').css({
		color: '#999999',
		marginLeft: '0',
	});
	roll.css({
		top: '500%',
		opacity: '0',
		zIndex: '0',
	});
});


/*
 * Admin LINKY
 */

var active = $('.active'),
	up = $('.u'),
	p = 0;

up.hide();

active.click(function () {
	if (p == 0) {
		up.slideDown(500);
		rr.css({
			transform: 'rotate(180deg)',
		});
		p++;
	}
	else {
		up.slideUp(500);
		rr.css({
			transform: 'rotate(0deg)',
		});
		p--;
	}
});


/* 
 * Login efekt
 */

var login = $('.login'),
	flip_card_inner = $('.flip-card-inner'),
	pdm = 0;


login.click(function () {
	if (pdm == 0) {
		flip_card_inner.css({
			transform: 'rotateY(180deg)',
		});
		pdm++;
	}
	else {
		flip_card_inner.css({
			transform: 'rotateY(0deg)',
		});
		pdm--;
	}

});




var obj = $('#hide'),
	sld = $('#slide'),
	rr = $('.fa-chevron-down'),
	c = 0;

sld.click(function () {
	if (c == 0) {
		obj.slideDown(500);
		rr.css({
			transform: 'rotate(180deg)',
			transition: '.2s'
		});
		c++;
	}
	else {
		obj.slideUp(500);
		rr.css({
			transform: 'rotate(0deg)',
		});
		c--;
	}
});

/*
 * Zmena
 */

var zmena = $('.zmena'),
	zmenit_btn = $('.zmenit');

zmenit_btn.click(function () {
	tma.show();
	zmena.show();
});

// Skryť po esc
$(document).on('keyup', function (event) {
	if (event.which === 27) {
		tma.hide();
		zmena.hide();
	}
});

x.click(function () {
	tma.hide();
	zmena.hide();
});

/*
 * ZEMIAK
 */

var karta = $('.fuzy'),
	back = $('.back');


karta.click(function () {
	back.hide();

	$(this).css({
		position: 'fixed',
		width: '100%',
		height: '200%',
		marginTop: '0',
		borderRadius: '0',
		transition: '.5s'
	});
});

/*
 * ALERT
 */
$('#alert').delay(1500).fadeOut(1000);


/*
 * Slider
 */

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function () {
	output.innerHTML = this.value;
}
