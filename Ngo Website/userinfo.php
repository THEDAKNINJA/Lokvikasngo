<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lokvikasdb";

//  Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if(!$conn) {
	die("connection failed: " . mysqli_connect_error());
}

$user = $_POST['user'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$sql = "INSERT INTO lokvikas (user, mobile, comment)
VALUES ('$user' ,'$mobile' ,'$comment')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('location:index.php')
?>