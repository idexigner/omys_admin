<?php
//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'omys');
?>
<html>
	<head>
		<title>Invoice generator</title>
	</head>
	<body>
		select invoice:
		<form method='get' action='invoice-db.php'>
			<select name='s_id'>
				<?php
					//show invoices list as options
					$query = mysqli_query($con,"select * from census");
					while($invoice = mysqli_fetch_array($query)){
						echo "<option value='".$invoice['s_id']."'>".$invoice['s_id']."</option>";
					}
				?>
			</select>
			<input type='submit' value='Generate'>
		</form>
	</body>
</html>