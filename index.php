

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Test</title>
	<style>
		#form1 {
			display: none;
			margin: 0 auto;			
		}
		#form2 {
			display: none;
			margin: 0 auto;
		}
		.form {
			width: 200px;
			display: inline-block;
			padding: 10px;
			margin: 10px;
		}	
	</style>
</head>
<body>

<button id="btn1">Sign In</button><span> OR </span><button id="btn2">login</button>
<div>
	<div class="form" id="formBox1">
		
		<form action="signin.php" name="form1" method="POST" class="form" id="form1">
			<input id="first" type="text" name="first" placeholder="Firstname"><br>
			<input id="last" type="text" name="last" placeholder="Lastname"><br>
			<input id="uid" type="text" name="uid" placeholder="Username"><br>
			<input id="pwd" type="password" name="pwd" placeholder="Password"><br>
			<input id="pwd2" type="password" name="pwd2" placeholder="Confirm Password"><br>
			<input id="signin" type="submit" name="signin" value="Sign in"><br>
		</form>
		
	</div>

	<div class="form" id="formBox2">
		
		<form action="login.php" name="form2" method="POST" class="form" id="form2">
			<input id="uid2" type="text" name="uid2" placeholder="Username"><br>
			<input id="pwd2" type="password" name="pwd2" placeholder="Password"><br>
			<input id="login" type="submit" name="login" value="Login"><br>
		</form>
		
	</div>
</div>
<script>
	var tg = 0;
	document.getElementById('btn1').onclick = function(){
		if (tg===0) {
			document.getElementById('form1').style.display = "block";
			tg = 1;
			document.getElementById('btn1').innerHTML = "Close Sign In"
		} else {
			document.getElementById('form1').style.display = "none";
			tg = 0;	
			document.getElementById('btn1').innerHTML = "Sign In"
		}
	}

	var tg2 = 0;
	document.getElementById('btn2').onclick = function(){
		if (tg2===0) {
			document.getElementById('form2').style.display = "block";
			tg2 = 1;
			document.getElementById('btn2').innerHTML = "Close Login"
		} else {
			document.getElementById('form2').style.display = "none";
			tg2 = 0;	
			document.getElementById('btn2').innerHTML = "Login"
		}
	}
</script>
</body>
</html>