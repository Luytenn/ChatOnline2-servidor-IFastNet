<?php session_start(); ?>
<!DOCTYPE html>
<?php
	
$conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");	


?>


<?php

$ida=$_GET['ida'];
$idb=$_GET['idb'];





$sql = "SELECT * from user where id = '{$ida}' ";
$result = mysqli_query($conn,$sql);
$Ten;$TenDem;

while ($row = mysqli_fetch_assoc($result)) {
$TenDem = $row['LastName'];
$Ten    = $row['FirstName'];
}




$sql1 = "SELECT * from user where id = '{$idb}' ";
$result1 = mysqli_query($conn,$sql1);
$Ten1;$TenDem1;
while ($row1 = mysqli_fetch_assoc($result1)) {
$TenDem1 = $row1['LastName'];
$Ten1    = $row1['FirstName'];

}

$TenPhong1=$ida.$idb;
$TenPhong2=$idb.$ida;

  function KiemTraTen($so1,$so2) {
	  
	 $conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");		
	  
  $sql = "SELECT * from box ";
  $result = mysqli_query($conn,$sql);
  $a=0;
  
  while ($row = mysqli_fetch_assoc($result)) {
        // echo $row['name'];

        if ($row['name'] == $so1) {

          $a=1;
          
        }
        else{
          if ($row['name'] == $so2) {
          $a=2;
          }
         
        }
      }
       
       return $a;
  
}

$concac = KiemTraTen($TenPhong1,$TenPhong2);

if ($concac == 1) {
 // echo " </br> Había sala habitación nombrada con Phong Phong1";
  $sql = "SELECT * from box where name = $TenPhong1 ";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  $idPhong = $row['id'];
 // echo '<br/> id phòng'. $idPhong;

}
else if($concac == 2){
 // echo " </br> Había sala habitación nombrada con Phong Phong2";
  $sql = "SELECT * from box where name = $TenPhong2 ";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
  $idPhong = $row['id'];
//  echo '<br/> id phòng'. $idPhong;
}else{

 // echo "chưa có phòng. phải tạo phòng";
    $sql = "INSERT INTO `box` (`id`, `idUser1`, `idUser2`, `name`) 
          VALUES (NULL,$ida , $idb, $TenPhong1)";
          $result = mysqli_query($conn,$sql);
}

?>

<html >

