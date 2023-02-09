<?php include "header.php"?>

<h2>1.  Write a php script to display courses as list. Use li
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")</h2>

<?php 
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "<ul>";
foreach ($courses as $course){
echo "<li>" . $course . "</li>";
}
echo "</ul>"
?>

<h2>2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");</h2>

<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);
print_r($courses1)
?>

<h2>3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key</h2>

<?php 
$courses3=array("PHP"=>1, "HTML"=>2, "JavaScript"=>3, "CMS"=>4, "Project"=>5);
sort($courses3);
print_r($courses3);
$courses3=array("PHP"=>1, "HTML"=>2, "JavaScript"=>3, "CMS"=>4, "Project"=>5);
ksort($courses3);
echo "Sort (values):";
print_r($courses3);
$courses3=array("PHP"=>1, "HTML"=>2, "JavaScript"=>3, "CMS"=>4, "Project"=>5);
rsort($courses3);
echo "Sort (values):";
print_r($courses3);
$courses3=array("PHP"=>1, "HTML"=>2, "JavaScript"=>3, "CMS"=>4, "Project"=>5);
krsort($courses3);
echo "Sort (values):";
print_r($courses3);
?>

<h2>4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");</h2>

 <?php
 $courses4=array("php", "html", "javascript", "cms", "project");
 print_r(array_change_key_case($courses4,CASE_UPPER));
 ?>

 <h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h2>

 <?php 
 $color = array("#454B1B" => "Green", "#000000" => "Black");
    foreach($color as $hex => $colors){

     echo "Hex code" . $hex . "color" . $colors;
    }
  ?>

<h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
74, 62, 62, 65, 64, 68, 73, 75, 79, 73</h2>

<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$sum = array_sum($temperatures);
$count = count($temperatures);
$average = $sum / $count;

sort($temperatures);

$lowest_five = array_slice($temperatures, 0, 5);
$highest_five = array_slice($temperatures, -5);

echo "Avg temperature:" . $average;
echo "Five lowest:" . implode(",", $lowest_five);
echo "Five highest:" . implode(",", $highest_five);
?>

<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1" step="any">
    <input type="number" placeholder="Enter your second number" name="num2" step="any">
    <select name="operator">
        <option value ="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
        <option value="div">Divide</option>
    </select>
    <input type="submit" name= "calculate" value="Calcute">
</form>

<?php 
if (isset($_GET["cal"])){
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operator = $_GET["operator"];
switch($operator){
case "add":
$result = $num1 + $num2;
            break;
case "sub":
$result = $num1 - $num2;
            break;
case "mul":
$result = $num1 * $num2;
            break;
case "div":
$result = $num1 / $num2;
            break;

            default:
            $result= "Error; You haven't selected the correct operator.";
}

    if (isset($result))
        echo "Result: $result";
}
?>

<?php include "footer.php"?>