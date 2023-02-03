<?php
$test_array=array();
$test_array2=array();
$test_array3=array();
$serial_key="1,2,3,4,5,6,7,1,2,3,4,5,6,7";
$serial_key_arr=explode(",",$serial_key);
foreach($serial_key_arr as $serial_k)
{
    if($test_array[$serial_k]=="")
    {
        $test_array[$serial_k]=$serial_k;
        $test_array2[]=$serial_k;
    }
    else{
        $test_array3[]=$serial_k;
    }
}
echo "<pre>";print_r($test_array2);
echo "<pre>";print_r($test_array3);
