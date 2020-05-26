<!DOCUMENT HTML>
<html>
<header>
<style>
	.error {color: #FF0000;}
</style>
</header>
<body>
<form action="" method="post">
<input type="text" name="name" id="name"/>
<input type="hidden" name="tag" value="1"/>
<input type="submit" value="DELETE">
</form>
<?php
function pg_connection_string_from_database_url() {
	extract (parse_url($_ENV["DATABASE_URL"] ));
	return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}
$db = pg_connect(pg_connection_string_from_database_url());
if (!$db){
	echo "Error : Unable to open database\n";
} else {
	echo "Opened database successfully\n";
}

if($_POST['tag']==1){
$name = $_POST['name'];
$sql = "DELETE FROM users WHERE name='".$name."'";
print "<br>$sql<br>";
$ret = pg_query($db, $sql);
if(!$ret){
	echo pg_last_error($db);
	exit();
} else echo $name." was deleted!";
}
?>

<br><a href=index.php>HOME</a>
</body>
</html>

<?php pg_close($db); ?>
