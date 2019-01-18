<?php
    include 'db.php';
    $list = $connection->query('SELECT * FROM oquvchilar')->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
<table border="4px solid black">
	<thead>
		<tr>
			<th>Ism</th>
			<th>Familiya</th>
			<th>Sinf_Raqami</th>
			<th>Sinf_Harfi</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach($list as $key):?>
			<tr>
				<td><?=$key['ism'];?></td>
				<td><?=$key['familya'];?></td>
				<td><?=$key['sinf_raqami'];?></td>
				<td><?=$key['sinf_harfi'];?></td>
			</tr>
		<? endforeach;?>
	</tbody>
</table>
<a href="add.php">
<button>Qo'shish</button></a>
</body>
</html>