<head>
  <meta charset="UTF-8">
  <title>Chat Widget</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="Chat/chat/css/style.css">

    <style>
	
		@import url(https://fonts.googleapis.com/css?family=Lato:400,700);
*, *:before, *:after {
  box-sizing: border-box;
}

body {
   background: url('https://c.wallhere.com/photos/a2/4a/2164x1440_px_city_Traffic-1409569.jpg!d') no-repeat fixed center center;
  font: 14px/20px "Lato", Arial, sans-serif;
  padding: 40px 0;
  color: white;
}

.container {
  margin: 0 auto;
  width: 1050px;
  background: #444753;
  border-radius: 5px;
}

.people-list {
  width: 260px;
  float: left;
}
.people-list .search {
  padding: 20px;
}
.people-list input {
  border-radius: 3px;
  border: none;
  padding: 14px;
  color: white;
  background: #6A6C75;
  width: 90%;
  font-size: 14px;
}
.people-list .fa-search {
  position: relative;
  left: -25px;
}
.people-list ul {
  padding: 20px;
  height: 770px;
}
.people-list ul li {
  padding-bottom: 20px;
}
.people-list img {
  float: left;
}
.people-list .about {
  float: left;
  margin-top: 8px;
}
.people-list .about {
  padding-left: 8px;
}
.people-list .status {
  color: #92959E;
}

.chat {
  
  float: left;
  background: #F2F5F8;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  color: #434651;
}
.chat .chat-header {
  padding: 20px;
  border-bottom: 2px solid white;
}
.chat .chat-header img {
  float: left;
}
.chat .chat-header .chat-about {
  float: left;
  padding-left: 10px;
  margin-top: 6px;
}
.chat .chat-header .chat-with {
  font-weight: bold;
  font-size: 16px;
}
.chat .chat-header .chat-num-messages {
  color: #92959E;
}
.chat .chat-header .fa-star {
  float: right;
  color: #D8DADF;
  font-size: 20px;
  margin-top: 12px;
}
.chat .chat-history {
  padding: 30px 30px 20px;
  border-bottom: 2px solid white;
  overflow-y: scroll;
  height: 575px;
}
.chat .chat-history .message-data {
  margin-bottom: 15px;
}
.chat .chat-history .message-data-time {
  color: #a8aab1;
  padding-left: 6px;
}
.chat .chat-history .message {
  color: white;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 7px;
  margin-bottom: 30px;
  width: 90%;
  position: relative;
}
.chat .chat-history .message:after {
  bottom: 100%;
  left: 7%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #86BB71;
  border-width: 10px;
  margin-left: -10px;
}
.chat .chat-history .my-message {
  background: #86BB71;
}
.chat .chat-history .other-message {
  background: #94C2ED;
}
.chat .chat-history .other-message:after {
  border-bottom-color: #94C2ED;
  left: 93%;
}
.chat .chat-message {
  padding: 30px;
}
.chat .chat-message textarea {
  width: 100%;
  border: none;
  padding: 10px 20px;
  font: 14px/22px "Lato", Arial, sans-serif;
  margin-bottom: 10px;
  border-radius: 5px;
  resize: none;
}
.chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
  font-size: 16px;
  color: gray;
  cursor: pointer;
}
.chat .chat-message button {
  float: right;
  color: #94C2ED;
  font-size: 16px;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  font-weight: bold;
  background: #F2F5F8;
}
.chat .chat-message button:hover {
  color: #75b1e8;
}

.online, .offline, .me {
  margin-right: 3px;
  font-size: 10px;
}

.online {
  color: #86BB71;
}

.offline {
  color: #E38968;
}

.me {
  color: #94C2ED;
}

.align-left {
  text-align: left;
}

.align-right {
  text-align: right;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

	
	</style>
	
  

  
</head>

<body>

      
     
    
  
    <div class="container clearfix">
      <form action="Main.php">
       <button type="submit" name = "btn_TrangChu" class="btn btn-default">Home</button>

    </form>
    
    
    <div class="chat" id = "messages">

      <div class="chat-header clearfix">
        <img src="https://assets.jalantikus.com/assets/cache/55/55/games/2016/09/27/dress-up-diary-icon.png" alt="avatar" />
        
        <div class="chat-about">
          <div class="chat-with">Chat with <?php echo $Ten1 .' '.  $TenDem1; ?></div>
          
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->
      
      <div class="chat-history" id="chat-history">
        <ul>



        </ul>
        
      </div> <!-- end chat-history -->
  
<?php

$_SESSION['idPhong']=$idPhong;
$_SESSION['ida']=$ida;
$_SESSION['Ten']=$Ten;
$_SESSION['Ten1']=$Ten1;

if (isset($_POST["btn"]) && ($_POST["message-to-send"])!="") {

    $idNguoiGui = $ida;
    $messss = $_POST["message-to-send"];

  //echo $messss; 
 $sql = "INSERT INTO `mest` (`id`, `idGui`, `idPhong`,`messs`) 
          VALUES (NULL, $idNguoiGui , $idPhong, '$messss')";
          $result = mysqli_query($conn,$sql);

$messss="";

}

?> 

<form id= "bb" action="" method="post">
 <div class="chat-message clearfix">
        <textarea  id ="cc" name="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                
        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-file-image-o"></i>
        
        <button onClick="Scroll()" name="btn" type="submit" id="abc" >SEND</button>

      </div> <!-- end chat-message -->
  
</form>
      
     
        
      
      


      
    </div> <!-- end chat -->
    

  </div> <!-- end container -->

<script ype="text/javascript" src="Chat/chat/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="Chat/chat/js/index.js"></script>

</body>
</html>
