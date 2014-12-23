$(document).ready(function(){
    $('.item').mouseenter(function(){
        $(this).fadeTo('fast', '1');
    })
    $('.item').mouseleave(function(){
        $(this).fadeTo('fast', '0.6');
    })
        $('.big').mouseenter(function(){
        $(this).fadeTo('fast', '1');
    })
    $('.big').mouseleave(function(){
        $(this).fadeTo('fast', '0.6');
    })
        $('.menuitem').mouseenter(function(){
        $(this).fadeTo('fast', '0.7');
    })
  	  $('.menuitem').mouseleave(function(){
        $(this).fadeTo('fast', '1');
    })
})