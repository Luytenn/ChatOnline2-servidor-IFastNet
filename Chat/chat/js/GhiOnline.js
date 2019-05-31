
	$(document).ready(function(){
  var intercal = setInterval(function(){
  
    $.ajax({
      url: 'Chat/chat/js/GhiOnline.php'
      
    });

  },1000);

  
});