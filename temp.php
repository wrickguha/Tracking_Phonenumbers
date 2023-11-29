<?php
$var1 =  $_POST['input_value'];
$command = escapeshellcmd("python main.py $var1");
$output = shell_exec($command);
echo($output);

?>