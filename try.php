<!DOCTYPE html>
<html>
<head>
	<title>try</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="table">
<table>
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>address</th>
	</tr>
	<?php
	include "connect.php";
	$sql = "SELECT * FROM anony";
	$result = mysqli_query($conn, $sql);
	if($result){
		while ($row =mysqli_fetch_assoc($result)) {
			$id = $row['id'];
			$name = $row['name'];
			$address= $row['address'];
			?>
			<tr>
				<td> <?php echo $id ?></td>
				<td><?php echo $name ?></td>
				<td><?php echo $address ?></td>
			</tr>
			<?php
		}
	}
	?>
</table>
</div>
</body>
</html>