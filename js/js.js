var win = $(window);
/*
 *-*- scroll animacia -*-*
 */
$(document).ready(function(){

	$("a").on('click', function(event) {

	  if (this.hash !== "") {
		event.preventDefault();

		var hash = this.hash;
		$('html,body').animate ({
		  scrollTop: $(hash).offset().top }, 800);
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

burger.click(function() {
	tma.fadeIn(500);
	nav.css({
		left: '0',
	});
});

x.click(function() {
	tma.fadeOut(500);
	nav.css({
		left: '-20vw',
	});	
});
// Skryť po esc
$(document).on('keyup', function(event) {
	if (event.which === 27) {
		tma.fadeOut(500);
		nav.css({
			left: '-20vw'
		});
	}
});



/*
 * Slider v menu
 */
var otvor = $('.otvor'),
	roll = $('.roll');

otvor.mouseenter(function() {
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
otvor.mouseleave(function() {
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
 * Login efekt
 */

var login = $('.login'),
	flip_card_inner = $('.flip-card-inner'),
	pdm = 0;

	
login.click(function() {
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
