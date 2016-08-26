<?php 
	include "./conn.php";
	$conn=new conn();
	if(isset($_POST['type'])){
		switch ($_POST['type']) {
			case 'i-m'://insert main
				if(!empty($_POST['mid']) && !empty($_POST['config'])){
					$sql=" INSERT into main (`mid`,config) values (".intval($_POST['mid']).",'".mysql_real_escape_string($_POST['config'])."')";
					echo $conn->getNum($sql);
				}
				break;
			case 'u-m'://insert main
				if(!empty($_POST['mid']) && !empty($_POST['config'])){
					$sql=" UPDATE main set config='".mysql_real_escape_string($_POST['config'])."' where `mid`=".intval($_POST['mid']);
					echo $conn->getNum($sql);
				}
				break;
			default:
				# code...
				break;
		}
	}
 ?>