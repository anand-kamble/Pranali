<?php

$file = fopen("reviews.json","r+");
$filedata = fread($file,filesize("reviews.json"));

echo $filedata;

fclose($file);
