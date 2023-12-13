<!Doctype html>
<html>
<head>
<center>
<body bgcolor="white">
<form name="Home" method="post">
<title>Blood Bank System</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<div class="topnav">
 <a class="active " href="index.php">Home</a>
 <a class="active " href="reg.php">Donar Register</a>
 <a class="active " href="reg1.php">Bloodbank Register</a>
 <a class="active " href="search1.php">Search</a>
 <div style="float:right;">
 <a class="active " href="location.html">location</a>
<a class="active " href="about.php">About</a>
<a class="active " href="mailto:someone@example.com">Mail to</a>
<a class="active " href="Reviews & Rating.php">Rate us</a>
</div>
</div>
<body style="background-color: rgba(255, 115, 0, 0.952)">

    <div align="center"><image style="width: 1200px; height: 629px;" src=Blood-Donation-1.jpg></div>
    <h1>
        <font color="">  
            WELCOME TO BLOOD BANK AND DONAR SITE
        </font> 
        </h1>
        <div align="center"><image src=heart.jpg></div>
        <h3>
            <font size="5"> Be the reason for someone's heartbeat.</font></h3>
</form>
</center>
    <footer class="footer" onclick="on()">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <ol><center>
                    <font color="white">
                      <font size="4"> 
                    
                        <h2><u>Terms And Conditions Before Donating Blood</u></h2> 
                    </center>
                    
                    <li >If donor is anemic donation is not acceptable.</li>
                    
                    <li >Person with hepatitis b and sexual transmitted disease like AIDS cannot donate blood.</li>
                    <li> If you have donated your blood than you should wait minimum of 3 months to donate the blood again.</li>
                    <li >Person with fever should not donate blood.</li>
                    
                    <li >If vacinated recently donation is not acceptable.</li>
                    <li> If any recent tattoos on your body blood donation is not acceptable.</li>
                    <li> No smoking and drinking alcohol before and after 12 to 24 hrs of donation.</li>
                    </ol>
                <h5 class="text-md-right">Contact Us</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form  action="" method="post" name="contact">
                    <fieldset class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Enter email">
                    </fieldset>
                    <fieldset class="form-group">
                        <textarea class="form-control" id="exampleMessage" name="message" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <input type="submit" name="submit" class="btn btn-secondary-outline btn-lg" value="submit"/>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
<div id="overlay" onclick="off()">
  </div>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>
</body>
</head>
<style>
          @import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300);
          body {
  overflow-x: hidden; /* Hide horizontal scrollbar */
}
footer {
    font-family: 'Alegreya Sans', sans-serif;
}
p {
    font-family: 'Times New Roman';
    align=left;

}
img { 
    margin-top: 50px; 
  }

/* Sticky footer position and size
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 300px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 300px;
}

/* Taller footer on small screens */
@media (max-width: 567em) {
    body {
      margin-bottom: 600px;
    }
    .footer {
      height: 430px;
    }
}

/* Sticky footer style and color
-------------------------------------------------- */
footer {
  padding-top: 30px;
  background-color: #292c2f;
  color: white;
}

footer a {
  color:white;
  text-decoration:none;
}

footer a:hover, footer a:focus {
  color: white;
  text-decoration:none;
  border-bottom:1px dotted #999;
}

footer .form-control {
    background-color: #1f2022;
    box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
    border: none;
    resize: none;
    color: white;
    padding: 0.7em 1em;
}
</style>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bbms";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST["submit"]))
{
 $inEmail=$_POST["mail"];
 $inMessage=$_POST["message"];
 $sql="insert into contact1 values('".$inEmail."','".$inMessage."')";
if(mysqli_query($conn,$sql))
{
?>
	<script type="text/javascript">alert('Records saved');</script>
<?php
}
else
{
?>
	<script type="text/javascript">alert('Some error occured in saving records');</script>
<?php	
	echo"Error in inserting data: ".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</html>
