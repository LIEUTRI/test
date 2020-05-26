<!DOCUMENT HTML>
<html>
<header>
	<style>
		.error {color: #FF0000;}
	</style>
</header>
<body>
	<h2>TEST</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] );?>">
	UserName: <input type="text" name="username" value="<?php echo $username;?>"/> <br>
	Password: <input type="text" name="password" value="<?php echo $password;?>"/> <br>
	<input type="hidden" name="tag" value="1"/>	
	<input type="Submit" name="Submit" value="Submit"/>
	</form>
<?php
$username=$_POST["username"];
$password=$_POST["password"];
function pg_connection_string_from_database_url() {
	extract (parse_url($_ENV["DATABASE_URL"] ));
	return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$db = pg_connect(pg_connection_string_from_database_url() );
if (!$db){
	echo "Error : Unable to open database\n";
} else {
	echo "Opened database successfully\n";
}
$sql ="INSERT INTO users (name, pass) VALUES ('$username', '$password')";
print "<br>$sql</br>";

if($_POST['tag']==1){
	$ret = pg_query($db, $sql);
	if(!$ret){
		echo pg_last_error($db);
	} else {
		echo "Insert successfully\n";
	}
}
pg_close($db);
?>
</body>
</html>

<br><a href=index.php>HOME</a>
