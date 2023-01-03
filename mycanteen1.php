<?php

include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}



$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);


$query = "INSERT INTO CANTEENS(name,email,contact,address,M_ID) VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $address ."','" . $_SESSION['login_user1'] ."')";
$success = $conn->query($query);

if (!$success){
	?>
	<html>
	<head>
		<title>change</title>
  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
	<body>
		
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

   <nav class="navbar navbar-inverse navbar-fixed-top"role="navigation"style="background:;border:10px double white;border-radius:20px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">NammaKadai | Home</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
          <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Sign Up </a></li>
            <li><a href="#">  Login </a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h1>Your already have one Canteen.</h1>
	<p>Go back to your <a href="view_food_items.php">Canteen</a></p>
	</div>
</div>
	
	</body>
	</html>

	<?php
}
else {
	header('Location: mycanteen.php');
}

$conn->close();


?>