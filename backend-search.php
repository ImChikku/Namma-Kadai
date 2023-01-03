<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); 
}$conn = mysqli_connect("localhost", "root", "", "anbu");
?>
<html>

  <head>
    <title> Manager Login | NammaKadai</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/view_order_details.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
 
    <div class="col-xs-9">
      <div class="form-area"style="width:250%;color:blue;background-color:green;box-shadow:10px 10px 10px silver;border-radius:20px;margin-left:-100px;margin-top:30px;align:center;padding:5px">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align:center; font-size: 30px;"> Statement List </h3>

<center><button onclick="window.print()">Print</button></center>
<?php
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
$str=$_REQUEST["term"];
$sql ="SELECT * FROM orders WHERE username LIKE '%$str%'";
$stmt = mysqli_query($conn, $sql);
 if($stmt = mysqli_prepare($conn, $sql)){
       
 if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
	
if (mysqli_num_rows($result) > 0)
{
?>
<?PHP  ?>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th> Order ID </th>
        <th> Food ID </th>
        <th> Order Date </th>
        <th> Food Name </th>
        <th> Price </th>
        <th> Quantity </th>
        <th> Customer </th>
        <th>Payment</th>
      </tr>
    </thead>

    <?PHP
        while($row = mysqli_fetch_assoc($result)){
    
  ?>
  <tbody>
    <tr>
      <td><?php echo $row["order_ID"]; ?></td>
      <td><?php echo $row["F_ID"]; ?></td>
      <td><?php echo $row["order_date"]; ?></td>
      <td><?php echo $row["foodname"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
      <td><?php echo $row["username"]; ?></td>
      <td><?php echo $row["payment"]; ?></td>
    </tr>
  </tbody>

  <?php } ?>
  </table>
    <br>


  <?php } else{ ?>

  <h4><center>0 RESULTS</center> </h4>
  <?php } ?>
  <?php } else{ ?>
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

 <?php }
      mysqli_stmt_close($stmt);
?>
 <?php } mysqli_close($conn);} ?>
        </form>

        
        </div>
      
    </div>
</div>
<br>
<br>
<br>
<br>

</div></div>
 <button onclick="topFunction()" id="myBtn" title="Go to top" style="margin-left:150%;background-color:green;color:red">
      <b>^</b>
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

  </body>
</html>