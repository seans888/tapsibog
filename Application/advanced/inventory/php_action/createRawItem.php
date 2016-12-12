<?php

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST)
 {
 	$RawItemName = $_POST['RawItemName'];
 	$RawItemQuantity = $_POST['RawItemQuantity'];
 	$RawItemStatus = $_POST['RawItemStatus'];

 	$sql = "INSERT INTO raw_items (raw_name, raw_quantity, raw_active, raw_status) VALUES ('$RawItemName', '$RawItemQuantity', '$RawItemStatus', 1)";

 	if($connect->query($sql) == TRUE)
 	{
 		$valid['success'] = true;
 		$valid['messages'] = 'Successfully Added';
 	}
 	else
 	{
 		$valid['success'] = false;
 		$valid['messages'] = "Error";
 	}

 	$connect->close();

 	echo json_encode($valid);
 }