<?php include "header.php"?>
<h2></h2>
<?php
$age = $_POST['age'];

if ($age >= 18){
    echo "You can vote";
}else{
    echo "You can't vote";
}
?>
<?php include "footer.php"?>