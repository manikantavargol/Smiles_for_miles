<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>PackageImage</th>
<th>PackageId</th>
<th>PackageName</th>
<th>PackageType</th>
<th>packageLocation</th>
<th>PackageFetures</th>
<th>PackagePrice</th>

</tr>
<?php
session_start();
error_reporting(0);
include('includes/config.php');

$sql = "SELECT * FROM tblsearch";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["PackageId"].  "</td><td>"
. $row["PackageName"]. "</td></tr>";  "<tr><td>" . $row["</td><td>" . $row["PackageImage"] ."PackageType"]. "</td><td>" . $row["PackageLocation"] . "</td><td>"
. $row["PackageFetures"]. "</td><td>" . $row["PackagePrice"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>