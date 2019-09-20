<?php


////var_dump($_POST);
var_dump(stat("wo1")) ;
?>

<!DOCTYPE html>
		<html>
			<head>
				<meta charset="UTF-8" />
				<title>$_POST数据接收传输</title>
			</head>
			<body>
				<form method="post" >
					<input type="text" name="姓名"	/>
					<input type="text" name="age"	/>
					<input type="submit" value="提交"	/>
				</form>
			</body>
		</html>