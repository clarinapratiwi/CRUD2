<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datauser1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Title: " . $row["title"]. "- Content: " . substr($row["content"], 0,1000);
        echo "<a href='edit.php?id=".$row["id"]."'>Edit</a>";
        echo " <a onclick=\"return confirm('Are you sure deleting this post?');\"
        href ='delete.php?id=".$row["id"]."'>Hapus</a><br/><br/>";

    }
} else {
    echo "0 results";
}
echo "<a href='utama.php'> Back </a>"; 
$conn->close();
?>