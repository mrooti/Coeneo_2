(function($){
  $(function(){
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
	$('.modal-trigger').leanModal();
	$('input#input_text, textarea#textarea1').characterCounter();
  }); // end of document ready
})(jQuery); // end of jQuery name space
$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});