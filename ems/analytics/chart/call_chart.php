<?php
$series1 = $_GET['series1'];
$series2 = $_GET['series2'];

/*
$sample_array['2016'] = "11,10,5,2,20,30,45";
$sample_array['2017'] = "11,15,11,12,2,3,5";
$sample_array['2018'] = "20,30,45,11,10,5,2";
*/
$sample_array[2016] = [11,10,5,2,20,30,45];
$sample_array[2017] = [11,15,11,12,2,3,5];
$sample_array[2018] = [20,30,45,11,10,5,2];

$result[] = $sample_array[$series1];
$result[] = $sample_array[$series2];

//echo json_encode($sample_array);
echo json_encode($result);