$(document).ready(function(){
  var intercal = setInterval(function()
  {
    $.ajax({
      url: 'Chat/chat/js/load_box.php',
      success: function(data){
        $('#listt').html(data);
      }
    });

  },1000);

  
});