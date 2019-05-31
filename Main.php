<?php
session_start();

?>

<!DOCTYPE html>
<?php

include_once('CSDL/db.php');




$email = $_SESSION['user'];
$pass = $_SESSION['mk'];	

// sửa thông tin
if (isset($_POST ["btn_save"])) {
    $firstname= $_POST["FFirst"];
    $lastname=   $_POST["LLast"];


    $sql = ("UPDATE user SET LastName = '$lastname',  FirstName = '$firstname'  WHERE email = '$email'")or die("hẹo" . mysqli_error());
$query = mysqli_query($conn,$sql);

}
// đổi mật khẩu
if (isset($_POST ["btn_doiMk"])) {

    $matkhaucu =$_POST["MkCu"];
    $matkhaummoi1 =$_POST["Mkmoi"];
    $matkhaummoi2 =$_POST["nMkmoi"];
    if ( $matkhaucu == $pass && $matkhaummoi1 == $matkhaummoi2 && $matkhaummoi1!="") {

        $sql = ("UPDATE user SET pass = '$matkhaummoi1'WHERE email = '$email'")or die("hẹo" . mysqli_error());
$query = mysqli_query($conn,$sql);
        

    }
}
//đăng xuất 
if (isset($_POST ["btn_dx"])) {
   // echo "haha";
    session_destroy();
    header("location:index.php#login");

	
}

date_default_timezone_set('America/Lima');
$accccc = date("Y-m-d H:i:s");
//echo ($accccc);



// $sqll = "INSERT INTO user (real_time)  VALUES (NULL,'testtes@gmail.com', 'xom ','xom ','$accccc','xom')";          
// $aa = mysql_query($sqll);





$sql = "SELECT * from user where email ='$email'";
$result = mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);


$cc = $data['id'];

$_SESSION['cc']= $cc;






?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat Widget</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="Main/chat/css/ccss.css">
    
    <!--Copio todo el archivo del css, ya que al parecer no podemos modificar el css  dentro de la subcarpeta con el link--->
    
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
  width: 1250px;
  height: 800px;
  background: #444753;
  border-radius: 5px;
}

.people-list {

  
  height: 670px;
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
  overflow-y: scroll;
  padding: 20px;
  height:100%;
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


.chat-list {

  width: 260px;
  height: 770px;
  float: left;
}
.chat-list .search {
  padding: 20px;
}
.chat-list input {
  border-radius: 3px;
  border: none;
  padding: 14px;
  color: white;
  background: #6A6C75;
  width: 90%;
  font-size: 14px;
}
.chat-list .fa-search {
  position: relative;
  left: -25px;
}
.chat-list ul {
  overflow-y: scroll;
  padding: 20px;
  height:100%;
}
.chat-list ul li {
  padding-bottom: 20px;
}
.chat-list img {
  float: left;
}
.chat-list .about {
  float: left;
  margin-top: 8px;
}
.chat-list .about {
  padding-left: 8px;
}
.chat-list .status {
  color: #92959E;
}



.chat {
  width: 690px;
  height: auto;
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
  /*overflow-y: scroll;*/
  /*height: 575px;*/
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
    <div class="people-list" id="people-list">
       
        <ul id = "list" class="list">
			
			






			
<!-- //////////////////////////////// -->
        </ul>
    </div>

    <div class="chat">
        <div class="chat-header clearfix">
            <img src="https://secure.gravatar.com/avatar/5ddb76a2f5454e4b15d901009b2c2edd?s=55&d=retro&r=x" alt="avatar"/>

            <div class="chat-about">
                <div class="chat-with">Name: <?php echo $data['FirstName'] . ' ' . $data['LastName'] ?></div>


                <div class="chat-num-messages">email: <?php echo $email ?></div>

                <form action="" method="POST">
                     <button type="submit" name = "btn_dx" class="btn btn-default">log out</button>
                </form>
               


            </div>
            <i class="fa fa-star"></i>
        </div> <!-- end chat-header -->


        <div class="chat-history" id = "chat-history" >



        <form action="chatnhom.php" method="post">
        <button type="submit" name = "btn_chatnhom" class="btn btn-default">Create chat box</button>
            
        </form>

            <form action="" method="post">
              
              
                <H3>Edit info: </H3>
                
                <div class="form-group">
                    <label for="pwd">First Name:</label>
                    <input class="form-control" name= "FFirst" placeholder="">
                </div>
                <div class="form-group">
                    <label for="pwd">Last Name:</label>
                    <input class="form-control" name = "LLast" placeholder="">
                </div>


                <button type="submit" name = "btn_save" class="btn btn-default">save</button>

                <H3>Change password: </H3>

                <div class="form-group">
                    <label for="pwd">old password:</label>
                    <input type="password" name = "MkCu" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">new password:</label>
                    <input type="password" name = "Mkmoi" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">confirm password:</label>
                    <input type="password" name = "nMkmoi" class="form-control" id="pwd">
                </div>
                <button type="submit" name = "btn_doiMk" class="btn btn-default">Change password</button>
            </form>


        </div> <!-- end chat-history -->


    </div> <!-- end container -->

  


    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script> -->

    

    <script type="text/javascript" src="Chat/chat/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Chat/chat/js/GhiOnline.js"></script>
<script type="text/javascript" src="Chat/chat/js/load_list_ban.js"></script>


</body>
</html>
