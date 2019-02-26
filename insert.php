<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datauser1";

// Create connection
$title = $_POST['title'];
$content = $_POST['content'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO post VALUES ('','$title', '$content')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("location:utama.php");

mysqli_close($conn);
?>

   