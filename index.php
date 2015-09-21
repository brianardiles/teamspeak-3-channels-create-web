<!DOCTYPE html>
<html>
<head>
	<title>TS3 Channels</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
	    $('form').submit(function() {
	        $.ajax({
	            type: 'POST',
	            url: $(this).attr('action'),
	            data: $(this).serialize(),
	            success: function(data) {
	            	$('#dta').empty();
	                $('#dta').html(data);
	            }
	        })        
	        return false;
	    }); 
	})
	</script>
</head>
<body>
<div id="degradado"></div>
<div id="formulario">
	<form method="post" action="crear.php">
		<input class="form-control" type="text" placeholder="nombre del channel papu" size="30" name="name"><br>
		<input class="form-control" type="text" placeholder="id unica (ctrl + i papu)" size="30" name="idts"><br>
	 	<input class="btn btn-default btn-lg" type="submit" name="submit" value="Crear channel">
	 </form>
	 <br>
	 <div id="dta"></div>
</div>

<div id="copy">
	made with <span class="cora">&hearts;</span> - 
	dev: <a href="https://twitter.com/brai4u">@brai4u</a> - 
	Code: <a href="https://github.com/brai4u">Github</a>
</div>
</body>
</html>