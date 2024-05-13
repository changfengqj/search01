jQuery(document).ready(function($) { 
  $("#block-shouyefenleicaidan .content ul.parent > li a").click(function(){
    if ($(this).parent().next(".child-content").is(':visible') ) {
      $(this).parent().next(".child-content").hide();                    
    }
    else{
      $(this).parent().next(".child-content").show();
    }
    $(this).parent().next(".child-content").siblings(".child-content").hide();
    return false;
  });

});
