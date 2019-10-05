<?php
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    $latt = trim($_POST['latitude']);
	$long = trim($_POST['longitude']);
	setcookie('latt',$latt,time()+3600);
	setcookie('long',$long,time()+3600);
}
?>