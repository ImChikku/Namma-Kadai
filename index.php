<?php
session_start();
?>

<html>
<head>
<style>.header{
padding-top:3%;
height:55px;
width:100%;
color:skyblue;
font-family: "Times New Roman";
text-align:center;
border-radius:8px;
font-size:23;
}
.header p{
padding-top:15px;
}
.button{
height:100%;
width:100%;

border-radius:20px;
box-shadow:0 8px 0 yellow;
color:white;
cursor:grab;
margin-top:7px;
padding-left:17px ;
}
.button:active{
box-shadow:2px 2px 0 black;
transform:translatey(5px);
cursor:grabbing;
}
a{
color:white;
}
.outbox{
left:2%;
width:95%;
border-radius:50px;
border:10px solid black;
position: relative;
overflow:hidden;
}
.slider{
position:relative;
height:360px;
width:700%;
opacity: 0.8;
animation-name:kutty;
animation-duration:10s;
animation-itearation-count:3;
}
.slider img{

float:left;
}
@keyframes kutty{
0%{
left:0%;
}
25%{
left:-125%;
}
50%{
left:-250%;
}
75%{
left:-325%;
}
100%{
left:-450%;
}
}
#navlist {
 position:relative;
}

#navlist li {
overflow:hidden;
 
  padding: 0px;
  list-style-type: none;
 box-shadow:10px 10px 4px red;	
 border-radius:18px;
  top: 0;
  opacity: 0.8;
 
}

#navlist li, #navlist a {
  top: 30%;
  height: 200px;
  display: block;
 position:relative;
cursor:grab;
}

#kfc {
  position:fixed;
  left: 10%;
  width:15%;
  background: url('KFC.jpg') 50% 0;
  opacity: 7;
 
}

#mcdonalds {
  position:fixed;
  margin-top:5%;
  left: 10%;
  width:15%;
  background: url('mcdonalds.jpg') 50% 50%;
 
}

#dominos {
     position:fixed;
  margin-top:-15.8%;
  left: 40%;
  width:15%;
  background: url('DOMINOS.jpg') 50% 0;
}
#grill {
     position:fixed;
  margin-top:-15.8%;
  left: 40%;
  width:15%;
  background: url('grill.jpg') 50% 0;
}

#burgur {
 position:fixed;
  margin-top:-15.8%;
  left:70%;
  width: 15%;
  color:red;
  background-color:red;
  background: url('BURGUR.jpg') 50% 50%;
}
#zawarma {
 position:fixed;
  margin-top:-15.8%;
  left:70%;
  width: 15%;
  color:red;
  background-color:red;
  background: url('zawarma.png') 50% 50%;
}

#navlist li:active{
box-shadow:2px 4px 4px yellow;
transform:translatey(2px);
cursor:grabbing;
}
#navlist li:hover{
cursor:grab;
z-index:100%;
width:16%;height: 206px;
}
.scroll{
height:220px;
width:15%;
margin-top:83px;
text-align:center;
border:5px double red;
border-radius:25px;
margin-left:1135px;
position:fixed;
opacity: 0.8;
}
.anim{
position:absolute;
animation:mat 2s infinite;
width:11%;
color:blue;
margin-top:2%;
margin-left:80%;

border-radius:10px;
border:5px double blue;
cursor:not-allowed;
}
@webkit-keyframes mat{
from{
border:1px solid green;
}to{
border:10px dotted red;
}}
@keyframes mat{
from{
box-shadow:0px 0px 0px #222222;
}to{
box-shadow:5px 5px 5px #999999;
}
}

.img{
min-height:100%;
min-width:100%;
position:fixed;
opacity: 0.3;
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
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color: darkgreen;
  color: white;
}

.wide {
  width:100%;
  height:100%;
  height:calc(100% - 1px);
  background-image:url('headerimg1.jpg');
  background-size:cover;
}

.wide img {
  width:100%;
  border-radius: 10px;

}

.tagline {
  text-align: center;
  font-size: 50px;
  color: white;
  text-shadow: 2px 2px 5px darkgrey;
  font-family: "Times New Roman";
  transform: translate(-50%, -50%);
  position: absolute;
  top: 40%;
  left: 50%;
}

.logo {
  color:#fff;
  font-weight:800;
  font-size:14pt;
  padding:25px;

  text-align:center;
}

.lee {
position:relative;
  width:6em;

border-right:2px solid red;
font-size:180%;

  white-space:nowrap;
  overflow:hidden;
 transform:translatey(5%);
}
.leee {
position:relative;
  width:6em;

margin-left:40%;
border-right:2px solid red;
font-size:180%;
text-align:center;
  white-space:nowrap;
  overflow:hidden;
 transform:translatey(5%);
}
.leen {
position:relative;
  width:6em;

margin-left:70%;
border-right:2px solid red;
font-size:180%;
text-align:right;
  white-space:nowrap;
  overflow:hidden;
 transform:translatey(5%);
}
.anim-typewriter{
color:gold;
animation:typewriter 2s steps(9) 1s infinite normal both,
blinktextcursor 190ms steps(9) infinite normal;
}
@keyframes typewriter{
from{
 width:0;
}
to{
width:6em;
}
}
@keyframes blinktextcursor{
from{
 border-right-color:red;
}
to{
border-right-color:transparent;
}
}
.order{ 
  border-radius: 25px;
  border: 5px double green;
  padding: 10px;
  margin-left: 34.5%;
  width: 30%;
  height: 160px;
  text-align: center;
}


