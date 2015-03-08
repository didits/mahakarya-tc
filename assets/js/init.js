(function($){
 
  //slider function
  $(document).ready(function(){
      $('.slider').slider({full_width: false});
    });
  //parallax
  $(document).ready(function(){
      $('.parallax').parallax();
    });
		
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space