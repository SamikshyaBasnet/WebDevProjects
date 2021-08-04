<?php

$jsondata = file_get_contents("https://api.covid19api.com/summary");

$data = json_decode($jsondata, true);

 
// echo "<pre>";
// print_r($data);
?>