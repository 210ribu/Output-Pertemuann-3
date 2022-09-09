<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Output 3</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
		<h3> Upload : </h3>
		<input type="file" name="file" id="file">
		<p></p>
		<input type="submit" name="submit" value="Kirim">
	</form>
	<?php 
	if (isset($_POST['submit'])){
		$Uploaden = basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], $Uploaden);
		echo "<img src= '$Uploaden' width='100'";
	}
	?>

</body>
</html>