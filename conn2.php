<html>
<body>

<?php


// Create connection

define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "mydb");
 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

//$conn=new mysqli($servername, $username, $password, "login");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql ="INSERT INTO education_details(school_name,percentage,seat_no,address,board_of_education,state,dist)
VALUES('$_GET[sname]', '$_GET[per]','$_GET[seat]', '$_GET[sadd]','$_GET[board]','$_GET[state]','$_GET[dist]')";



if($conn->query($sql)===TRUE)
{

echo " 10th Details Inserd";
}
else
{
	echo "error :".$sql."<br>".$conn->error;
}
$conn->close();

?>
<link rel="stylesheet" href="restyle.css">
<div class="container">
<form class="" action="conn3.php"  method="GET">
<p>12th/Diploma Details</p>
<span id="item1">
   collage Name<input type="text" placeholder="Enter your Diploma/12th Collage Name" name="sname" required>

  Percentage<input type="text" placeholder="Enter your Diploma/12th Percentage" name="per" required>

  Seat No<input type="text" placeholder="Enter your Diploma/12th Seat No" name="seat" required>

 Collage Address<input type="text"  placeholder="Enter your collage Address "name="sadd" required>

Board of Education<input type="text"  placeholder="Enter your the Board name "name="board" required>


State<input type="text" placeholder="Enter State Name" name="state" required>


 District<input type="text"  placeholder="Enter your collage District Name" name="dist" required>






<input type="submit" id="btn" name="" value="next">
</span>



</form>
</div>


</body>
</html>
