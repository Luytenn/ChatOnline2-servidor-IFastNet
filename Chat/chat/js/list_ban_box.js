$(document).ready(function(){
  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'Chat/chat/js/list_ban_box.php',
      success: function(data){
        $('#list').html(data);
      }
    });

  },1000);

  
});