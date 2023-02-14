<?php 
$title = "Update your info";
include '../layout/header.php'
?>

<?php
$a = $_GET['id'];
include 'db.php';
$result = mysqli_query($conn,"Select * from studentinfo where id='$a'");
$row = mysqli_fetch_array($result);
?>
<h2> Update your information below.</h2>
<form name="update" method="post" action="">;
<input type="text" name="fname" placeholder="First name" required:value="<?php echo $row['fname'];?>">
<input type="text" name="lname" placeholder="Last name" required:value="<?php echo $row['fname'];?>">
<input type="text" name="city" placeholder="City" required:value="<?php echo $row['fname'];?>">
<select name="groupid">
    <option value="BBCAP22"> BBCAP22 </option>
    <option value="BBCAP21"> BBCAP21 </option>
    <option value="Others"> Others </option>
</select><br><br>
<input type="submit" value="Update your Info" name="update"><br>
<input type="submit" value="Delete your Info" name="delete"><br>
</form>

<?php 
if (isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname'");
}
if ($query){
    echo "<h2>The info is updated</h2>";
}


if (isset($_POST['delete'])){

    $query = mysqli_query($conn, "DELETE FROM studentinfo WHERE id='$id'");

    if($query){

        echo "<h2>The info is deleted</h2>";
}else{
    echo "The info wasn't deleted";
}
}
?>

<?php 
include '../layout/footer.php'
?>