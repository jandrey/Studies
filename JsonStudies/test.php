<?php
header('Cache-Control: no-cache, must-revalidate'); 
header('Content-Type: application/json; charset=utf-8')

$aDados = json_decode($_POST['rel'], true);

echo $aDados["Proc"];
?> 