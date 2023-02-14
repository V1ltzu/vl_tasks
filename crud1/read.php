<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Reading Data from the database";
include '../layout/header.php';
include 'db.php';
$sql = "select * from studentinfo";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "<table>
    <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Group ID</th></tr>";
    while ($row = $result -> fetch_assoc()){
echo "
<tr>
<td><a href='updatesingle.php?id=$row[id]'</a>$row[id]</td>
<td>$row[fname]</td>
<td>$row[lname]</td>
<td>$row[city]</td>
<td>$row[groupid]</td>
</tr>
";
}  
echo "</table>";
}else{
    echo "NO Results";
}
$conn->close();
include '../layout/footer.php' 


?>