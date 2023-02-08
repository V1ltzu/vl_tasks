<?php include "header.php"?>

<h2></h2>
<h2></h2>
<h2></h2>
<h2></h2>
<h2>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday. Not August, this is Month-name so I don't have any holidays</h2>

<?php
$date = date('F');
if($date == "Aug") {
    echo "It's August, so it's still holiday";
}else {
    "Not august, this ".$date." so I don't have any holiday.";
}
?>

<h2>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. The color is not red.</h2>

<?php
$color = "red";

if ($color == "red") {
    echo "The color is red.";
}else {
    echo "The color is not red.";
}
?>

<h2>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
Excellent: >80; Great >70 & less than 80; Good >60 & less than 70; Pass >50 & less than 60 Fail </h2>

<?php

$total_score = 75;

if ($total_score > 80) {
    echo "Excellent";
} elseif ($total_score > 70){
    echo "Great";
} elseif ($total_score > 60){
    echo "Good";
} elseif ($total_score > 50){
    echo "Pass";
} else {
    echo "Fail";
}
?>

<h2>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h2>

<form action="action1.php" method="post"> 

<div class="form-group">
<div class="row">
    <div class="col">
<input type="text" name="name" required placeholder="Name" class="form-control"></div>
    <div class="col">
<input type="text" name="age" required placeholder="Age" class="form-control"></div>
</div>
<input type="submit" value="submit" class="btn btn-primary">

</form>

<h2></h2>
<h2>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….</h2>

<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if(strpos($user_agent, 'Edg')==true){
    echo "You're using Microsoft Edge";
}elseif(strpos($user_agent, 'Chrome')==true){
    echo "You're using Google Chrome";
}elseif(strpos($user_agent, 'Firefox')==true){
    echo "You're using Mozilla Firefox";
}else{
    echo "Your browser is something other";
}
?>

<?php include "footer.php"?>