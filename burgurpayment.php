<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin_b.php"); 
}
?>

<html>

  <head>
    <title> Cart |NammaKadai</title>
  </head>
<link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/payment.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body style="background-color:black;">
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

   <nav class="navbar navbar-inverse navbar-fixed-top"role="navigation">
   <div class="container">
	 <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="fas fa-home"> NammaKadai | Home</i></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>

           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
 


           <ul class="nav navbar-nav navbar-right">
		
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="burgurfoodlist.php"><i class="fas fa-utensils"> Food Zone </i></a></li>
            <li><a href="burgurcart.php"><i class="fas fa-shopping-cart"> Cart
             (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
              </i></a></li>
  <li><a href="logout_u.php">Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              <li> <a href="#"> Admin Sign-up</a></li>
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              <li> <a href="#"> Admin Login</a></li>
            </ul>
            </li>
          </ul>

<?php
}
?>

      </div>

      </div>
    </nav>

 <?php
$gtotal = 0;

  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_ID = $values["R_ID"];    
    $shop_name =$values["shop_name"];
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    $gtotal = $gtotal + $total;




     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, R_ID, shop_name,username) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $R_ID . "', '" . $shop_name . "','" . $username . "')";
            

              $success = $conn->query($query);         

     
      if(!$success)
      {          
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }

}

        ?>



<div class="container" style="background-color:BLACK;padding:20px;margin-top:50px;color:black">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
       
        <br>  <div class="container" style="width:100%;background-color:BLACK;padding:20px;margin-top:50px;color:white">
<h1 class="text-center"><b>Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</b></h1>
<h4 class="text-center">including all service charges. (no delivery charges applied)</h4>
<br>
<h1 class="text-center">
  <a href="burgurcart.php"><button class="btn btn-warning"> Go back to cart</button></a>
<a href="burgurCOD.php"><button class="btn btn-warning" name="submit" >SUBMIT</button></a>



</h1>


<br><br><br><br><br><br>
        </body>
</html>