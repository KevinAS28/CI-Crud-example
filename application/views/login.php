<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username"/>
		<input type="password" name="password"/>
		<input type="submit"/>
	</form>
	<?php
	if (isset($error))
	{
		printf($error);
	}
	?>
</body>
</html>