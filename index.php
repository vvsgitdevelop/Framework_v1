<?php 
/*
 * <p>Fecha creacion: 23/02/2014</p>
 * @author Vista Verde Tecnologia (dartavia)
 * @version 1.0
*/
	//Include Class recursosProperties
	session_start();
	
	if(isset($_REQUEST['lang'])){
		$language = $_REQUEST['lang'];
	}
	require_once("./app/lang/bundle.php");
?>

<html>

<head>    
</head>

<body>
    <form id="form1" method="POST">
		<input id="input2" name="input2" type="submit" value="<?echo rsc('lastname')?>">
		<input id="input3" name="input3" type="submit" value="<?echo rsc('phone')?>">
    </form>
</body>

<footer>
</footer>
    
</html>