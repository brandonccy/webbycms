<?php
$newInsertID="";$currentURl="http://".$_SERVER["HTTP_HOST"]."".$_SERVER["REQUEST_URI"];
if($form<>""){
	$systemForm="controller/forms/".$form.".php";
	if(file_exists($systemForm)){
		include($systemForm);
	}else{
		?><script>window.location="?<?=$form?>";</script><?
	}
}
if($newInsertID<>""){
	?><script>window.location="<?=$currentURl?>";</script><?
}

/* Error Message Delivery Function (Use Session) */
if($systemSucces<>""){
	if(isset($_SESSION["systemSucces"])){
		$_SESSION["systemSucces"]=$systemSucces;	
	}
}
if($systemError<>""){
	if(isset($_SESSION["systemError"])){
		$_SESSION["systemError"]=$systemError;	
	}
}
?>
