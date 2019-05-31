  <?php session_start();?>
   <?php $conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");		 ?>  

 <?php

$idPhong = $_SESSION['idPhong'] ;

$ida = $_SESSION['ida'];

//$Ten = $_SESSION['Ten'];
//$Ten1 = $_SESSION['Ten1'];
//echo $idPhong;

  $sql= ("SELECT * from mess where idPhong = '$idPhong' ");
  $kk= mysqli_query($conn,$sql);

  while ($row = mysqli_fetch_assoc($kk)) {



      if ($row['idGui'] == $ida) {
  

        $sql = "SELECT * from user where id = $ida ";
        $result = mysqli_query($conn,$sql);
       

        while ($row1 = mysqli_fetch_assoc($result)) {
        
        $Tenn = $row1['FirstName'];
        
}
//echo $Tenn;



?>
     <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> <?php echo $Tenn; ?></span>
              <span class="message-data-name" ><?php echo "  ".$row['time'];  ?></span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message my-message">
                  <?php  echo $row['messs']; ?>
            </div>
           

          </li>
        
       
<?php  

      }
      else
      {

         $sql = "SELECT * from user where id = '{$row['idGui']}' ";
        $result = mysqli_query($conn,$sql);
      

        while ($row1 = mysqli_fetch_assoc($result)) {
        
        $Tenn = $row1['FirstName'];
        
}
        ?>
         <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-name" ><?php echo $Tenn  ?></span> <i class="fa fa-circle me"></i>
               <span class="message-data-name" ><?php echo "  ".$row['time'];  ?></span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message other-message float-right">

              <?php echo $row['messs'] ; ?>
            </div>

          </li>

         
<?php

      }
      }

?> 
          
          
          
          