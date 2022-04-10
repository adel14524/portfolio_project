/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

$(document).ready(function(){
    // $('a').on('click', function(event){
    //     if (this.hash !== "") {
    //         event.preventDefault();

    //         var hash = this.hash;

    //         $('html, body').animate({
    //             scrollTop: $(hash).offset().top
    //         }, 800, function(){
    //             window.location.hash = hash;
    //         });
    //     }
    // });

    $('.single').click(function(){
        $('.navbar div').removeClass('show');
    });

    $(window).scroll(function(){
        $(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#btn-back-to-top').fadeIn();
			} else {
				$('#btn-back-to-top').fadeOut();
			}
		});
        // scroll body to 0px on click
        $('#btn-back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
    });
});