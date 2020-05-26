<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Lieu Minh Tri</title>
  <style>
    input{display:block; margin-bottom:10px;}
  </style>
</head>
<body>
<form action="index.php" method="post">
<input name="name" id="name" type="text"/>
<input name="pass" id="pass" type="password"/>
<input name="tag" type="hidden" value="1"/>
<input type="submit" value="Submit"/>
</form>
</body>
</html>

<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
if($_POST['tag'] == 1){
	if(empty($name)) echo "Xin chao, nguoi la!";
	else echo "Chao ban, ".$name.". Pass cua ban la: ".$pass;
}
?>
