<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin_d.php"); 
}
?>


<html>

  <head>
    <title> domino | FoodList </title>
<style>

body,html {
  height: 100%;
}

body {

padding-top: 50px;
background-image: url('bgimg1.jpg'); 
background-color:black;
background-repeat: repeat;
background-size: cover;
background-position: center;
background: linear-gradient(-90deg,black, brown);
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
color: white;
}
.mypanel{
height:65%;
width:100%;

color:blue;box-shadow:1px 1px 10px silver,-1px -1px 10px silver;
padding:60px;
margin-top:10px;
text-align:center;
justify-content: center;
font-size:150%;
}
.mypanel.si{
height:60%;
width:;
padding:20px;

}
.mypanel:hover{
height:65%;
x-index:20%;

background-color:;
width:100%;
border:3px dotted skyblue; 
border-radius:5px;

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
<script>
  window.console = window.console || function(t) {};
</script>


  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


  </head>
<link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
 
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
            
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>


  <body bg-color="black">
  
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
            <li><a href="#"> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="logout_m.php"> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>

           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active" ><a href="dominofoodlist.php"><i class="fas fa-utensils"> Food Zone  </i></a></li>
            <li><a href="dominocart.php"><i class="fas fa-shopping-cart"> Cart (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </i> </a></li>
            <li><a href="logout_u.php"> Log Out </a></li>
           </ul>
  
 <?php        
}
else {

  ?>


<ul class="nav navbar-nav navbar-right">
            <li><a href="managersignup.php"style="margin-left:-40%;" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><b>Manager Signup</b></a>
		</li>
	    <li><a href="customersignup.php" style="margin-left:-40%;"class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><b>Customer Signup</b></a>
             </li>
</ul>
<?php
}
?>


        </div>

      </div>
    </nav>
    
    <div class="container" style="background-color:;box-shadow:1px 1px 10px silver,-1px -1px 100px silver;border-radius:20px;padding:20px;margin-top:50px;">
  <div style="padding:2%;border-radius:8px;background-color:;text-align:center;color:white;">
    <h1>Welcome To HoT domino</h1>      
  </div>

<?php

require 'connection.php';
$conn = Connect();

$sql = "SELECT * FROM FOOD WHERE shop_name='domino'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
  $count=0;

  while($row = mysqli_fetch_assoc($result)){
    if ($count == 0)
      echo "<div class='row'>";

?><div class="si" style="font-size:300%; ">
<div class="col-md-3">

<form method="post"  action="dominocart.php?action=add&id=<?php echo $row["F_ID"]; ?>">

<div class="mypanel" data-tilt  align="center";>
<div style="border-radius:20px;">
<div class="si" style="color:white;"><img src="<?php echo $row["images_path"]; ?>" class="img-responsive"></div></div>
<h4 class="text-dark" style="color:white;" ><?php echo $row["name"]; ?></h4>
<h5 class="text-info"style="color:white;"><?php echo $row["shop_name"]; ?></h5>
<h5 class="text-danger" style="color:white;">Price : &#8377;<?php echo $row["price"]; ?>/-</h5>
<h5 class="text-info" style="color:white;">Quantity:<input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 50%;margin-left:25%;"> </h5>
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">

<input type="hidden" name="hidden_shop_name" value="<?php echo $row["shop_name"]; ?>">
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

</body>
</html>