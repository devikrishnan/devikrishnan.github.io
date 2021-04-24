<?php 
     $x1=$_REQUEST["q"];
     $fp = fopen("data.txt", "w") or die("Unable to open file!");
     fwrite($fp, $x1);
     fclose($fp);
?>
