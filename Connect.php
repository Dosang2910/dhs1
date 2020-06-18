  
<?php
$conn_string="host=ec2-52-87-135-240.compute-1.amazonaws.com port=5432 dbname=d8v0mmkdtlfege user=qvwyqkmmsiudmk password=fe9c07170eb8848bcd9b6b756d6c65f8da7be2a04a4012c79dee49b1ee84c0b0";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM tblAcc WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
