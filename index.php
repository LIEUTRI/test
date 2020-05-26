<html>
<body>
<form action="" method="post">
<input name="name" type="text" value="">
<input name="pass" type="password" value="">
<input name="tag" type="hidden" value="1">
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
if($_POST['tag'] == 1){
	if(empty($name)) echo "Xin chao, nguoi la!";
	else "Chao ban, ".$name.". Pass cua ban la: ".$pass;
}
?>
