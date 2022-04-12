<!DOCTYPE html>
<html>
<head>
	<title>razat</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="pic">
		<img class="photo" src="2.JPG" alt="ANONYMUS">
		<p> "Justice. Every man loves justice at another man's expense."</p>
		
	
<!-- nav bar below -->
	<br>
	<div class= "nav">
		<a class ="navbar" href="#help">HELP</a>
		<a class href="#contact">CONTACT</a>
	</div>
<br>

	<!-- form element below -->

	<div class="form">
		<form action="insert.php" method="POST">
			<label>EMAIL: &nbsp &nbsp &nbsp &nbsp &nbsp</label><input type="email" name="email"  placeholder="EMAIL" required=""> <br><br>
			<label>PASSWORD: &nbsp</label><input type="password" name="password" placeholder="********" required=""> <br><br>
			<button type="submit"> LOG IN</button>
			

		</form>
	</div>
	</div>

	<div class="copyright">
		<p>&copy; Anony.mr.azat</p>
	</div>
	<!-- <div class="table">
		<table>
			<tr>
				<th>SN</th>
				<th>NAME</th>
				<th>ADDRESS</th>
			</tr>
						
			<?php 
        include 'connect.php';
        $sql ="SELECT * FROM anony";

        $result = mysqli_query ($conn, $sql);

        if ($result) {
            while ($row =mysqli_fetch_assoc($result)){
                $id = $row ['id'];
                $name = $row['name'];
                $address = $row['address'];
        ?>
                <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $address ?></td>
                
                </tr>
            
        <?php
            }
        }
         ?>
		</table>


	</div> -->

</body>
</html>