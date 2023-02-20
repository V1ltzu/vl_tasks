<?php
$title = "Php is interesting.";
include "header.php"
  ?>



<h1>My simple php script</h1>


<h2>3.1 Write a simple PHP script to print your information (Name and your groupid). </h2>
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

<h2>3.2 Write PHP code to display the following message: Hello world! My name is "David"</h2>

<?php
echo "Hello World! My name is \"David\"";
?>

<h2>3.3 Write the PHP code in to display the current date.</h2>

<script>
  document.write("Hello world blablalblasl");
</script>
<noscript>
  Please enable JavaScript to blablabla
</noscript>
<input type="button" onclick="hello()" value="Click Me">
<script>
  window.alert("This triggers and alert");
  window.alert(5+10);
</script>
<?php
echo date("D.d.M.Y")
  ?>

<h2>3.4
  <?php
  $title1 = "PHP is interesting.";
  echo "<h1 class='text-primary'>"  . $title1 . "</h1>" ?>
  </h2>

    <h2>3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3
      columns S.n., Name, and grade. Your table should look like the one below:</h2>

    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table>
    <tr>
    <th> S.N </th><th> Name </th><th> Grade </th>
    </tr>
    <tr>
    <td> 1 </td><td> Pekka </td><td> $g1 </td>
    </tr>
    <tr>
    <td> 2 </td><td> Johanna </td><td> $g2 </td>
    </tr>
    <tr>
    <td> 3 </td><td> John </td><td> $g3 </td>
    </tr>
    </table>
    ";
    ?>

    <h2>4. Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php. </h2>

    <img src="photo.png" alt="photo" width="700px" height="300px">

  <button onclick="add()">Click to add</button>
  <hr>
  <p id="place1" style="color:red; background-color:yellow;"> </p>
  <span id="place2" style="color:red; background-color:green;"> </span>
  <script>
    document.getElementById("place1").innerHTML = "This will go to place1";
    document.getElementById("place2").innerHTML = "This will go to span";

    <h2>Changing background-color</h2>
    <form>
    <input type="color" name >

    <?php
    include "footer.php"
      ?>