.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Times Roman New"
  font-size: 20px;
  background-color: black;
  color: white;
}




.wide2{
  width:100%;
  height: 100%;
  height:calc(100% - 1px);
}
.box{
  top: 10px;
  color:black;
    text-align:center;

}

.tickicon{
  color: green;
}



.bg-4{
  background-color: blue;
  color:skyblue;

}

footer{
  display: block;
}

.wide {
  width:100%;
  height:100%;
  height:calc(100% - 1px);
  background-size:cover;
}

.wide img {
  width:100%;
  border-radius: 10px;

}

.tagline {
  text-align: center;
  font-size: 50px;
  text-shadow: 2px 2px 10px black;
  color: white;
  font-family: "Times New Roman";
  padding-top: 12%;
}

.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Sans serif";
  background-color: #DCDCDC;
}

.paragraph2 {
  background-color: #FAFAFA;
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border: 1px solid GREY;

 }

.goldcolor{
  color: #D4AF37;

}

.form-area {
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border-radius:50px;
  border: 3px solid blue;
  opacity:0.9;
}



.heading {
  text-align: center;
  background-color:;
  padding: 30px;
  font-size: 40px;
}


.paragraph1{
  text-align: center;
  padding: 60px;
  font-family: "Times Roman New"
  font-size: 20px;
  background-color: black;
  color: white;
}



.edit{
  text-shadow: 2px 2px 5px lightgreen;
  color: green;
}


.edit2{
  font-size: 20px;
}


.missionbox{
  border-radius: 20px;
  background-color: green;
  color: white;
  border: 2px solid yellow;
  box-shadow: 2px 2px 100px black;
  padding: 20px;
  margin-left: 5%;
  width: 90%;
  height: 120px;
  text-align: center;
}

.missionfont{
  font-size: 45px;
}

.paragraph3{
  text-align: center;
  padding: 60px;
  height: 250px;
  font-family: "Sans serif";
  background-color: #DCDCDC;
}

.darkgoldcolor{
  color: #996515;

}
  </style>
     </head>
  <link rel="stylesheet" type = "text/css" href ="fontawesome-free-5.15.1-web/css/all.min.css">

   <link rel="stylesheet" type = "text/css" href ="css\bootstrap.min.css">
      

  <body style="width:100%;">
    <button onclick="topFunction()" id="myBtn" title="Go to top">
     <b><u>^</u><b/>
    </button>
    <script type="text/javascript">


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


  <nav class="navbar navbar-inverse navbar-sticky-bottom"role="navigation">
      <div class="container">
        <div class="navbar-header">
        
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
    <span class="navbar-toggler-icon"></span>
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          <a class="navbar-brand" href="index.php"><i class="fas fa-home">NammaKadai | Home</i></a>
        </div>
         <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav" >
            <li><a href="aboutus.php" >About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>  
          </ul>
	  <?php
	   if(isset($_SESSION['login_user1'])){
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">  Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="mycanteen.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php">Log Out </a></li>
          </ul>
	<?php
	}
	else if (isset($_SESSION['login_user2'])) {
  	?>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#">  Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
        <li><a href="cart.php"><i class="fas fa-shopping-cart"> Cart (<?php if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </i></a></li>
        <li><a href="logout_u.php"><i class="fas fa-sign-out-alt"> Log Out </i></a></li>
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
<div class="container" style="width:100%;background-color:black;margin-top:-1.7%;align:center;">
<marquee><b><i><u>This site under process please wait few mins.</u></i></b></marquee>
<div style="margin-top:2px;padding:10px;">
<ul id="navlist">

<li id="kfc"><a href="kfcfoodlist.php"></a></li>
<li id="dominos"><a href="dominofoodlist.php"></a></li>
<li id="burgur"><a href="burgurfoodlist.php"></a></li>
<li id="mcdonalds"><a href="mcdonaldfoodlist.php"></a></li>
<li id="grill"><a href="grillfoodlist.php"></a></li>
<li id="zawarma"><a href="zwarmafoodlist.php"></a></li>
</div>
</ul>
</div>
   <div class="anim"style="padding-left:1%;margin-top:150px;">Developed by &#x1F609;</div>
  </div>
<div class="footer" style="background-color:black;height:200px;color:white;text-align:center"><center><u>By The Team Work</u></center><center>MCA</center>
<div style="align:center;"><br>&#10053<br>&#10044<br>&#10053<br>&#10044<br>&#10053<br>&#10044
<div style="margin-top:-7.7%;width:20%;margin-left:33%;">SANTHOSH GANDHI </div><div style="width:20%;margin-left:45%;margin-top:-1.5%;">720721207049</div><br><div style="width:20%;margin-left:33.8%;">MATHAN KUMAR</div> <div style="width:20%;margin-left:45%;margin-top:-1.4%;">720721207033
</div></div></div></div>

</body>
</html>