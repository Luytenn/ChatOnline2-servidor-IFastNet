$(document).ready(function(){
  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'Chat/chat/js/chatboxhistory.php',
      success: function(data){
        $('#chat-history').html(data);
      }
    });

  },1000);

  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'Chat/chat/js/GhiOnline.php'
    });

  },1000);

  
});

