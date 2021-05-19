<html>
<head>
<?php
include 'koneksi2.php'; //memasukan file koneksi PHP
//untuk menyimpan data dari method post
$jenis_pendaftaran = $_POST['jenis_pendaftaran']; 
$tanggal_masuk = $_POST['tanggal_masuk'];  
$NIS = $_POST['NIS']; 
$nomor_peserta = $_POST['nomor_peserta'];   
$pernahpaud = $_POST['pernahpaud']; 
$pernahtk = $_POST['pernahtk'];  
$noseri_SKHUN = $_POST['noseri_SKHUN'];  
$noseri_ijazah = $_POST['noseri_ijazah']; 
$Hobi = $_POST['Hobi'];           
$cita_cita = $_POST['cita_cita'];     
$nama_lengkap = $_POST['nama_lengkap']; 
$jenis_kelamin = $_POST['jenis_kelamin']; 
$NISN = $_POST['NISN']; 
$NIK = $_POST['NIK']; 
$tempatlahir = $_POST['tempatlahir'] ; 
$tanggallahir = $_POST['tanggallahir'];  
$agama = $_POST['agama'];    
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus']; 
$alamat = $_POST['alamat']; 
$RT = $_POST['RT'];  
$RW = $_POST['RW'];  
$namadusun = $_POST['namadusun']; 
$namakelurahan = $_POST['namakelurahan'];
$kecamatan = $_POST['kecamatan'];  
$kodepos = $_POST['kodepos']; 
$tempattinggal = $_POST['tempattinggal'];
$modaltransportasi = $_POST['modaltransportasi']; 
$nomorhp = $_POST['nomorhp']; 
$nomortelepon = $_POST['nomortelepon']; 
$emailpribadi = $_POST['emailpribadi']; 
$penerimakps = $_POST['penerimakps'];          
$kewarganegaraan = $_POST['kewarganegaraan']; 
//query SQL untuk insert data
$query = "INSERT INTO siswa SET jenis_pendaftaran='$jenis_pendaftaran', tanggal_masuk_sekolah ='$tanggal_masuk', NIS='$NIS', nomor_peserta_ujian='nomor_peserta', pernah_paud='$pernahpaud', pernah_tk='$pernahtk', no_seri_SKHUN='noseri_SKHUN' ,  no_seri_ijazah='$noseri_ijazah',  Hobi='$Hobi' ,  cita_cita='$cita_cita' ,  nama_lengkap='$nama_lengkap' ,  jenis_kelamin='$jenis_kelamin' ,  NISN='$NISN' ,  NIK='$NIK' ,  tempat_lahir='$tempatlahir' ,  tanggal_lahir='$tanggallahir' ,  agama='$agama' ,  berkebutuhan_khusus='$berkebutuhan_khusus' ,  alamat='$alamat' ,  RT='$RT' ,  RW='$RW' ,  nama_dusun='$namadusun' ,  nama_kelurahan='$namakelurahan' ,  kecamatan='$kecamatan' ,  kode_pos='$kodepos' ,  tempat_tinggal='$tempattinggal' ,  modal_transportasi='$modaltransportasi' , nomor_hp ='$nomorhp' ,  nomor_telepon='$nomortelepon' ,  email_pribadi='$emailpribadi' ,  penerima_kps='$penerimakps' , kewarganegaraan ='$kewarganegaraan'";

mysqli_query($koneksi, $query); //untuk mengeksekusi variabel $koneksi dan $query
?>
</head>
<body>
	
	<table width="300" border="2"> <!--membuat tabel untuk menampilkan data Pendaftaran Siswa   -->
		<tr>
			<th>No</th>
			<th>Jenis Pendaftaran</th>
			<th>tanggal masuk</th>
			<th>NIS</th>
			<th>Nomor Peserta </th>
			<th>Pernah Paud </th>
			<th>Pernah TK </th>
			<th>No Seri SKHUN </th>
			<th>No Seri Ijazah </th>
			<th>Hobi </th>
			<th>Cita-Cita </th>
			<th>nama lengkap </th>
			<th>Jenis Kelamin </th>
			<th>NISN </th>
			<th>NIK </th>
			<th>Tempat Lahir </th>
			<th>Tanngal Lahir </th>
			<th>Agama </th>
			<th>Berkebutuhan Khusus </th>
			<th>Alamat </th>
			<th>RT </th>
			<th>RT </th>
			<th>Nama Dusun </th>
			<th>Nama Kelurahan </th>
			<th>Kecamatan </th>
			<th>Kodepos </th>
			<th>Tempat Tinggal </th>
			<th>Modal Transportasi </th>
			<th>Nomor Hp </th>
			<th>Nomor Telepon </th>
			<th>Email Pribadi </th>
			<th>Penerima KPS </th>
			<th>Kewarganegaraan </th>
		</tr>
		<?php 
		include 'koneksi2.php';
		// menampilkan data siswa
		$data = mysqli_query($koneksi,"select * from siswa"); //Membuat variabel data yang menyimpan perintah query
		$no = 1; //membuat variabel no dengan nilai 1
		while($d = mysqli_fetch_array($data)){ //perulangan dengan variabel $d
		?>
		<tr><!--Menampilkan data dari tabel siswa -->
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['jenis_pendaftaran']; ?></td>
			<td><?php echo $d['tanggal_masuk_sekolah']; ?></td>
			<td><?php echo $d['NIS']; ?></td>
			<td><?php echo $d['nomor_peserta_ujian']; ?></td>
			<td><?php echo $d['pernah_paud']; ?></td>
			<td><?php echo $d['pernah_tk']; ?></td>
			<td><?php echo $d['no_seri_SKHUN']; ?></td>
			<td><?php echo $d['no_seri_ijazah']; ?></td>
			<td><?php echo $d['Hobi']; ?></td>
			<td><?php echo $d['cita_cita']; ?></td>
			<td><?php echo $d['nama_lengkap']; ?></td>
			<td><?php echo $d['jenis_kelamin']; ?></td>
			<td><?php echo $d['NISN']; ?></td>
			<td><?php echo $d['NIK']; ?></td>
			<td><?php echo $d['tempat_lahir']; ?></td>
			<td><?php echo $d['tanggal_lahir']; ?></td>
			<td><?php echo $d['agama']; ?></td>
			<td><?php echo $d['berkebutuhan_khusus']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['RT']; ?></td>
			<td><?php echo $d['RW']; ?></td>
			<td><?php echo $d['nama_dusun']; ?></td>
			<td><?php echo $d['nama_kelurahan']; ?></td>
			<td><?php echo $d['kecamatan']; ?></td>
			<td><?php echo $d['kode_pos']; ?></td>
			<td><?php echo $d['tempat_tinggal']; ?></td>
			<td><?php echo $d['modal_transportasi']; ?></td>
			<td><?php echo $d['nomor_hp']; ?></td>
			<td><?php echo $d['nomor_telepon']; ?></td>
			<td><?php echo $d['email_pribadi']; ?></td>
			<td><?php echo $d['penerima_kps']; ?></td>
			<td><?php echo $d['kewarganegaraan']; ?></td>

		</tr>

		<?php 
		}
		?>

	</table>
	<center>
		<a target="_blank" href="reportsiswa.php">EXPORT KE PDF</a> <!--Link untuk report data pendaftaran siswa ke file excel -->
	</center>
 </body>
</html>