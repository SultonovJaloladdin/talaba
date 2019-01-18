<?php
    include 'db.php';
    if(isset($_POST['ism']) && $_POST['ism']!="" && isset($_POST['familya'])&& $_POST['familya']!="" && isset($_POST['raqam']) && isset($_POST['harf']) )
    {
    	$ism = $_POST['ism'];
    	$familya = $_POST['familya'];
    	$raqam = $_POST['raqam'];
    	$harf = $_POST['harf'];

    	$connection->query('INSERT INTO oquvchilar(ism, familya, sinf_raqami, sinf_harfi) VALUES ("'.$ism.'","'.$familya.'","'.$raqam.'","'.$harf.'")');

    	header('Location:index.php');
    	exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="POST">
	<input type="text" name="ism" placeholder="Ismingni_yoz"><br>
	<input type="text" name="familya" placeholder="Familyangni_yoz "><br>
	<select name="raqam">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
	</select>

	<select name="harf">
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>
	</select>
	<input type="submit" name="" value="Qo'shish">

</form>

</body>
</html>