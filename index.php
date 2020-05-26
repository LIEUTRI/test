<html>
<body>
<form action="" method="post">
<input name="name" id="name" type="text"/>
<input name="pass" id="pass" type="password"/>
<input name="tag" type="hidden" value="1"/>
<input type="submit" value="submit"/>
</form>
</body>
</html>

<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
if(strcmp($_POST['tag']) == 0){
	if(empty($name)) echo "Xin chao, nguoi la!";
	else "Chao ban, ".$name.". Pass cua ban la: ".$pass;
}
?>
