<!DOCTYPE html>
<html>
<head>

</style>
</head>
<body>

<table>
  <tr>
    <th>ID </th>
    <th>NAME</th>
    <th>LASTNAME</th>
  </tr>
  <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "localhost";
$username = "portadmin";
$password = "PortNature280690";
$database = "portnature";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
else{
     echo 'connection successfull';
}


$sql = "SELECT * FROM posts WHERE `status` = '1' ORDER BY updated_at DESC";
$result = $conn->query($sql);
$ext = "";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $lang = (int)$row["category_id"];
    if ($lang > 98 && $lang < 123) {
      $ext = "blog-page/";
    }
    if ($lang > 122 && $lang < 153) {
      $ext = "blog-sayfasi/";
    }
    if ($lang > 152 && $lang < 171) {
      $ext = "blog-seite/";
    }
    if ($lang > 170 && $lang < 200) {
      $ext = "blog-stranica/";
    } 
    echo "<tr> <td>https://portnature.com.tr/".$ext.$row["slug"]."</td> </tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</table>

<body>


</body>
</html>