<?php

$series1 = $_GET['series1'];
$series2 = $_GET['series2'];
$series3 = $_GET['series3'];

$sample_array['2016'] = "100,100,5,200,20,30,45,100";
$sample_array['2017'] = "11,15,11,12,2,3,5,30";
$sample_array['2018'] = "20,30,45,11,10,5,2,25";

$result[] = $sample_array[$series1];
$result[] = $sample_array[$series2];
$result[] = $sample_array[$series3];

echo json_encode($result);