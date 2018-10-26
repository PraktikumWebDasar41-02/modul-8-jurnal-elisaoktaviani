<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'modul8');
	$nim = $_SESSION["nim"];
	$query = "SELECT * FROM t_profile WHERE NIM = $nim";
 	$view = mysqli_query($db,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<br><br><br><br>
	<center>
		<table border="2">
			<form action="" method="POST">

				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $data['Nama'];?></td>
				</tr>
				<?php 	while ($data = mysqli_fetch_array($view)) { ?>
				<tr>
					<td>Nim</td>
					<td>:</td>
					<td><?php echo $data['NIM'];?></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><?php echo $data['kelas']; ?></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>:</td>
					<td><?php echo $data['hobi'];; ?></td>
				</tr>
				<tr>
					<td>Genre Film</td>
					<td>:</td>
					<td><?php echo $data['genre'];; ?></td>
				</tr>
				<tr>
					<td>Tempat Wisata</td>
					<td>:</td>
					<td><?php echo $data['wisata'];; ?></td>
				</tr>
				<?php }
				if (isset($_POST['submit'])) {
					session_destroy();
					header("Location: Register.php");
					}
				?>
			</form>
		</table>
	</center>
</body>
</html>