


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

$sql = "SELECT id, name, phone, address,designation,salary,joining_date FROM employe";
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
    <th>name</th>
    <th>phone</th>
    <th>address</th>
    <th>designation</th>
    <th>salary</th>
    <th>joining_date</th>
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
    <td><?php echo $row["name"] ?></td>
    <td><?php echo $row["phone"] ?></td>
    <td><?php echo $row["address"] ?></td>
    <td><?php echo $row["designation"] ?></td>
    <td><?php echo $row["salary"] ?></td>
    <td><?php echo $row["joining_date"] ?></td>
    <td><a class="bg" href="edit.php?id=<?php echo $row["id"] ?>">attendence</a> </td>
    <!-- <td><a href="edit.php?id=<?php echo $row["id"] ?>"></a></td> -->
  </tr>

  <?php   }
} ?>

</table>

</body>

</html>