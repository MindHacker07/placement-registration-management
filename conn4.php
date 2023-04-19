<html>
<body>

<h1> Registration scuccessfully!!!</h1>
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
$sql ="INSERT INTO current_clg_details(current_clg_name,percentage,seat_no,address,board_of_education,state,dist,branch)
VALUES('$_GET[sname]', '$_GET[per]','$_GET[seat]', '$_GET[sadd]','$_GET[board]','$_GET[state]','$_GET[dist]','$_GET[branch]')";



if($conn->query($sql)===TRUE)
{

echo " current clg data inserted";
}
else
{
	echo "error :".$sql."<br>".$conn->error;
}

$conn->close();

?>
<link rel="stylesheet" href="restyle.css">



</body>
</html>
