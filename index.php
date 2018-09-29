<?php  include('server.php'); ?>

<html>
<head>
    <link rel ="stylesheet" type = "text/css" href = "style.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>