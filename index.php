<?php
	// $con=require "database.php";
	$con=new mysqli("localhost", "root", "12345678", "ict_1");

	$sql="select * from talaba";
	$result=$con->query('select * from talaba');

	$a=[];
	$i=0;

	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$a[$i++]=$row;
		}
	}

	$con->close();





?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>VAZIFA</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<a href="add_student.php" class="btn btn-primary">add student</a>
		</div>
		<div class="row">
			<table class="table table-striped">
				<tr>
					<th>id</th> <th>name</th><th>surname</th><th>curs</th> <th>image</th>
				</tr>

				<?php 
				foreach ($a as $item) {
					echo "<tr>";
						echo "<td>", $item['id'], "</td>", "<td>", $item['name'], "</td>", "<td>", $item['surname'], "</td>", "<td>", $item['curs'], "</td>", 
						"<td> <img src='rasm/".$item['image']."' width='100'></td>",
                            "<td> <a href='delete.php?id=".$item['id']."' class='btn btn-danger'>delete</a> 
        <a href='edit.php?id=".$item['id']."' class='btn btn-success'>edit</a> 
</td>";
					echo "</tr>";
				}

				?>
			</table>
		</div>
	</div>	
</body>
</html>