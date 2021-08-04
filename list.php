<?php

$data = $_POST["mailId"];

$fileappending = ",".$data;

$file = fopen("contacts.json","a");
fwrite($file,$fileappending);
fclose($file);

echo json_encode(true);
#echo  json_encode(true);