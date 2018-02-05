$(document).ready(function(){


    //main nav
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        // if (scroll >= 200) {
        //     $(".global-nav").addClass("dark-header");
        // } else {
        //     $(".global-nav").removeClass("dark-header");
        // }
    });

    $( ".search-jobs-toggle" ).click(function() {
  		$( ".results-search-form" ).toggleClass( "search-on" );
	});
    

});
