<?php
 if(isset ($_POST["input"])){
	echo"
	<script>
	document.location.href='tambah.php';
	</script>";
   }
   if(isset ($_POST["logout"])){
	echo"
	<script>
	document.location.href='login.php';
	</script>";
   }
?>
<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
 
    <form method="POST" action="">
    <button type="input" name="input" class="btn btn-outline-primary">Tambah</button>
	<button type="logout" name="logout" class="btn btn-danger">Logout</button>
	<!-- <button type="logout" name="logout" class="btn btn-danger">Logout</button> -->
	</form>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td>
					<a role ="button" class="btn btn-info" href="edit.php?id=<?php echo $d['id_customor']; ?>">UBAH</a> </button>
					<a role ="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['id_customor']; ?>">HAPUS</a></button>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>