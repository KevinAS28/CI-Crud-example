<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url().'index.php/'.'edit/'.$olduname?>" method="post">
		<input type="text" name="username"/>
		<input type="password" name="password"/>
		<input type="submit"/>
	</form>
</body>
</html>