(function($){
  //parallax
  $(document).ready(function(){
      $('.parallax').parallax();
    });
  
  //slider function
  $(document).ready(function(){
      $('.slider').slider({full_width: false});
    });
		
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space