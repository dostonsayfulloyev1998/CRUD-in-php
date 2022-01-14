<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>name</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<label>surname</label>
				<input type="text" class="form-control" name="surname">
			</div>
			<div class="form-group">
				<label>curs</label>
				<input type="text" class="form-control" name="curs">
			</div>
			<div class="form-group">
				<label>image</label>
				<input type="file" class="form-control" name="image">
			</div>
			<input type="submit" value="add student" class="btn btn-primary">
		</form>
	</div>
</body>
</html>