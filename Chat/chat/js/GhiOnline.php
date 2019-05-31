 <?php session_start();?>
 <?php $conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");	 ?>  

<?php
setOnLine();

function setOnLine(){

	$a = $_SESSION['user'] ;
echo $a;

 date_default_timezone_set('Asia/Ho_Chi_Minh');
 $time = date("Y-m-d H:i:s");
echo $time;
$sql = ("UPDATE user SET real_time = '$time' WHERE email = '$a'")or die("hẹo" . mysql_error());
$query = mysql_query($sql);

}





?>