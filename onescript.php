<?php

$con = mysqli_connect("localhost","root","","records");
if(!$con){
    echo "error";
}
$records = array();
$sql ="SELECT * FROM studends_records";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)) {
    $records[] = $row;
}
echo "<pre>";print_r($records);
foreach ($records as $row) {
    
    }
?>
