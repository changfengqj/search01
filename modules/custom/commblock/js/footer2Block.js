jQuery(document).ready(function($) { 
  $("#footer1 .col-md-3 .head").click(function(){
    if ( $(this).parent().children(".content").is(':visible') ) {
      $(this).parent().children(".content").hide();                    
    }
    else{
      $(this).parent().children(".content").show();
    }
    $(this).parent().siblings().children(".content").hide();
  });
});
	
