<!DOCTYPE html>
<html>
<head>
	<title>LOGIN EDIT</title>
</head>
<body>
	<?php
	echo anchor("create/", "Tambah");
	?>
<table border="1">

	<?php
		foreach ($alldata as $entity)
		{
			$attr = "";
			foreach ($entity as $a)
			{
				$attr = $attr.sprintf("<td>%s</td>", $a);
			}
			printf("<tr>
				%s
				<td>%s</td>
				<td>%s</td>
				</tr>", $attr, anchor("edit/".$entity["username"], "Edit"), anchor("hapus/".$entity["username"], "Hapus"));
		}
	?>
</table>
</body>
</html>