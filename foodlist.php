<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>


<html>

  <head>
    <title> Explore | NammaKadai </title>
<style>
body,html {
  height: 100%;
}

body {

  padding-top: 50px;
 background-image: url('bgimg1.jpg'); 

  background-repeat: repeat;
  background-size: cover;
  background-position: center;
/*
  background: linear-gradient(-90deg,#ff8008, #ffc837);
  */
}


#myBtn{
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: grapping;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {

  background-color: darkgreen;
  color: white;
}
.mypanel{
height:460px;width:100%;background-color:lightgreen;color:blue;box-shadow:1px 1px 10px silver,-1px -1px 10px silver;padding:60px;margin-top:2px;text-align:center;font-size:150%;
}
.mypanel.si{
height:40%;
width:;
padding:20px;

}
.mypanel:hover{
height:;
x-index:20%;
width:100%;
border:2px dotted skyblue; 
border-radius:5px;
background-color:silver;
font-size:xx-large;
padding:30px;
text-align:center;
}

.bg-4{
  background-color: #2f2f2f;
  color: #ffffff;

}

footer{
  display: block;
}




input{
  border: 5px solid blue;
}
</style>
  </head>
<link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
 
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
            
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>


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
            <li><a href="#"> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="mycanteen.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active" ><a href="foodlist.php"><i class="fas fa-utensils"> Food Zone  </i></a></li>
            <li><a href="cart.php"><i class="fas fa-shopping-cart"> Cart (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </i> </a></li>
            <li><a href="logout_u.php"><i class="fas fa-sign-out-alt"> Log Out</i> </a></li>
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
     <div class="container" style="width:100%;background-color:darkgreen;border-radius:10px;padding:40px;margin-top:8%;">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
      <img src="images/home.jpg" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
       
       <!--div class="item">
      <img src="images/.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div-->

      <div class="item">
      <img src="images/slide001.jpg" style="width:100%;">
      <div class="carousel-caption">

      </div>
      </div>
      <div class="item">
      <img src="images/slide003.jpg" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
    
    </div>
   <a class="left carousel-control" href="#myCarousel" style="padding:12%;"data-slide="prev">
      <h1><b><i><<<</i></b></h1>
    
    </a>
    <a class="right carousel-control" href="#myCarousel"  style="padding:12%;"data-slide="next">
	
      <h1><b><i>>>></i></b></h1>
  
    </a>
    </div>
     <div class="container" style="background-color:;box-shadow:1px 1px 10px silver,-1px -1px 100px silver;border-radius:20px;padding:20px;margin-top:50px;">

<div class="jumbotron"style="background-color:silver;">
  <div class="container text-center" >
    <h1>Welcome To LaKshu Canteen</h1>      
    <p>Food is always medicine </p>
  </div>
</div>

<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE  shop_name='kfc'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?><div class="si" style="font-size:300%;">
<div class="col-md-3">

<form method="post"  action="cart.php?action=add&id=<?php echo $row["F_ID"]; ?>">

<div class="mypanel" data-tilt  align="center";>

<div class="si" style=""><img src="<?php echo $row["images_path"]; ?>" class="img-responsive"></div>
<h4 class="text-dark"  ><?php echo $row["name"]; ?></h4>
<h5 class="text-info"><?php echo $row["description"]; ?></h5>
<h5 class="text-danger">Price : &#8377;<?php echo $row["price"]; ?>/-</h5>
<h5 class="text-info">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 60px;text-align:center;margin-left:50px;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
<input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
<input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
</div>
</div>

</form>
      

</div>


<?php
$count++;
if($count==4)
{
  echo "</div>";
  $count=0;
}
}
?>
</div>
</div>
</div>
<?php
}
else
{
  ?>

  <div class="container">
    <div class="jumbotron">
      <center>
         <label style="margin-left: 5px;color: red;"> <h1>Oops! No food is available.</h1> </label>
        <p>Stay Hungry...! [;-{)]</p>
      </center>
       
    </div>
  </div>

  <?php

}

?>

   <script type="text/javascript" src="js/vanilla-tilt.bable.min"></script>
</body>
</html>