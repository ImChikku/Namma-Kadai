<?php
session_start();
?>

<html>

  <head>
    <title> About |NammaKadai </title>
  </head>
  <link rel="stylesheet" type = "text/css" href ="css\index.css">
  <link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
   <link rel="stylesheet" type = "text/css" href ="css\bootstrap.min.css">
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


   <nav class="navbar navbar-inverse navbar-fixed-top"role="navigation">
   <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                   <a class="navbar-brand" href="index.php"><i class="fas fa-home">NammaKadai | Home</i></a>
</div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="aboutus.php">About</a></li>
            <li class="passive"><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>
         <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="mycanteen.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php">Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php">Log Out </a></li>
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
</ul><?php
}
?>
        </div>
      </div>
    </nav>

            <div class="wide"  style="height:100%;width:100%;background-color:black;padding:40px;margin-top:0%;"align="center"> 
        <div class="tagline">Life Is A<font color="red"><strong>Game</strong></font>Play To<font color="green"><strong><em>Win</em>.</strong></font>
        <h3 style="color: red">About the food in our Shopping Mall</h3>
        <h3 style="color: blue">Order food & beverages online from Class. <h3 style="color:green">We didn't deliver food if you order something you must give the order id</h3><h3 style="color : green">  Chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway, Faasos, Cafe Coffee Day, Taco Bell, and more. Exciting bit?</h3><h3 style="color : green"> We place no minimum order restrictions! Order in as little (or as much) as you'd like.</h3></h3>
 </div>
<div class="anim"style="padding-left:1%;margin-top:40%;">Developed by &#x1F609;</div>

 </div> 
</body>
</html>