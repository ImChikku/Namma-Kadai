<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}

?>
<html>

  <head>
    <title> Manager Login | NammaKadai</title>
<style>
.list-group{
box-shadow:10px 10px 10px silver;

}
.list-group-a{
border:25px;
border-radius:10px solid red;
box-shadow:10px 10px 10px silver;

}
.list-group a:active{
box-shadow:2px 2px 20px aqua;
transform:translatey(5px);
cursor:grabbing;
}
</style>
  </head>

   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <link rel="stylesheet" type = "text/css" href ="css/view_order_details.css">
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
          <a class="navbar-brand" href="index.php">NammaKadai | Home</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav><div class="container"style="margin-top:180px;margin-left:85px;">
    <div class="container">
    	<div class="col">
    		</div></div>
    	
    		   
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group"><div class="list-group-a"></div>
    		<a href="mycanteen.php" class="list-group-item ">My Canteen</a>
    		<a href="view_food_items.php" class="list-group-item">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
		<a href="statement.php" class="list-group-item active">statement</a>
        <a href="view_order_details.php" class="list-group-item ">View Order Details</a>
    	</div>
    </div>
    


    </div>
    


    
    <div class="col-xs-9">
      <div class="form-area"style="color:blue;background-color:skyblue;border-radius:20px;margin-left:40%;margin-top:-30%;align:center;padding:0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-left: 25px; text-align: center; font-size: 30px;">SEARCH</h3>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){

        var inputVal = $(this).val();
        var result = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
             
                result.html(data);
            });
        } else{
            result.empty();
        }
    });
    

    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
   <div class="search-box">
        <input type="text"  placeholder="Search username...." />
     <select>  <option value="pay@fees">Pay@fees</option>
  
  <option value="cash">cashondelivery</option>  
   
</select>  
        <div class="result"></div>
    </div>

 <div id="display"></div>
</body>
</html>