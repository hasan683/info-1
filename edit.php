


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

$id = $_GET['id'];

$sql = "SELECT employe.phone,name, employee_attendence.in_time,out_time,date,employee_attendence.id
FROM employe
INNER JOIN employee_attendence ON employe.id=employee_attendence.employee_id  WHERE employee_id=$id";
$result = $conn->query($sql);

$conn->close();


?>


<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    td,th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

  </style>
</head>

<body>

<table>
  <tr>
    <th>id</th>
    <th>in_time</th>
    <th>out_time</th>
    <th>date</th>
    <th>name</th>

  </tr>

  <?php if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  ?>

  <style>
  .bg{
    background-color:red;
    border:1px solid red;
    color:white;
  }
  </style>

  <tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["in_time"] ?></td>
    <td><?php echo $row["out_time"] ?></td>
    <td><?php echo $row["date"] ?></td>
    <td><?php echo $row["name"] ?></td>
  </tr>

  <?php   }
} ?>

</table>

</body>

</html>