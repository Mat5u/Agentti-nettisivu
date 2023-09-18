<?php
    //tiedosto: malli.php
    include ("class_malli.php");
?>
<h2><?php 
    $auto = new auto();

    $bmw = new auto();

    echo "<br>".$auto->details();

    echo "<br>".$bmw->details();

?></h2>

<?php
    echo "<br>renkaat ".$auto->renkaat;

    $volvo = new rekka();
    echo "<br>rekassa on ". $volvo->renkaat. " rengasta<br>";
    echo "<br>".$volvo->details();
?>