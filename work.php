
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

$sql = "SELECT id,work,date,employee_id FROM work";
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
    <th>work</th>
    <th>date</th>
    <th>employee_id</th>
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
    <td><?php echo $row["work"] ?></td>
    <td><?php echo $row["date"] ?></td>
    <td><?php echo $row["employee_id"] ?></td>
    <td><a class="bg" href="edit.php?id=<?php echo $row["id"] ?>">work</a> </td>
    <!-- <td><a href="edit.php?id=<?php echo $row["id"] ?>"></a></td> -->
  </tr>

  <?php   }
} ?>

</table>

</body>

</html>