<?php
session_start();

?>

<!DOCTYPE html>


<?php
$conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");	


$email = $_SESSION['user'];
$pass = $_SESSION['mk'];

// sửa thông tin
if (isset($_POST ["btn_save"])) {
    $firstname= $_POST["FFirst"];
    $lastname=   $_POST["LLast"];
    $sql = ("UPDATE user SET LastName = '$lastname',  FirstName = '$firstname'  WHERE email = '$email'")or die("hẹo" . mysqli_error());
$query = mysqli_query($conn,$sql);

}
// chat




 $idd = $_SESSION['cc'];  


if (isset($_POST ["btn_chatnhom"]) &&  !empty($_POST['chk_group']) ) {
$abc = $_POST["txtTenNhom"];

if ($abc == "") {
 echo "name chat room";
}
else{

 


  //echo $abc.'<br>';
  $cache =  $idd.'';
 
     foreach($_POST['chk_group'] as $chk_group)
      {
        $cache=$cache.$chk_group;
   //echo $chk_group.'<br>';
      }
      echo $cache;  

 $sql = "SELECT * from boxnhom ";   
            $result = mysqli_query($conn,$sql);
            $TrangThai=0;
            while ($row = mysqli_fetch_assoc($result)) {

              if ($row['idPhong'] == $cache) {
                $TrangThai=1;
                
              }
              
            }
if ($TrangThai == 1) {
  echo "this room is taken";
}
else
{
echo "success";



    

$sqll = "INSERT INTO `boxnhom` ( `idUser`, `idPhong`, `NameP`) VALUES ('$idd', '$cache', '$abc')";

$result = mysqli_query($conn,$sqll);



  foreach($_POST['chk_group'] as $chk_group)
      {


      //  echo '<br/>'."a".'<br/>';

        $sqll = "INSERT INTO `boxnhom` ( `idUser`, `idPhong`, `NameP`) VALUES ( $chk_group, '$cache', '$abc')";
        
        // $sqll = ("INSERT INTO 'boxnhom' (id,idUser, idPhong,NameP) 
        //   VALUES (NULL, 02 , 'aa', 'aaa')")or die("hẹo" . mysql_error());

          $result = mysqli_query($conn,$sqll);


  // echo $chk_group.'<br>';
      }


}




}
  

    
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

       
<form action="" method="POST">
<button type="submit" name = "btn_chatnhom" class="btn btn-default">Create</button>
<div class="form-group">
                    <label for="pwd">Name room:</label>
                    <input class="form-control" name = "txtTenNhom" placeholder="">
                </div>
</form>


   <ul id = "list" class="list">
<!-- //////////////////////////////// -->
 
               <?php


            $sql = "SELECT * from user ";   $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($result)) {


                if ($row['id'] != $cc) {

            date_default_timezone_set('America/Lima');
            $datetime = date("Y-m-d H:i:s");
					
           $ngon = abs (strtotime($datetime) -strtotime($row['real_time']));

         
        // echo $datetime->format("l");?>


                    
                    
                    <li class="clearfix">
                  

                        <img src="https://assets.jalantikus.com/assets/cache/55/55/games/2016/09/27/dress-up-diary-icon.png" alt="avatar"/>

                        <div class="about">
                            <div class="name">      <?php echo $row["LastName"] . " " . $row["FirstName"] ?>  </div>
                            
                            <div class="status">
                                <i class="<?php
if ($ngon <5) {
             echo "fa fa-circle online";
         }
         else
         {
            echo"fa fa-circle offline";
         }
?>"></i> 


 <label class="checkbox-inline">
      <input type="checkbox" name="chk_group[]" value="<?php echo $row["id"]?> "> <?php //echo $row["id"]?> 



    </label>



<?php


if ($ngon <5) {
             echo "online";
         }
         else
         {
            echo"active ago " . (string)$row['real_time'] ;
         }
?>
                            </div>
                        </div>
                    </li>
              
                    <?php
                }
            }
            ?>

        </ul>



       
    </div>

  

   <div class="people-list" id="people-list">


   <ul id = "listt" class="listt">

    



        


    </ul>



       
    </div>
    <form action="Main.php">
       <button type="submit" name = "btn_TrangChu" class="btn btn-default">home</button>

    </form>

  

  


    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script> -->

    <script src="chat/js/index.js"></script>

	
    <script type="text/javascript" src="Chat/chat/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="Chat/chat/js/GhiOnline.js"></script>
	<script type="text/javascript" src="Chat/chat/js/load_box.js"></script>




</body>
</html>
