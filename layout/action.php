<?php include "header.php"; 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$color = $_POST['color'];
$dob = $_POST['dob'];

echo "<h4> Your name is $fname $lname /. Your favourite color is $color and your date of birth is $dob. </h4>";
?>

<?php include "footer.php" ?>