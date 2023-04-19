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
$sql ="INSERT INTO presonal_details_student(firstname,lastname,email,age,mobile_no,father_name,mother_name,Birth_date)
VALUES('$_GET[firstname]', '$_GET[lastname]','$_GET[email]', '$_GET[age]','$_GET[mobile_no]','$_GET[fname]','$_GET[mname]','$_GET[bdate]')";



if($conn->query($sql)===TRUE)
{

echo " Personal data inserd";
}
else
{
	echo "error :".$sql."<br>".$conn->error;
}
$conn->close();

?>
<link rel="stylesheet" href="restyle.css">
<div class="container">
<form class="" action="conn2.php"  method="GET">
<p>10th class Details</p>
<span id="item1">
   School Name<input type="text" placeholder="Enter your School Name" name="sname" required>

  Percentage<input type="text" placeholder="Enter your 10th Percentage" name="per" required>

  Seat No<input type="text" placeholder="Enter your 10th Seat No" name="seat" required>

 School Address<input type="text"  placeholder="Enter your School Address "name="sadd" required>

Board of school<input type="text"  placeholder="Enter your School Board "name="board" required>


State<input type="text" placeholder="Enter your State Name" name="state" required>


 District<input type="text"  placeholder="Enter your school District Name" name="dist" required>






<input type="submit" id="btn" name="" value="next">
</span>



</form>
</div>
</body>
</html>
