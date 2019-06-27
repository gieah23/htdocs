<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Data Guru</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Custom fonts for this template-->
  <link href=<?php echo base_url("assets/fontawesome-free/css/all.min.css"); ?> rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href=<?php echo base_url("assets/datatables/dataTables.bootstrap4.css");?> rel="stylesheet">

<!-- Custom styles for this template-->
<link href=<?php echo base_url("css/sb-admin-2.css"); ?> rel="stylesheet">

</head>
<body>

<div class="container">
	<h1>Data Guru</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data Guru</a>

	<table class='table table-bordered table-hover'><br><br>
		<thead>
			<tr>
          <th>NIP</th>
          <th>Nama Guru</th>
          <th>Alamat</th>
          <th>Email</th>
        	<th>No HP</th>
        	<th>Jenis Kelamin</th>
        	<th>Kode Mapel</th>
        	<th>Kelas</th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
		        <tr>
				  	<td>0987654</td>
                    <td>Alucard</td>
                    <td>L</td>
                    <td>11</td>
                    <td>Jalan Jalan</td>
                    <td>Bhs Inggris</td>
					<td>30007</td>
					<td>1</td>
                </tr>              
			
		</tbody>
	</table>
</div>
	
</body>
</html>

