<?php
include_once("config.php");
include_once("function.php");

check_login_user();

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="margin-top:20px;">
		<div class="jumbotron d-flex justify-content-between">
			<div>
				<h1 style="align:middle;">Lab Final</h1>
				<p>Name: Nahid Sharif</p>
				<p>ID: 191-15-2363</p>
			</div>
			<img src="./res/demo1.jpg" alt="img" class="img-nahid">
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Email</th>
					<th>Department</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				while ($res = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td class='bg-danger'>" . $res['name'] . "</td>";
					echo "<td>" . $res['age'] . "</td>";
					echo "<td>" . $res['email'] . "</td>";
					echo "<td>" . $res['dept'] . "</td>";
					
				}
				?>
			</tbody>
		</table>
		<a href="add.php" class="btn btn-info" role="button" style="float:right;">Add New</a>
		<a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>
	</div>
</body>

</html>