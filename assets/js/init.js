  (function($){
    //parallax

    $(document).ready(function(){
      $('.parallax').parallax();
      $('.button-collapse').sideNav();
      $('.tooltipped').tooltip({delay: 50});
      $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
      $('select').material_select('destroy'); 
      $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: true, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on click
        alignment: 'left', // Aligns dropdown to left or right edge (works with constrain_width)
        gutter: 0 // Spacing from edge
      }
      );
    });
    $(function(){
    }); // end of document ready
  })(jQuery); // end of jQuery name space
