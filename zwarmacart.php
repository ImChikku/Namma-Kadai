<?php
session_start();
require 'connection.php';
$conn = Connect();
?>

<html>

  <head>
    <title> Cart | NammaKadai</title>
  </head>
 <link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/cart.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  
  <body style="background:linear-gradient(-180deg,black, silver,black);">

  
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
            
            <li class="active" ><a href="zwarmafoodlist.php"><i class="fas fa-utensils"> Food Zone  </i></a></li>
            <li><a href="zwarmacart.php"><i class="fas fa-shopping-cart"> Cart(<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)  </i> </a></li>
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

    
<?php
if(!empty($_SESSION["cart"]))
{
  ?>
  <div class="container" style="width:100%;background-color:red;padding:20px;background:linear-gradient(-180deg,black, silver,black);">
      <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Looks tasty...!!!</p>
        
      </div>

      <div class="table-responsive" style="padding-left: 100px; padding-right: 100px;background:linear-gradient(-180deg,black, silver,black);border:10px double white;border-radius:20px;padding:20px;margin-top:50px;" >
<table class="table table-striped" style="background:linear-gradient(-180deg,black, silver,black);" >
  <thead class="thead-dark"style="color:orange;background-color:brown;">
<tr>
<th width="40%">Food Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price Details</th>
<th width="15%">Order Total</th>
<th width="5%">Action</th>
</tr>
</thead>


<?php  

$total = 0;
foreach($_SESSION["cart"] as $keys => $values)
{
?>
<tr style="background: linear-gradient(-90deg,lightgreen, white,lightblue);">
<td><?php echo $values["food_name"]; ?></td>
<td><?php echo $values["food_quantity"] ?></td>
<td>&#8377; <?php echo $values["food_price"]; ?></td>
<td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
<td><a href="zwarmacart.php?action=delete&id=<?php echo $values["food_id"]; ?>">Remove</a></td>
</tr>

<?php 
$total = $total + ($values["food_quantity"] * $values["food_price"]);
}
?>

<tr style="color:red;background: linear-gradient(-90deg,lightgreen, white,lightblue);">
<td colspan="3" align="justify">Total</td>
<td align="justify" >&#8377; <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
</table>
   
<?php
  echo '<a href="zwarmacart.php?action=empty"><button class="btn btn-danger"> Empty Cart</button></a>&nbsp;<a href="zwarmafoodlist.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;<a href="zwarmapayment.php"><button class="btn btn-success pull-right">Check Out</button></a>';
?>
</div>
<br><br><br><br><br><br><br>
<?php
}
if(empty($_SESSION["cart"]))
{
  ?> 
  <div class="container" style="background:linear-gradient(-180deg,black, silver);padding:20px;margin-top:2%;color:black">
  <div class="jumbotron">
        <h1>Your Shopping Cart</h1>
        <p>Oops! We can't smell any food here. Go back and <a href="zwarmafoodlist.php">order now.</a></p>
        
      </div>
      
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
}

?>


<?php

if(isset($_POST["add"]))
{
if(isset($_SESSION["cart"]))
{
$item_array_id = array_column($_SESSION["cart"], "food_id");
if(!in_array($_GET["hidden_name"], $item_array_id))
{
$count = count($_SESSION["cart"]);

$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'shop_name' => $_POST["hidden_shop_name"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][$count] = $item_array;
echo '<script>window.location="zwarmacart.php"</script>';
}
else
{
echo '<script>alert("Products already added to cart")</script>';
echo '<script>window.location="zwarmacart.php"</script>';
}
}
else
{
$item_array = array(
'food_id' => $_GET["id"],
'food_name' => $_POST["hidden_name"],
'food_price' => $_POST["hidden_price"],
'R_ID' => $_POST["hidden_RID"],
'shop_name' => $_POST["hidden_shop_name"],
'food_quantity' => $_POST["quantity"]
);
$_SESSION["cart"][0] = $item_array;

}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["cart"] as $keys => $values)
{
if($values["food_id"] == $_GET["id"])
{
unset($_SESSION["cart"][$keys]);
echo '<script>alert("Food has been removed")</script>';
echo '<script>window.location="zwarmacart.php"</script>';
}
}
}
}

if(isset($_GET["action"]))
{
if($_GET["action"] == "empty")
{
foreach($_SESSION["cart"] as $keys => $values)
{

unset($_SESSION["cart"]);
echo '<script>alert("Cart is made empty!")</script>';
echo '<script>window.location="zwarmacart.php"</script>';

}
}
}


?>
<?php

?>

    </body>
</html>