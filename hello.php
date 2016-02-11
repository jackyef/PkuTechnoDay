<html>
<head>
<title> Web App Sederhana</title>
</head>

<?php 
	include("connect.php");
	if(!empty($_POST)){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$date = date("Y-m-d");
		echo '<h1>Halo, ' . $nama . '!</h1>';
		echo 'Email: ' . $email;
		
		//insert data to database
		$query = "INSERT INTO registration_tbl (name, email, date) VALUES ('$nama', '$email', '$date')";
		mysql_query($query) or die (mysql_error());
	}
	
	// retrieve data
	$sql_select = "SELECT * FROM registration_tbl";
	$result = mysql_query($sql_select) or die (mysql_error());
	
	echo "<br><br>";
	echo "Data yang telah masuk: ";
	echo "<br><br>";
	
	echo "<table border=1>";
	 echo "<tr>";
	 echo "<th>Nama</th>";
	 echo "<th>Email</th>";
	 echo "<th>Tanggal</th>";
	 echo "</tr>";
	 while ($row = mysql_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
	 }
	echo "</table>";	
?>

</html>