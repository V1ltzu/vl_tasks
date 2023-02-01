<?php
$title = "Php is interesting.";
include "layout/header.php"
  ?>



<h1>My simple php script</h1>


<h1>Write a simple PHP script to print your information (Name and your groupid). </h1>
<?php
//opening tag
echo "Ville Lehtonen";
echo "<br>";
echo "BBCAP22";
echo "<br>";

echo "Hello World";
echo "<br>";
echo "This is new line";
?>

<h1>Write PHP code to display the following message: Hello world! My name is "David"</h1>

<?php
echo "Hello World! My name is \"David\"";
?>

<h1>Write the PHP code in to display the current date.</h1>

<?php
echo date("D.d.M.Y")
  ?>

<h1>
  <?php echo $title = "PHP is interesting." ?>
  <h1>

    <h1>$g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3
      columns S.n., Name, and grade. Your table should look like the one below:</h1>

    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    $students = array(
      array("1", "Student 1", $g1),
      array("2", "Student 2", $g2),
      array("3", "Student 3", $g3)
    );
    for ($row = 0; $row < 3; $row++) {
      echo "<tr>";
      for ($col = 0; $col < 3; $col++) {
        echo "<td>" . $students[$row][$col] . "</td>";
      }
      echo "</tr>";
    }
    ?>

    <?php
    include "layout/footer.php"
      ?>