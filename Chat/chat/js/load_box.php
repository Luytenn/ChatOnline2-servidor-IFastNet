  <?php session_start();?>
   <?php $conn=mysqli_connect("localhost","michaton_michat","cruelmundo1") or die("can't connect this database");
mysqli_select_db($conn,"michaton_chat_online");		?>  

<?php
$cc = $_SESSION['cc'];


?>
            <?php


            $sql = "SELECT * from boxnhom ";   
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($result)) {


                if ($row['idUser'] == $cc) {

                    ?>
                    
                    <a href='chatbox.php?idUser=<?php echo $cc;//$cc ?>&idPhong=<?php echo $row['idPhong'] ?>'>
                    <li class="clearfix">
                        <img src="data:image/jpeg;base64,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"/>

                        <div class="about">
                            <div class="name"><?php echo $row["NameP"] ?>  </div>
                            <div class="status">
                               
                            </div>
                        </div>
                    </li>
                    </a>

                 


                    <?php
                }
            }
            ?>