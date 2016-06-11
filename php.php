<?php 
	include "./conn.php";
	$conn=new conn();
	$id=isset($_GET['id'])?intval($_GET['id']):1;
	$sql="select config from main where mid=$id order by id limit 1";
	$ar=$conn->getArr($sql);
	echo json_encode($ar);
?>