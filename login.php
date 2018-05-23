<?php



	if(isset($_POST['email']) && isset($_POST['senha'])){

		$usuario=$_POST['email'];

		setcookie('user', md5($usuario));

}
	


?>