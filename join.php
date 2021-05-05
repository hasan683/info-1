


  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT employe.name, employee_attendence.employee_id
FROM employe
INNER JOIN employee_attendence ON employe.id=employee_attendence.employee_id";
$result = $conn->query($sql);

$conn->close();


?>
