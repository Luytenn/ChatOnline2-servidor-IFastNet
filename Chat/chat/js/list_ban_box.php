  <?php session_start();?>
   <?php $conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");		?>  

<?php
$cc = $_SESSION['cc'];

$idPhong = $_SESSION['idPhong'] ;
?>
            <?php


            $sql = "select * from boxnhom join user on boxnhom.idUser = user.id where boxnhom.idPhong = '$idPhong'";  
             $result = mysqli_query($conn,$sql);
             
//select * from boxnhom join user on boxnhom.idUser = user.id where boxnhom.idPhong = '10045 10046'


            while ($row = mysqli_fetch_assoc($result)) {


                if ($row['id'] != $cc) {

            date_default_timezone_set('America/Lima');
            $datetime = date("Y-m-d H:i:s");

           $ngon = abs (strtotime($datetime) -strtotime($row['real_time']));

         
        // echo $datetime->format("l");
         


                    ?>
                    
                    <a href='Chat.php?ida=<?php echo $cc ?>&idb=<?php echo $row['id'] ?>'>
                    <li class="clearfix">
                        <img src="https://assets.jalantikus.com/assets/cache/55/55/games/2016/09/27/dress-up-diary-icon.png" alt="avatar"/>

                        <div class="about">
                            <div class="name"><?php echo $row["LastName"] . " " . $row["FirstName"] ?>  </div>
                            <div class="status">
                                <i class="<?php
if ($ngon <5) {
             echo "fa fa-circle online";
			
   	      }
         else
         {
            echo"fa fa-circle offline";
         }
?>"></i> <?php
if ($ngon <5) {
             echo "online";
         }
         else
         {
            echo"last seen " . (string)$row['real_time'] ;
         }
?>
                            </div>
                        </div>
                    </li>
                    </a>


                    <?php
                }
            }
            ?>