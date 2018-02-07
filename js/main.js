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


    $('#search_keywords').autoComplete({
        minChars: 1,
        source: function(term, suggest){
            term = term.toLowerCase();
            var choices = (termslistjsonparsed);
            var suggestions = [];
            for (i=0;i<choices.length;i++)
                if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
            suggest(suggestions);
        }
    });

  });

    function activatePlacesSearch(){

        var input = document.getElementById('search_location');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }






