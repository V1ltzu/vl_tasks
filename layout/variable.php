<?php include "header.php" ?>

<h3> Exercise 3.</h3>

<h2>1. Create a simple html form to get Firstname and Lastname from the user and use echo statement to print using h3 tag: Hello …., You are welcome to my site.</h2>

<form action="action.php" method="post"> 

<div class="form-group">
<div class="row">
    <div class="col">
<input type="text" name="fname" required placeholder="First Name" class="form-control"></div>
    <div class="col">
<input type="text" name="lname" required placeholder="Last Name" class="form-control"></div>
</div>

<div class="form-group">
<div class="row">
<div class="col">
<input type="date" name="dob" required placeholder="Date of Birth" class="form-control"></div>
    <div class="col">
<input type="color" name="color" required placeholder="Favourite color" class="form-control"></div>
</div>
<input type="submit" value="submit" class="btn btn-primary">

</form>

<h2>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5. </h2>

<table class="table">
    
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Pekka</td>
      <td>5</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Johanna</td>
      <td>4</td>
    </tr>
    <tr>
      <td>3</td>
      <td>John</td>
      <td>5</td>
    </tr>
  </tbody>
</table>

<h2>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)</h2>

<?php

$name = "Eero";
$lname = "Ylitalo";

$fullname = "My name is" . $name . $lname;

echo strlen($fullname);
?>

<h2>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h2>

<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

echo $num1 + $num2 + $num3;
?>

<h2>6. Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h2>

<?php 
echo $_SERVER['HTTP_USER_AGENT']
?>

<style>

.btn {
    color: black;
}

.table {
    color: white;
}

</style>

<?php include "footer.php" ?>
