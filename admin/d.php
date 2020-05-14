
    <?php
session_start();
include("../db.php");



?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshop";
// Create connection
$conn = new mysqli("localhost", "root","");
$db=mysqli_select_db($conn,"onlineshop");
$sql = 'SELECT * from user_info';
if (mysqli_query($conn, $sql)) 
{
echo "";
} 
else
 {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
echo'<?php mysqli_num_rows($result) ; ?> ';
?>