<?php

require_once 'token.php';

if(isset($_POST['updatepost'])){
	$val = $_POST['token'];
	if(token::checkToken($val,$_COOKIE['csrfCookie'])){
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal("SUCCESS !","Your PIN has been updated to '.$_POST['updatepost'].'","success");';
		echo '}, 500);</script>';		
	}
	else{
		echo '<script type="text/javascript">';
		echo 'setTimeout(function () { swal("ERROR","Invalid Token : '.$_COOKIE['csrfCookie'].'","error");';
		echo '}, 500);</script>';
	}
}
?>

<!DOCTYPE html>
<html>
	<head>

		<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./form5.css">
	<script src="./sweetalert.min.js"></script>


		<title>Mobile Pin Update</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
	
		$(document).ready(function(){
	

		var name = "csrfCookie" + "=";
		var cookie_value = "";
    	var decodedCookie = decodeURIComponent(document.cookie);
    	var ca = decodedCookie.split(';');
    	for(var i = 0; i <ca.length; i++) 
    	{
        	var c = ca[i];
        	while (c.charAt(0) == ' ') 
        	{
            	c = c.substring(1);
        	}
        		if (c.indexOf(name) == 0) 
        		{
            		cookie_value = c.substring(name.length, c.length);
            		document.getElementById("token_to_be_added").setAttribute('value', cookie_value) ;
        		}
    	}
	
	
	});
	
		</script>
	</head>

	<body>
	<div id="main">
		<div style="height:400px" id="first">
		<form action="" method="post">

			<h1 align="center">Mobile Pin Update</h1> 
			
			<div class="login">
				<label style = "margin-top:50px">Enter New Pin</label>

					<div class="credentials">
						<input type="text" name="updatepost" placeholder="New PIN">
					</div>

					<input type="Submit" value="Update Pin">
					
					<div id="div1">
					<input type="hidden" name="token" value="" id="token_to_be_added"/>
					</div>
			</div>
		</form>
		</div>
	</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./script.js"></script>
	</body> 

</html>