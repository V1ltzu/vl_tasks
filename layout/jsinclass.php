<?php 
$title = "JavaScript Events and form validations";
include "header.php"
?>

<h2> A simple button to display date </h2>
<button onclick="this.innerHTML = Date()"></button>
<h2> Make a button and a placeholder as paragraph for the date </h2>
<button onclick="getElementById('p1').innerHTML = Date()"></button>
<p id="date"></p>
<h2> Change the background color </h2>
<form>
<input type="color" id="background" onchange="changeColor()">
</form>
<h2> Change the font color </h2>
<form>
<input type="color" id="fcolor" onchange="changeFColor()">
</form>
<h2> On mouse over & on mouse out </h2>

<span onmouseover="this.style.color='blue';
this.style.backgroundColor='yellow';
this.style.fontSize = '2em';" 
onmouseout="this.style.color='red';
this.style.backgroundColor='white';
this.style.fontSize = '2em';"> Some text </span> 

<?php include "footer.php"?>