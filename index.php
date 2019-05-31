<?php session_start();?>
<!DOCTYPE html>


<?php
include_once('CSDL/db.php');

?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="DangNhap/css/style.css">


        <style>
	
		*, *:before, *:after {
  box-sizing: border-box;
}

html {
  overflow-y: scroll;
}

body {
  background: url('https://c.wallhere.com/photos/a2/4a/2164x1440_px_city_Traffic-1409569.jpg!d') no-repeat fixed center center;
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration: none;
  color: #1ab188;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
a:hover {
  color: #179b77;
}

.form {
  background: rgba(19, 35, 47, 0.9);
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.tab-group li a:hover {
  background: #179b77;
  color: #ffffff;
}
.tab-group .active a {
  background: #1ab188;
  color: #ffffff;
}

.tab-content > div:last-child {
  display: none;
}

h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #1ab188;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #a0b3b0;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #1ab188;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button:hover, .button:focus {
  background: #179b77;
}

.button-block {
  display: block;
  width: 100%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}

		
	
	</style>



</head>

		
		
</script>
	
<body>


<?php
// đăng nhập
if (isset($_POST ["btn_login"])) {
    $email = $_POST ["email"];
    $pass = $_POST ["pass"];

// bắt lỗi đăng nhập  SQL Injection
    $email = stripcslashes($email);
    $pass = stripcslashes($pass);

    $email = mysqli_real_escape_string($conn,$email);
    $pass = mysqli_real_escape_string($conn,$pass);




    $sql = ("SELECT * from user where email='{$email}' and pass='{$pass}'") or die("hẹo" . mysql_error());

    $query = mysqli_query($conn,$sql);

    
    if (mysqli_num_rows($query) == 0) {
      
        header("location:index.php#login");
	 

        $_SESSION['msg']='Dang nhap loi';
    } else {
        $_SESSION['user']=$email;
        $_SESSION['mk']=$pass;
      
		header("location:Main.php");
         
		
    }
}

// đăng kí
if (isset($_POST ["btn_dk"])) {

    date_default_timezone_set('America/Lima');
    
    $email = $_POST ["emaill"];
    $LastName=$_POST ["Last"];
    $FirstName=$_POST ["First"];
    $passs=$_POST ["passs"];
    $time = date("Y-m-d H:i:s");
    
     $sql = ("SELECT * from user where email='{$email}'");

    $query = mysqli_query($conn,$sql);

    if (mysqli_num_rows($query) > 0) {
        echo "email đã tồn tại";
    }
    else{

          $sql = "INSERT INTO user (id,email,LastName,FirstName,real_time,pass)  VALUES (NULL,'$email', '$LastName ','$FirstName','$time','$passs')"or die("hẹo" . mysqli_error());

    $query = mysqli_query($conn,$sql);
    echo "Đăng kí thành công";

    }


  
}


?>


<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up for Free</h1>

            <form action="" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            First Name<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name= "First"  />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Last Name<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off"   name= "Last"  />
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" required autocomplete="off"      name= "emaill"  />
                </div>

                <div class="field-wrap">
                    <label>
                        Set A Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off"     name= "passs"  />
                </div>

                <button name="btn_dk" type="submit" class="button button-block"/>
                Get Started</button>

            </form>

        </div>

        <div id="login">
            <h1>Welcome Back!</h1>
            
            <form  action="" method="post">

                <div class="field-wrap">

                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email" required autocomplete="off" name="email"/>


                </div>

                <div class="field-wrap">

                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off" name="pass"/>


                </div>

                <p class="forgot"><a href="#">Forgot Password?</a></p>

                <button class="button button-block" type="submit" name="btn_login">Log In</button>


            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="DangNhap/js/index.js"></script>  <!--cambia de sign up a log in-->


</body>
</html>
