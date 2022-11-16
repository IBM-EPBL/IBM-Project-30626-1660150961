<?php
date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect('localhost','iotbabyc_agriiot','lWns2(G$qHQS','iotbabyc_agriiot');
$sql = "select * from bulbs_data";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
echo '?ID='.str_replace('(Manual)','',$row['motor']).'$';
?>
