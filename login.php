<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);

	$signupEmailError = "";
	
	//kas on olemas
	if (isset ($_POST["signupEmail"])) {
		
		//oli olemas, vajutati nuppu
		if (empty ($_POST["signupEmail"])) {
		
		//oli tõesti tühi
		$signupEmailError = "See väli on kohustuslik";
		
		}
			
	
	}
	
?>





<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi Sisse</h1>
	
		<form method="POST">
			<label>E-post</label>
			<input name="loginEmail" type="email">
			
			<br><br>
			<label>Parool</label>
			<input name="loginPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Logi Sisse" >
		
		</form>

	</body>
</html>



<h1>Loo Kasutaja</h1>
	
		<form method="POST">
		
			<label>E-post</label>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			<label>Parool</label>
			<input name="signupPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Loo Kasutaja" >
		
		</form>
	
	</body>
</html>