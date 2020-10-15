

$(document).ready(function(){
		
	
    
  $("#mode1").click(function(){
    $(".hidePay").hide();
    $("#credit").fadeIn();
   
  });
  
  $("#mode2").click(function(){
      $(".hidePay").hide();
    $("#onlinePay").fadeIn();
     
  });
  
  $("#mode3").click(function(){
      $(".hidePay").hide();
    $("#payPal").fadeIn();
      
  });
   
  
});