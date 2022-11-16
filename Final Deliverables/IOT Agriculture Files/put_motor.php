<?php

$con = mysqli_connect('localhost','iotbabyc_agriiot','lWns2(G$qHQS','iotbabyc_agriiot');
$mot = $_REQUEST['mot'];
//$instrument = @$_REQUEST['typ'];
if($mot!='')
{
    $sql = "select * from bulbs_data";
	$result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
	if($mot == 'motor')
	{
		if($row['motor']=='ON' OR $row['motor'] =='ON(Manual)')
		{
			$insert_sql = 'Update bulbs_data set motor="OFF(Manual)"';
				$insert_result = mysqli_query($con,$insert_sql);
			//echo "OFF";
		}
		else 
		{
			$insert_sql = 'Update bulbs_data set motor="ON(Manual)"';
			$insert_result = mysqli_query($con,$insert_sql);
			//echo "ON";
		}
	}
	
}


?>
