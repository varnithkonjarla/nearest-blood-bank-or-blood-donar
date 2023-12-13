<!DOCTYPE html>
<html>
<body >
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <div class="topnav">
        <a class="active " href="index.php">Home</a>
        <a class="active " href="reg.php">Donar Register</a>
        <a class="active " href="reg1.php">Bloodbank Register</a>
        <a class="active " href="search1.php">Search</a>
        <div style="float:right;">
        <a class="active " href="location.html">location</a>
       <a class="active " href="about.php" >About</a>
       <a class="active " href="mailto:someone@example.com">Mail to</a>
       <a class="active " href="Reviews & Rating.php">Rate us</a>
       </div>
       </div>
<form action="" method="post" name="reviews">
  <p></p>
   <table  align="center" width="60%" style="box-shadow: 2px 4px 8px silver; padding: 30px;">
       <tr>
           <td>
               <h2>Rate us and support &#128543;:</h2>
           </td>
       </tr>
       <tr>
           <td><h3 style="background-color: rgba(255, 255, 0, 0.658);">
           <input type="radio" name="star" value="1" id="one">1 
           <input type="radio" name="star" value="2" id="two">2 
           <input type="radio" name="star" value="3" id="three">3 
           <input type="radio" name="star" value="4" id="four">4 
           <input type="radio" name="star" value="5" id="five">5</h3></td>
       </tr>
       <tr>
           <td></td>
       </tr>
    <tr>
        <td><h2>Write Reviews :</h2> </td>
    </tr>
    <tr>
        <td><font size="5">Name:<input type="text" name="name" required/></td>
</tr>
<tr>
    <td  colspan="2">
    <textarea cols="100" rows="15" class="form-control" id="exampleMessage" name="review" placeholder="Reviews" ></textarea>
</td>
</tr>
<center><tr>
                    <td colspan="2"><center><input type="submit" value="Submit" name="b1"/></td>
</tr></center>
    </table>
</center>
    </form>
    <?php
include "connection.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $inrew=$_POST["review"];
 $name=$_POST["name"];
 $star=$_POST["star"];
 $sql="insert into reviews values('".$inrew."','".$name."','".$star."')";
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
 </body>
</html>
