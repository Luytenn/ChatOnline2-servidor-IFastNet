<?php
$conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");	



// function get_msg($NAME){

// $query= ("SELECT * from mess where name= '{$NAME}' ")

// 	$run= mysql_query($query);
// 	while ($message = mysql_fetch_assoc($run)) {
// 			echo $message['messs'];
				
// 		}
	
// }



function send_msg($idNguoiGui,$idPhong,$mess){

if (!empty($idNguoiGui)&&empty($idPhong)&&!empty($mess) ) {
	
$conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");	

	 $query= "INSERT INTO `mess` (`id`, `idGui`, `idPhong`, `messs`) 
	 VALUES (NULL, $idNguoiGui, $idPhong, $mess)";

	 $run = mysqli_query($conn,$query);
	 if ($run) {
	 		echo "thành công";
	 }
	 else
	 {
	 	echo "hẹo";
	 }

	# code...
}else
{
	return false;
}






}




?>