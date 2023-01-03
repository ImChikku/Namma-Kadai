 <?php
include('login_m.php'); 

if(isset($_SESSION['login_user1'])){
header("location: view_food_items.php");
}
?>

<html>

  <head>
    <title> Manager Login | NammaKadai </title>
<style>
input[type="checkbox"]
{
position:fixed;
top:90%;
left:80px;
cursor:pointer;
-webkit-appearance:none;
}
</style>
  </head><link rel="stylesheet" type = "text/css" href ="css/index.css">
               <link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">
  <link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body style="background-color:black;">

  <input type="checkbox" name="">

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
    
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<ul class="nav navbar-nav navbar-right">
            <li><a href="managersignup.php"style="margin-left:-40%;" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><b>Manager Signup</b></a>
		</li>
	    <li><a href="customersignup.php" style="margin-left:-40%;"class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><b>Customer Signup</b></a>
             </li>
</ul>
        </div>

      </div>
    </nav>

            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
 
            </ul>
            </li>
          </ul>
        </div>

      </div>
    </nav>



    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary"style="width:80%;padding:3px;">
          <div class="panel-heading"style="background-color:silver;"> Manager Login </div>
        <div class="panel-body" style="background-color:black;color:white">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span><i class="fas fa-user"> Username: </i></label>
            <div class="input-group" style="align:right;">
              <input class="form-control" style="margin-right:100px;" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
            
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span><i class="fas fa-key"> Password: </i></label>
            <div class="input-group" >
              <input class="form-control"  style="margin-right:100px;" id="password" type="password" name="password" placeholder="Password" required="">
              
            </div>           
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>

          </div>

        </div>
        <label style="margin-left: 5px;">or</label> <br>
       <label style="margin-left: 5px;"><a href="managersignup.php">Create a new account.</a></label>
       

        </form>

        </div>
        
      </div>

    </div>
<div class="anim"style="padding-left:1%;margin-left:78%;margin-top:37%;">Developed by &#x1F609;</div>

    </div>

    </body>
</html>