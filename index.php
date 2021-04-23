<?php
 $ajax_var1 = $_POST['var1'];
 $fp = fopen('data.txt', 'w');
 fwrite($fp, $ajax_var1);
 fclose($fp);
?>
