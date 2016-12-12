<?php

require_once 'core.php';

$sql = "SELECT raw_id, raw_name, raw_quantity, raw_active, raw_status FROM raw_items WHERE raw_status = 1";
$result = $connect->query($sql);

$output = array('data' => array());

if($result->num_rows > 0)
{
	while($row = $result->fetch_array())
	{
		print_r($row);
	}
}

?> 