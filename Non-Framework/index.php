<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ppaw_uas";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}


	//query table
	$sql = "SELECT * FROM nilaimahasiswa ORDER BY NIM";
	$result = mysqli_query($conn, $sql);
	$hasil_sql_detail_mahasiswa = $conn->query($sql);


	$banyak_row_muncul = 10;
	$banyak_data = mysqli_num_rows($result);
	$jumlah_halaman_table = ceil($banyak_data/$banyak_row_muncul);

	if (!isset($_GET['page'])) {
	  	$page = 1;
	} else {
	  	$page = $_GET['page'];
	}

	$index_data_pertama_muncul_perPage = ($page-1)*$banyak_row_muncul;

	$sql_data = "SELECT * FROM nilaimahasiswa ORDER BY NIM LIMIT ".$index_data_pertama_muncul_perPage.",".$banyak_row_muncul;
	$hasil_sql_detail_mahasiswa_perPage = $conn->query($sql_data);

	if (isset($_POST['submitNilai'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$tugas = $_POST['tgs'];
		$uts = $_POST['uts'];
		$uas = $_POST['uas'];
		$totalNilai = ($tugas*0.3) + ($uts*0.3) + ($uas*0.4);
		$grade = "F";
		// echo "<script>alert('".$totalNilai." = 30% tugas + 30% UTS + 40% UAS = (0.3 * ".$tugas.") + (0.3 * ".$uts.") + (0.4 * ".$uas.")\\n = (".$tugas*0.3.") + (".$uts*0.3.") + (".$uas*0.4.")\\n = ".$totalNilai."')</script>";
		if (($totalNilai >= 80) && ($totalNilai <= 100)) {
			$grade = "A";
		}
		elseif (($totalNilai >= 70) && ($totalNilai < 80)) {
			$grade = "B";
		}
		elseif (($totalNilai >= 60) && ($totalNilai < 70)) {
			$grade = "C";
		}
		elseif (($totalNilai >= 50) && ($totalNilai < 60)) {
			$grade = "D";
		}
		elseif ($totalNilai < 50) {
			$grade = "E";
		}
		// echo "<script>alert('Grade dari Nilai ".$totalNilai." = ".$grade."')</script>";

		
		// echo "<script>alert('INSERT INTO `nilaimahasiswa`(`NIM`, `Nama_Mahasiswa`, `Nilai_Tugas`, `Nilai_UTS`, `Nilai_UAS`, `Grade_Total`) VALUES (".$nim.",".$nama.",".$tugas.",".$uts.",".$uas.",".$grade.")')</script>";
		$sql = "INSERT INTO `nilaimahasiswa`(`NIM`, `Nama_Mahasiswa`, `Nilai_Tugas`, `Nilai_UTS`, `Nilai_UAS`, `Grade_Total`) VALUES ('$nim','$nama','$tugas','$uts','$uas','$grade')";
		$resultcek = mysqli_query($conn, $sql);
		// echo mysqli_query($conn, $sql);

		header("Location: index.php?#insertDatasuccess");
	}

	$id_data = 0;
	if (isset($_POST['editData'])) {
		$id_data = $_POST['id-edit'];
		$nim = $_POST['nim-edit'];
		$nama = $_POST['nama-edit'];
		$tugas = $_POST['tgs-edit'];
		$uts = $_POST['uts-edit'];
		$uas = $_POST['uas-edit'];

		$totalNilai = ($tugas*0.3) + ($uts*0.3) + ($uas*0.4);
		$grade = "F";
		// echo "<script>alert('".$totalNilai." = 30% tugas + 30% UTS + 40% UAS = (0.3 * ".$tugas.") + (0.3 * ".$uts.") + (0.4 * ".$uas.")\\n = (".$tugas*0.3.") + (".$uts*0.3.") + (".$uas*0.4.")\\n = ".$totalNilai."')</script>";
		if (($totalNilai >= 80) && ($totalNilai <= 100)) {
			$grade = "A";
		}
		elseif (($totalNilai >= 70) && ($totalNilai < 80)) {
			$grade = "B";
		}
		elseif (($totalNilai >= 60) && ($totalNilai < 70)) {
			$grade = "C";
		}
		elseif (($totalNilai >= 50) && ($totalNilai < 60)) {
			$grade = "D";
		}
		elseif ($totalNilai < 50) {
			$grade = "E";
		}
		// echo "<script>alert('Grade dari Nilai ".$totalNilai." = ".$grade."')</script>";

		
		// echo "<script>alert('UPDATE `nilaimahasiswa` SET `NIM`=".$nim.",`Nama_Mahasiswa`=".$nama.",`Nilai_Tugas`=".$tugas.",`Nilai_UTS`=".$uts.",`Nilai_UAS`=".$uas.",`Grade_Total`=".$grade." WHERE id = ".$id_data."')</script>";
		$sql = "UPDATE `nilaimahasiswa` SET `NIM`='$nim',`Nama_Mahasiswa`='$nama',`Nilai_Tugas`='$tugas',`Nilai_UTS`='$uts',`Nilai_UAS`='$uas',`Grade_Total`='$grade' WHERE id = '$id_data'";
		$resultcek = mysqli_query($conn, $sql);
		// echo mysqli_query($conn, $sql);
		
		header("Location: index.php?page=".$page."#uploadDatasuccess");
	}

	if (isset($_POST['deleteData'])) {
		$id_data = $_POST['id-delete'];

		// echo "<script>alert('DELETE FROM `nilaimahasiswa` WHERE id = ".$id_data."')</script>";
		$sql = "DELETE FROM `nilaimahasiswa` WHERE id = '$id_data'";
		$resultcek = mysqli_query($conn, $sql);
		// echo mysqli_query($conn, $sql);
		
		header("Location: index.php?#deleteDatasuccess");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Web</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body class="pt-5">
	<h2 class="text-center mb-5">Student Web</h2>
	<section id="content">
		<div class="col-xl-8 justify-content-center px-3 mx-auto">
			<div class="card text-center shadow mb-5" id="input-Panel">
				<form action="" method="POST" class="p-4 px-5 justify-content-center">
					<table class="table table-borderless text-center">
						<tr>
							<td><label for="nim" class="form-label">NIM</label></td>
							<td><label for="nama" class="form-label">Nama</label></td>
							<td><label for="tgs" class="form-label">Tugas</label></td>
							<td><label for="uts" class="form-label">UTS</label></td>
							<td><label for="uas" class="form-label">UAS</label></td>
						</tr>
						<tr>
							<td style="width:15%">
								<input type="text" name="nim" id="nim" class="form-control" required>
							</td>
							<td style="width:55%">
								<input type="text" name="nama" id="nama" class="form-control" required>
							</td>
							<td style="width:10%">
								<input type="text" name="tgs" id="tgs" class="form-control" required>
							</td>
							<td style="width:10%">
								<input type="text" name="uts" id="uts" class="form-control" required>
							</td>
							<td style="width:10%">
								<input type="text" name="uas" id="uas" class="form-control" required>
							</td>
						</tr>
					</table>
					<input type="submit" name="submitNilai" class="btn btn-primary w-25">
				</form>
			</div>
			<div class="card text-center shadow" id="table-List">
				<div class="p-3">
					<table class="table align-middle listTable text-center" style="border-bottom-width: 0">
						<thead class="px-5">
							<td style="width:5%" class="ps-5"></td>
							<td style="width:15%">NIM</td>
							<td style="width:45%">Mahasiswa</td>
							<td style="width:15%">Grade</td>
							<td style="width:20%">Pilihan</td>
						</thead>
						<tbody>
							<?php
							if ($hasil_sql_detail_mahasiswa_perPage->num_rows > 0) {
							  // output data of each row
							  while($row = $hasil_sql_detail_mahasiswa_perPage->fetch_assoc()) {
							    ?>
									<tr id="listMahasiswa<?php echo $row["NIM"]; ?>" style="display:table-row;">
										<td><p onclick="DetailList_Switch('<?php echo $row["NIM"]; ?>')" class="btn mb-0" style="cursor: pointer; font-size: 1.25rem;">+</p></td>
										<td><?php echo $row["NIM"]; ?></td>
										<td><?php echo $row["Nama_Mahasiswa"]; ?></td>
										<td><?php echo $row["Grade_Total"]; ?></td>
										<td class="row justify-content-center" style="border: 0;">
											<button class="btn btn-warning me-2" style="width:35%;" onclick="Edit_Switch('<?php echo $row["NIM"]; ?>')">Ubah</button>
											<form action="" method="POST" style="width:35%; padding: 0;">
												<p style="display: none;"><input type="text" name="id-delete" id="id-delete" class="form-control" value="<?php echo $row["id"]; ?>"></p>
												<button type="submit" name="deleteData" id="deleteData" class="btn btn-danger" style="width:100%">Hapus</button>
											</form>
										</td>
									</tr>
									<tr id="detailMahasiswa<?php echo $row["NIM"]; ?>" style="display:none">
										<td class="align-top"><p onclick="DetailList_Switch('<?php echo $row["NIM"]; ?>')" class="btn mb-0 mt-2" style="cursor: pointer; font-size: 1.25rem;">-</p></td>
										<td colspan="4">
											<div class="p-2 py-1 text-start">
												<h3><?php echo $row["Nama_Mahasiswa"]; ?></h3>
												<h5><?php echo $row["NIM"]; ?></h5>
												<hr>
												<div class="d-flex">
													<div class="col-xl-8">
														<h6>Grade: <?php echo $row["Grade_Total"]; ?></h6>
														<div class="d-flex align-items-center">
															<p>Tugas : </p>
															<p class="ms-3"><?php echo $row["Nilai_Tugas"]; ?></p>
														</div>
														<div class="d-flex align-items-center">
															<p>UTS : </p>
															<p class="ms-3"><?php echo $row["Nilai_UTS"]; ?></p>
														</div>
														<div class="d-flex align-items-center">
															<p>UAS: </p>
															<p class="ms-3"><?php echo $row["Nilai_UAS"]; ?></p>
														</div>
													</div>
													
													<div class="col-xl-4 row justify-content-between">
														<button class="btn btn-warning" style="width:45%;max-height: 38px;" onclick="Edit_Switch('<?php echo $row["NIM"]; ?>')">Ubah</button>
														<form action="" method="POST" style="width:45%; padding: 0;">
															<p style="display: none;"><input type="text" name="id-delete" id="id-delete" class="form-control" value="<?php echo $row["id"]; ?>"></p>
															<button type="submit" name="deleteData" id="deleteData" class="btn btn-danger" style="width:100%">Hapus</button>
														</form>
													</div>
												</div>
												
												
											</div>
										</td>
									</tr>
									<tr id="editMahasiswa<?php echo $row["NIM"]; ?>" style="display:none">
										<td class="align-top"><p onclick="DetailList_Switch('<?php echo $row["NIM"]; ?>')" class="btn mb-0 mt-2" style="cursor: pointer; font-size: 1.25rem;">-</p></td>
										<td colspan="4">
											<form action="" method="POST">
												<div class="p-2 py-1 text-start">
													<p style="display: none;"><input type="text" name="id-edit" id="id-edit" class="form-control" value="<?php echo $row["id"]; ?>"></p>
													<h3><input type="text" name="nama-edit" id="nama-edit" class="form-control" style="width:30%" value="<?php echo $row["Nama_Mahasiswa"]; ?>" required></h3>
													<h5><input type="text" name="nim-edit" id="nim-edit" class="form-control" style="width:15%" value="<?php echo $row["NIM"]; ?>" required></h5>
													<hr>
													<div class="d-flex">
														<div class="col-xl-8">
															<h6>Grade: <?php echo $row["Grade_Total"]; ?></h6>
															<div class="d-flex align-items-center">
																<p>Tugas : </p>
																<p class="ms-3"><input type="text" name="tgs-edit" id="tgs-edit" class="form-control text-center" style="width:25%" value="<?php echo $row["Nilai_Tugas"]; ?>" required></p>
															</div>
															<div class="d-flex align-items-center">
																<p>UTS : </p>
																<p class="ms-3"><input type="text" name="uts-edit" id="uts-edit" class="form-control text-center" style="width:25%" value="<?php echo $row["Nilai_UTS"]; ?>" required></p>
															</div>
															<div class="d-flex align-items-center">
																<p>UAS: </p>
																<p class="ms-3"><input type="text" name="uas-edit" id="uas-edit" class="form-control text-center" style="width:25%" value="<?php echo $row["Nilai_UAS"]; ?>" required></p>
															</div>
														</div>
														
														<div class="col-xl-4">
															<button type="submit" name="editData" id="editData" class="btn btn-success" style="width:45%;" onclick="Edit_Switch('<?php echo $row["NIM"]; ?>')">Ubah</button>
															<button class="btn btn-danger" style="width:45%" onclick="Edit_Switch('<?php echo $row["NIM"]; ?>')">Batal Ubah</button>
														</div>
													</div>
												</div>
											</form>
										</td>
									</tr>
								<?php
								}
							}
							?>
						</tbody>
						<tfoot></tfoot>
					</table>
					<div class='pagination-container' >

						<nav aria-label="Page navigation example">
						  	<ul class="pagination justify-content-center">
						  		<?php
						  		if ($page == 1) {
						  			?>
						  			<li class="page-item disabled">
						  			  	<a class="page-link"><<</a>
						  			</li>
						  			<?php
						  		}
						  		elseif ($page >= 2) {
						  			?>
						  			<li class="page-item">
						  			  	<a class="page-link" href="index.php?page=<?php echo 1; ?>"><<</a>
						  			</li>
						  			<li class="page-item">
						  			  	<a class="page-link" href="index.php?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a>
						  			</li>
						  			<?php
						  		}
					  			?>
					  			<li class="page-item active"><a class="page-link" href="index.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
					  			<?php
						  		if ($page < $jumlah_halaman_table) {
						  			?>
						  			<li class="page-item">
						  			  	<a class="page-link" href="index.php?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a>
						  			</li>
						  			<li class="page-item">
						  			  	<a class="page-link" href="index.php?page=<?php echo $jumlah_halaman_table; ?>">>></a>
						  			</li>
						  			<?php
						  		}
						  		elseif ($page == $jumlah_halaman_table) {
						  			?>
						  			<li class="page-item disabled">
						  			  	<a class="page-link">>></a>
						  			</li>
						  			<?php
						  		}
						  		?>
							    
						  	</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>


</body>
</html>

<script>
	function DetailList_Switch(id)
	{

		var listNama = "listMahasiswa".concat(id);
		var detailNama = "detailMahasiswa".concat(id);
		var editNama = "editMahasiswa".concat(id);

		var list = document.getElementById(listNama);
		var detail = document.getElementById(detailNama);
		var edit = document.getElementById(editNama);

		if (list.style.display == "table-row")
		{
			list.style.display = "none";
			detail.style.display = "table-row";
			edit.style.display = "none";
		}
		else if (detail.style.display == "table-row")
		{
			list.style.display = "table-row";
			detail.style.display = "none";
			edit.style.display = "none";
		}
		else if (edit.style.display == "table-row")
		{
			list.style.display = "none";
			detail.style.display = "none";
		}
	}

	function Edit_Switch(id)
	{
		var listNama = "listMahasiswa".concat(id);
		var detailNama = "detailMahasiswa".concat(id);
		var editNama = "editMahasiswa".concat(id);

		var list = document.getElementById(listNama);
		var detail = document.getElementById(detailNama);
		var edit = document.getElementById(editNama);

		if (list.style.display == "table-row")
		{
			list.style.display = "none";
			detail.style.display = "none";
			edit.style.display = "table-row";
		}
		else if (detail.style.display == "table-row")
		{
			list.style.display = "none";
			detail.style.display = "none";
			edit.style.display = "table-row";
		}
		else if (edit.style.display == "table-row")
		{
			list.style.display = "table-row";
			detail.style.display = "none";
			edit.style.display = "none";
		}
	}
</script>

<style type="text/css">
	.listTable>tbody>tr:nth-child(6n+4),
	.listTable>tbody>tr:nth-child(6n+5),
	.listTable>tbody>tr:nth-child(6n+6) {
  		background: #E6E6E6;
	}
</style>