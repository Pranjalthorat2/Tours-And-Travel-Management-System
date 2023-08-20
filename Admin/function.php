<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
function makeconnection()
{
	$cn = mysqli_connect("localhost:3308", "root", "", "travel");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	return $cn;
}
$cn = mysqli_connect("localhost:3308", "root", "", "travel");
?>
</body>
</html>