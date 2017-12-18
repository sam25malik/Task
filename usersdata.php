<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "responses";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, u_name, u_email, u_dob, u_aad, u_area, u_amount FROM tb_cform";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["u_name"]. "Email: " . $row["u_email"]. " Area- " . $row["u_area"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>