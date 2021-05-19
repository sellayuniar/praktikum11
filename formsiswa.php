<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> <!--link boostrap -->
	<style>
	.warning {color: #FF0000;} /*membuat class warning yang berisi warna merah */
	</style>
</head>
<body>

<?php
$error_jenis_pendaftaran = ""; //membuat variabel $error_jenis_pendaftaran
$error_tanggal_masuk = "";  //membuat variabel $error_tanggal_masuk
$error_NIS = ""; //membuat variabel $error_NIS
$error_nomor_peserta = ""; // //membuat variabel $error_nomor_peserta
$error_pernahpaud = ""; // membuat variabel $error_pernah_paud
$error_pernahtk = ""; // membuat variabel $error_pernahtk
$error_noseri_SKHUN = ""; // membuat variabel $error_noseri_SKHUN
$error_noseri_ijazah = ""; // membuat variabel $error_noseri_ijazah
$error_Hobi = ""; // membuat variabel $error_hobi
$error_cita_cita = "";  // membuat variabel $error_cita_cita
$error_nama_lengkap = ""; // membuat variabel $error_nama_lengkap
$error_jenis_kelamin = ""; // membuat variabel $error_jenis_kelamin
$error_NISN = ""; // membuat variabel $error_NISN
$error_NIK = ""; // membuat variabel $error_NIK
$error_tempatlahir = ""; // membuat variabel $error_tempatlahir
$error_tanggallahir = ""; // membuat variabel $error_tanggallahir
$error_agama = ""; // membuat variabel $error_agama
$error_berkebutuhan_khusus = "";// membuat variabel $error_berkebutuhan_khusus
$error_alamat = ""; // membuat variabel $error_alamat
$error_RT = ""; // membuat variabel $error_rt
$error_RW = ""; // membuat variabel $error_rw
$error_namadusun = ""; // membuat variabel $error_namadusun
$error_namakelurahan = ""; // membuat variabel $error_namakelurahan
$error_kecamatan = ""; // membuat variabel $error_kecamatan
$error_kodepos = ""; // membuat variabel $error_kodepos
$error_tempattinggal = ""; // membuat variabel $error_tempattinggal
$error_modaltransportasi = ""; // membuat variabel $error_modaltransportasi
$error_nomorhp = ""; // membuat variabel $error_nomorhp
$error_nomortelepon = "";// membuat variabel $error_nomor_telepon
$error_emailpribadi = ""; // membuat variabel $error_emailpribadi
$error_penerimakps = ""; // membuat variabel $error_penerimakps
$error_nokps = ""; // membuat variabel $error_nokps
$error_kewarganegaraan = ""; // membuat variabel $error_kewarganegaraan

$jenis_pendaftaran = ""; //membuat variabel $jenis_pendaftaran
$tanggal_masuk = "";  //membuat variabel $tanggal_masuk
$NIS = ""; //membuat variabel $NIS
$nomor_peserta = "";   //membuat variabel $nomor_peserta
$pernahpaud = ""; // membuat variabel $pernah_paud
$pernahtk = "";  // membuat variabel $pernahtk
$noseri_SKHUN = "";  // membuat variabel $noseri_SKHUN
$noseri_ijazah = ""; // membuat variabel $noseri_ijazah
$Hobi = "";           // membuat variabel $hobi
$cita_cita = "";     // membuat variabel $cita_cita
$nama_lengkap = ""; // membuat variabel $nama_lengkap
$jenis_kelamin = ""; // membuat variabel $jenis_kelamin
$NISN = ""; // membuat variabel $NISN
$NIK = "";  // membuat variabel $NIK
$tempatlahir = ""; // membuat variabel $tempatlahir
$tanggallahir = "";  // membuat variabel _tanggallahir
$agama = "";     // membuat variabel $agama
$berkebutuhan_khusus = ""; // membuat variabel $berkebutuhan_khusus
$alamat = ""; // membuat variabel $alamat
$RT = ""; // membuat variabel $rt
$RW = "";  // membuat variabel $rw
$namadusun = ""; // membuat variabel $namadusun
$namakelurahan = ""; // membuat variabel $namakelurahan
$kecamatan = ""; // membuat variabel $kecamatan
$kodepos = "";  // membuat variabel $kodepos
$tempattinggal = ""; // membuat variabel $tempattinggal
$modaltransportasi = ""; // membuat variabel $modaltransportasi
$nomorhp = ""; // membuat variabel $nomorhp
$nomortelepon = ""; // membuat variabel $nomor_telepon
$emailpribadi = ""; // membuat variabel $emailpribadi
$penerimakps = "";  // membuat variabel $penerimakps
$nokps = "";         // membuat variabel $nokps
$kewarganegaraan = "";  // membuat variabel $kewarganegaraan


if ($_SERVER["REQUEST_METHOD"] == "POST") { //jika server request method == POST maka
	if (empty($_POST["jenis_pendaftaran"])) //jika POST jenis_pendaftaran kosong tampilkan pesan error jenis_pendaftaran tidak boleh kosong
	{
		$error_jenis_pendaftaran = "Jenis pendaftaran tidak boleh kosong";
	}
	else //jika tidak
	{
		$telp= cek_input($_POST["jenis_pendaftaran"]); //membuat variabel jenis_pendaftaran yang mengecek input dari post jenis_pendaftaran
		if (!is_numeric($jenis_pendaftaran)) //jika penulisan variabel jenis_pendaftaran bukan angka tampilkan pesan error
		{
			$error_jenis_pendaftaran = 'Jenis Pendaftaran hanya boleh angka saja';
		}
	}

	if (empty($_POST["tanggal_masuk"])) //jika POST tanggal_masuk kosong tampilkan pesan error tanggal_masuk tidak boleh kosong
	{
		$error_tanggal_masuk = "tanggal_masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$tanggal_masuk = cek_input($_POST["tanggal_masuk"]);
	}


	if (empty($_POST["NIS"])) //jika POST NIS kosong tampilkan pesan error NIS tidak boleh kosong
	{
		$error_NIS = "NIS masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$NIS= cek_input($_POST["NIS"]); 
		if (!is_numeric($NIS)) // jika data masukan bukan angka maka tampilkan pesan error
		{
			$error_NIS = 'NIS hanya boleh angka';
		}
	}

	if (empty($_POST["nomor_peserta"])) //jika POST nomor_peserta kosong tampilkan pesan error nomor_peserta tidak boleh kosong
	{
		$nomor_peserta= cek_input($_POST["nomor_peserta"]);
		if (!is_numeric($nomor_peserta)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_nomor_peserta = 'nomor_peserta hanya boleh angka';
		}
	}

	if (empty($_POST["noseri_SKHUN"])) //jika POST noseri_SKHUN kosong tampilkan pesan error noseri_SKHUN tidak boleh kosong
	{
		$noseri_SKHUN= cek_input($_POST["noseri_SKHUN"]);
		if (!is_numeric($noseri_SKHUN)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_noseri_SKHUN = 'noseri_SKHUN hanya boleh angka';
		}
	}

	if (empty($_POST["noseri_ijazah"])) //jika POST noseri_ijazah kosong tampilkan pesan error noseri_ijazah tidak boleh kosong
	{
		$noseri_ijazah= cek_input($_POST["noseri_ijazah"]);
		if (!is_numeric($noseri_ijazah)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_noseri_ijazah = 'noseri_ijazah hanya boleh angka';
		}
	}

	if (empty($_POST["Hobi"])) //jika POST Hobi kosong tampilkan pesan error Hobi tidak boleh kosong
	{
		$error_Hobi = "Hobi masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$Hobi= cek_input($_POST["Hobi"]); 
		if (!is_numeric($Hobi)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_Hobi = 'Hobi hanya boleh angka';
		}
	}

	if (empty($_POST["cita_cita"])) //jika POST cita_cita kosong tampilkan pesan error cita_cita tidak boleh kosong
	{
		$error_cita_cita = "cita_cita masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$cita_cita= cek_input($_POST["cita_cita"]);
		if (!is_numeric($Hobi)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_cita_cita = 'cita_cita hanya boleh angka';
		}
	}

	if (empty($_POST["nama_lengkap"])) //jika POST nama_lengkap kosong tampilkan pesan error nama_lengkap tidak boleh kosong
	{
		$error_nama_lengkap = "nama_lengkap masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$nama_lengkap = cek_input($_POST["nama_lengkap"]);
		if (!preg_match("/^[a-zA-Z]*$/", $nama_lengkap)) //jika data masukan bukan huruf dan spasi maka tampilkan pesan error
		{
			$nameErr = "Inputan Hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["NISN"])) //jika POST NISN kosong tampilkan pesan error NISN tidak boleh kosong
	{
		$error_NISN = "NISN masuk tidak boleh kosong"; 
	}
	else //jika tidak
	{
		$NISN= cek_input($_POST["NISN"]);
		if (!is_numeric($NISN)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_NISN = 'NISN hanya boleh angka';
		}
	}

	if (empty($_POST["NIK"])) //jika POST NIK kosong tampilkan pesan error NIK tidak boleh kosong
	{
		$error_NIK = "NIK masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$NIK= cek_input($_POST["NIK"]); 
		if (!is_numeric($NIK)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_NIK = 'NIK hanya boleh angka';
		}
	}

	if (empty($_POST["tempatlahir"])) //jika POST tempatlahir kosong tampilkan pesan error tempatlahir tidak boleh kosong
	{
		$error_tempatlahir = "tempatlahir tidak boleh kosong";
	}
	else //jika tidak
	{
		$tempatlahir = cek_input($_POST["tempatlahir"]);
		if (!preg_match("/^[a-zA-Z]*$/", $tempatlahir)) //jika data masukan tidak huruf dan spasi maka tampilkan pesan error
		{
			$tempatErr = "Inputan Hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["tanggallahir"])) //jika POST tanggallahir kosong tampilkan pesan error tanggallahir tidak boleh kosong
	{
		$error_tanggallahir = "tanggallahir tidak boleh kosong"; 
	}
	else //jika tidak
	{
		$tanggallahir = cek_input($_POST["tanggallahir"]);
	}

	if (empty($_POST["agama"])) //jika POST agama kosong tampilkan pesan error agama tidak boleh kosong
	{
		$error_agama = "agama masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$agama= cek_input($_POST["agama"]);
		if (!is_numeric($agama)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_agama = 'agama hanya boleh angka';
		}
	}

	if (empty($_POST["berkebutuhan_khusus"])) //jika POST berkebutuhan_khusus kosong tampilkan pesan error berkebutuhan_khusus tidak boleh kosong
	{
		$error_berkebutuhan_khusus = "berkebutuhan_khusus masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$berkebutuhan_khusus= cek_input($_POST["berkebutuhan_khusus"]);
		if (!is_numeric($berkebutuhan_khusus)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_berkebutuhan_khusus = 'berkebutuhan_khusus hanya boleh angka';
		}
	}

	if (empty($_POST["alamat"])) //jika POST alamat kosong tampilkan pesan error alamat tidak boleh kosong
	{
		$error_alamat = "alamat masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$alamat = cek_input($_POST["alamat"]);
		if (!preg_match("/^[a-zA-Z]*$/", $alamat)) //jika data masukan tidak huruf dan spasi maka tampilkan pesan error
		{
			$alamatErr = "Inputan Hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["RT"])) //jika POST RT kosong tampilkan pesan error RT tidak boleh kosong
	{
		$error_RT = "RT masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$RT= cek_input($_POST["RT"]);
		if (!is_numeric($RT)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_RT = 'RT hanya boleh angka';
		}
	}

	if (empty($_POST["RW"])) //jika POST RW kosong tampilkan pesan error RW tidak boleh kosong
	{
		$error_RW = "RW masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$RW= cek_input($_POST["RW"]);
		if (!is_numeric($RW)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_RW = 'RW hanya boleh angka';
		}
	}

	if (empty($_POST["namadusun"])) //jika POST namadusun kosong tampilkan pesan error namadusun tidak boleh kosong
	{
		$error_namadusun = "namadusun masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$namadusun = cek_input($_POST["namadusun"]);
		if (!preg_match("/^[a-zA-Z]*$/", $namadusun)) //jika data masukan tidak huruf dan spasi maka tampilkan pesan error
		{
			$namadusunErr = "Inputan Hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["namakelurahan"])) //jika POST namakelurahan kosong tampilkan pesan error namakelurahan tidak boleh kosong
	{
		$error_namakelurahan = "namakelurahan masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$namakelurahan = cek_input($_POST["namakelurahan"]);
		if (!preg_match("/^[a-zA-Z]*$/", $namakelurahan)) //jika data masukan tidak huruf dan spasi maka tampilkan pesan error
		{
			$namakelurahanErr = "Inputan Hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kecamatan"])) //jika POST kecamatan kosong tampilkan pesan error kecamatan tidak boleh kosong
	{
		$error_kecamatan = "kecamatan masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$kecamatan = cek_input($_POST["kecamatan"]);
		if (!preg_match("/^[a-zA-Z]*$/", $kecamatan)) //jika data masukan tidak huruf dan spasi maka tampilkan pesan error
		{
			$kecamatanErr = "Inputan Hanya boleh huruf dan spasi";
		}
	}

	if (empty($_POST["kodepos"])) //jika POST kodepos kosong tampilkan pesan error kodepos tidak boleh kosong
	{
		$error_kodepos = "kodepos masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$kodepos= cek_input($_POST["kodepos"]);
		if (!is_numeric($kodepos)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_kodepos = 'kodepos hanya boleh angka';
		}
	}

	if (empty($_POST["tempattinggal"])) //jika POST tempattinggal kosong tampilkan pesan error tempattinggal tidak boleh kosong
	{
		$error_tempattinggal = "tempattinggal masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$tempattinggal= cek_input($_POST["tempattinggal"]);
		if (!is_numeric($tempattinggal)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_tempattinggal = 'tempattinggal hanya boleh angka';
		}
	}

	if (empty($_POST["modaltransportasi"])) //jika POST modaltransportasi kosong tampilkan pesan error modaltransportasi tidak boleh kosong
	{
		$error_modaltransportasi = "modaltransportasi masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$modaltransportasi= cek_input($_POST["modaltransportasi"]);
		if (!is_numeric($modaltransportasi)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_modaltransportasi = 'modaltransportasi hanya boleh angka';
		}
	}

	if (empty($_POST["nomorhp"])) //jika POST nomorhp kosong tampilkan pesan error nomorhp tidak boleh kosong
	{
		$error_nomorhp = "nomorhp masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$nomorhp= cek_input($_POST["nomorhp"]);
		if (!is_numeric($nomorhp)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_nomorhp = 'nomorhp hanya boleh angka';
		}
	}

	if (empty($_POST["nomortelepon"])) //jika POST nomortelepon kosong tampilkan pesan error nomortelepon tidak boleh kosong
	{
		$error_nomortelepon = "nomortelepon masuk tidak boleh kosong";
	}
	else //jika tidak
	{
		$nomortelepon= cek_input($_POST["nomortelepon"]);
		if (!is_numeric($nomortelepon)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_nomortelepon = 'nomortelepon hanya boleh angka';
		}
	}

	if (empty($_POST["emailpribadi"])) //jika POST emailpribadi kosong tampilkan pesan error emailpribadi tidak boleh kosong
	{
		$error_emailpribadi = "Emailpribadi tidak boleh kosong";
	}
	else //jika tidak
	{
		$emailpribadi = cek_input($_POST["emailpribadi"]);
		if (!filter_var($emailpribadi, FILTER_VALIDATE_EMAIL)) //jika data masukan tidak sesuai format email maka tampilkan pesan error
		{
			$error_emailpribadi = "Format email Invalid";
		}
	}


	if (empty($_POST["kewarganegaraan"])) //jika POST kewarganegaraan kosong tampilkan pesan error kewarganegaraan tidak boleh kosong
	{
		$error_kewarganegaraan = "kewarganegaraan tidak boleh kosong";
	}
	else //jika tidak
	{
		$kewarganegaraan= cek_input($_POST["kewarganegaraan"]);
		if (!is_numeric($kewarganegaraan)) //jika data masukan tidak angka maka tampilkan pesan error
		{
			$error_kewarganegaraan = 'kewarganegaraan hanya boleh angka';
		}
	}

}

function cek_input($data) { // membuat fungsi cek_input dengan variabel $data
	$data = trim($data); //variabel data menyimpan nilai trim($data), trim memiliki fungsi untuk menghapus spasi pada variabel data
	$data = stripslashes($data); //variabel data menyimpan nilai stripslashes($data), stripslashes($data) untuk membersihkan data
	$data = htmlspecialchars($data); // variabel data menyimpan nilai htmlspecialchars($data), htmlspecialchars($data) untuk mengkonversi beberapa data
	return $data; //untuk mengembalikan nilai variabel data
}
?>

<div class="row"> <!--untuk mengelompokkan kelas row -->
<div class="col-lg-10"> <!-- -untuk mengelompokkan kelas col-md-6 untuk mengatur besar form-->
<div class="card"> <!-- -untuk mengelompokkan kelas card untuk tampilan form -->
	<div class="card-header"> <!---untuk mengelompokkan kelas card-header untuk tampilan header -->
		<h1> FORMULIR PESERTA DIDIK </h1>
	</div>
	<div class="card-body"> <!-- untuk mengelompokkan kelas card body untuk tampilan body html-->
	<form method="post" action="tampilsiswa.php">  <!-- membuat form dengan dengan action ketika form dikirimkan akan mengeksekusi file aksisiswa.php-->
	<div class="form-group row"> <!--untuk mengelompokkan kelas form-group row -->
	<label for="jenis_pendaftaran" class="col-sm-3 col-form-label"> 1. Jenis Pendaftaran  </label>  <!--membuat label -->
	<div class="col-sm-5">
		<input type="text" name="jenis_pendaftaran" class="form-control <?php echo ($error_jenis_pendaftaran !="" ? "is-invalid" : ""); ?>" id="jenis_pendaftaran" placeholder="jenis_pendaftaran" value="<?php echo $jenis_pendaftaran;?>" > <span class="warning"> <?php echo $error_jenis_pendaftaran; ?></span> 01) Siswa baru 02)Pindahan <!-- membuat input type teks -->
		</div>
		</div>

	<div class="form-group row">
	<label for="tanggal_masuk" class="col-sm-3 col-form-label"> 2. Tanggal Masuk Sekolah </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="tanggal_masuk" class="form-control <?php echo ($error_tanggal_masuk !="" ? "is-invalid" : ""); ?>" id="tanggal_masuk" placeholder="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>" > <span class="warning"> <?php echo $error_tanggal_masuk; ?></span>  <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="NIS" class="col-sm-3 col-form-label"> 3. NIS</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="NIS" class="form-control <?php echo ($error_NIS !="" ? "is-invalid" : ""); ?>" id="NIS" placeholder="NIS" value="<?php echo $NIS; ?>" > <span class="warning"> <?php echo $error_NIS; ?></span>  <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="nomor_peserta" class="col-sm-3 col-form-label"> 4. nomor_peserta</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="nomor_peserta" class="form-control <?php echo ($error_nomor_peserta !="" ? "is-invalid" : ""); ?>" id="nomor_peserta" placeholder="nomor_peserta" value="<?php echo $nomor_peserta; ?>" > <span class="warning"> <?php echo $error_nomor_peserta; ?></span>  Nomor Peserta Ujian adalah 20 digit yang tertera dalam sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="pernahpaud" class="col-sm-3 col-form-label"> 5. Apakah pernah paud?</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="pernahpaud" class="form-control" > 01 Ya 02 Tidak <!-- membuat input type teks -->
	</div>
	</div>

	<div class="form-group row">
	<label for="pernahtk" class="col-sm-3 col-form-label"> 6. Apakah pernah TK?</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="pernahtk" class="form-control" > 01 Ya 02 Tidak <!-- membuat input type teks -->
	</div>
	</div>

	<div class="form-group row">
	<label for="noseri_SKHUN" class="col-sm-3 col-form-label"> 7. No. Seri SKHUN Sebelumnya </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="noseri_SKHUN" class="form-control <?php echo ($error_noseri_SKHUN !="" ? "is-invalid" : ""); ?>" id="noseri_SKHUN" placeholder="noseri_SKHUN" value="<?php echo $noseri_SKHUN; ?>" > <span class="warning"> <?php echo $error_noseri_SKHUN; ?></span>  Diisi 16 Digit yang tertera di SKHUN SD -diisi Bagi PD Jenjang SMP <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="noseri_ijazah" class="col-sm-3 col-form-label"> 8. No Seri Ijazah Sebelumnya</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="noseri_ijazah" class="form-control <?php echo ($error_noseri_ijazah !="" ? "is-invalid" : ""); ?>" id="noseri_ijazah" placeholder="noseri_ijazah" value="<?php echo $noseri_ijazah; ?>" > <span class="warning"> <?php echo $error_noseri_ijazah; ?></span>  Diisi 16 Digit yang tertera di Ijazah SD -diisi Bagi PD Jenjang SMP <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row"> 
	<label for="Hobi" class="col-sm-3 col-form-label"> 9. Hobi </label>  <!--membuat label -->
	<div class="col-sm-5">
		<input type="text" name="Hobi" class="form-control <?php echo ($error_Hobi !="" ? "is-invalid" : ""); ?>" id="Hobi" placeholder="Hobi" value="<?php echo $Hobi;?>" > <span class="warning"> <?php echo $error_Hobi; ?></span> A) Olah Raga B)Kesenian C)Membaca D)Menulis E)Traveling F)Lainnya <!-- membuat input type teks -->
		</div>
		</div>


	<div class="form-group row"> 
	<label for="cita_cita" class="col-sm-3 col-form-label"> 10. cita-cita </label>  <!--membuat label -->
	<div class="col-sm-5">
		<input type="text" name="cita_cita" class="form-control <?php echo ($error_cita_cita !="" ? "is-invalid" : ""); ?>" id="cita_cita" placeholder="cita_cita" value="<?php echo $cita_cita;?>" > <span class="warning"> <?php echo $error_cita_cita; ?></span> A) PNS B)TNI/POLRI C)Guru/Dosen D)Dokter E)Politikus F)Wiraswasta G)Seni/Lukis/Artis/Sejenis H)Lainnya <!-- membuat input type teks -->
		</div>
		</div>

	<div class="form-group row"> 
	<label for="nama_lengkap" class="col-sm-3 col-form-label"> 11. Nama Lengkap </label>  <!--membuat label -->
	<div class="col-sm-5">
		<input type="text" name="nama_lengkap" class="form-control <?php echo ($error_nama_lengkap !="" ? "is-invalid" : ""); ?>" id="nama_lengkap" placeholder="nama_lengkap" value="<?php echo $nama_lengkap;?>" > <span class="warning"> <?php echo $error_nama_lengkap; ?></span> <!-- membuat input type teks -->
		</div>
		</div>


	<div class="form-group row">
	<label for="jenis_kelamin" class="col-sm-3 col-form-label"> 12. Jenis Kelamin</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="jenis_kelamin" class="form-control" > 01 Laki-Laki 02 Perempuan <!-- membuat input type teks -->
	</div>
	</div>

	<div class="form-group row">
	<label for="NISN" class="col-sm-3 col-form-label"> 13. NISN </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="NISN" class="form-control <?php echo ($error_NISN !="" ? "is-invalid" : ""); ?>" id="NISN" placeholder="NISN" value="<?php echo $NISN; ?>" > <span class="warning"> <?php echo $error_NISN; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="NIK" class="col-sm-3 col-form-label"> 14. NIK </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="NIK" class="form-control <?php echo ($error_NIK !="" ? "is-invalid" : ""); ?>" id="NIK" placeholder="NIK" value="<?php echo $NIK; ?>" > <span class="warning"> <?php echo $error_NIK; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="tempatlahir" class="col-sm-3 col-form-label"> 15. Tempat Lahir </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="tempatlahir" class="form-control <?php echo ($error_tempatlahir !="" ? "is-invalid" : ""); ?>" id="tempatlahir" placeholder="tempatlahir" value="<?php echo $tempatlahir; ?>" > <span class="warning"> <?php echo $error_tempatlahir; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>


	<div class="form-group row">
	<label for="tanggallahir" class="col-sm-3 col-form-label"> 16. Tanggal Lahir </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="tanggallahir" class="form-control <?php echo ($error_tanggallahir !="" ? "is-invalid" : ""); ?>" id="tanggallahir" placeholder="tanggallahir" value="<?php echo $tanggallahir; ?>" > <span class="warning"> <?php echo $error_tanggallahir; ?></span>  <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="agama" class="col-sm-3 col-form-label"> 17. Agama </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="agama" value="<?php echo $agama; ?>" > <span class="warning"> <?php echo $error_agama; ?></span> 1) Islam 02)Kristen/Protestan 03) Katholik 04)Hindu 05)Budha 06)Kong Hu Chu 99)Lainnya <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="berkebutuhan_khusus" class="col-sm-3 col-form-label"> 18. Berkebutuhan Khusus </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="berkebutuhan_khusus" class="form-control <?php echo ($error_berkebutuhan_khusus !="" ? "is-invalid" : ""); ?>" id="berkebutuhan_khusus" placeholder="berkebutuhan_khusus" value="<?php echo $berkebutuhan_khusus; ?>" > <span class="warning"> <?php echo $error_berkebutuhan_khusus; ?></span> 01 Tidak 02 Netra(A) 03 Rungu(B) 04 Grahita Ringan(C) 05 Grahita Sedang(C1) 06 Daksa Ringan(D) 07 Daksa Sedang(D1) 08 Laras(E) 09 Wicara(F) 10 Tuna ganda(G) 11 Hiper aktif(H) 12 Cerdas Istimewa(i) 13 Bakat Istimewa(J) 14 Kesulitan Belajar(K) 15 Narkoba(N) 16 Indigo(O) 17 Down Sindrome(P) 18 Autis(Q) <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="alamat" class="col-sm-3 col-form-label"> 19. Alamat </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="alamat" value="<?php echo $alamat; ?>" > <span class="warning"> <?php echo $error_alamat; ?></span>  <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="RT" class="col-sm-3 col-form-label"> 20. RT </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="RT" class="form-control <?php echo ($error_RT !="" ? "is-invalid" : ""); ?>" id="RT" placeholder="RT" value="<?php echo $RT; ?>" > <span class="warning"> <?php echo $error_RT; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>


	<div class="form-group row">
	<label for="RW" class="col-sm-3 col-form-label"> 21. RW </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="RW" class="form-control <?php echo ($error_RW !="" ? "is-invalid" : ""); ?>" id="RW" placeholder="RW" value="<?php echo $RW; ?>" > <span class="warning"> <?php echo $error_RW; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>


	<div class="form-group row">
	<label for="namadusun" class="col-sm-3 col-form-label"> 22. namadusun </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="namadusun" class="form-control <?php echo ($error_namadusun !="" ? "is-invalid" : ""); ?>" id="namadusun" placeholder="namadusun" value="<?php echo $namadusun; ?>" > <span class="warning"> <?php echo $error_namadusun; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>


	<div class="form-group row">
	<label for="namakelurahan" class="col-sm-3 col-form-label"> 23. Nama Kelurahan </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="namakelurahan" class="form-control <?php echo ($error_namakelurahan !="" ? "is-invalid" : ""); ?>" id="namakelurahan" placeholder="namakelurahan" value="<?php echo $namakelurahan; ?>" > <span class="warning"> <?php echo $error_namakelurahan; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="kecamatan" class="col-sm-3 col-form-label"> 24. Kecamatan </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="kecamatan" value="<?php echo $kecamatan; ?>" > <span class="warning"> <?php echo $error_kecamatan; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row"> 
	<label for="kodepos" class="col-sm-3 col-form-label"> 25. Kode Pos </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="kodepos" value="<?php echo $kodepos; ?>" > <span class="warning"> <?php echo $error_kodepos; ?></span> 
	 </div> <!-- membuat input type teks -->
	</div>

	<div class="form-group row">
	<label for="tempattinggal" class="col-sm-3 col-form-label"> 26. Tempat Tinggal </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="tempattinggal" class="form-control <?php echo ($error_tempattinggal !="" ? "is-invalid" : ""); ?>" id="tempattinggal" placeholder="tempattinggal" value="<?php echo $tempattinggal; ?>" > <span class="warning"> <?php echo $error_tempattinggal; ?></span> 1 Bersama orang tua 2 Wali 3 Kos 4 Asrama 5 Panti Asuhan 9 Lainnya
	 </div> <!-- membuat input type teks -->
	</div>

	<div class="form-group row">
	<label for="modaltransportasi" class="col-sm-3 col-form-label"> 27. modal transportasi </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="modaltransportasi" class="form-control <?php echo ($error_modaltransportasi !="" ? "is-invalid" : ""); ?>" id="modaltransportasi" placeholder="modaltransportasi" value="<?php echo $modaltransportasi; ?>" > <span class="warning"> <?php echo $error_modaltransportasi; ?></span> 01 Jalan Kaki 02 Kendaraan Pribadi 03 Kendaraan Umum/angkot/pete-pete 04 Jemputan Sekolah 05 Kereta Api 06 Ojek 07 Andong/Bendi/Sado/Dokar/Delman/Bece 08 Perahu penyebrangan/Rakit/Getek 99 Lainnya
	 </div> <!-- membuat input type teks -->
	</div>

	<div class="form-group row">
	<label for="nomorhp" class="col-sm-3 col-form-label"> 28. Nomor hp </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="nomorhp" class="form-control <?php echo ($error_nomorhp !="" ? "is-invalid" : ""); ?>" id="nomorhp" placeholder="nomorhp" value="<?php echo $nomorhp; ?>" > <span class="warning"> <?php echo $error_nomorhp; ?></span> 
	 </div> <!-- membuat input type teks -->
	</div>

	<div class="form-group row">
	<label for="nomortelepon" class="col-sm-3 col-form-label"> 29. Nomor telepon </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="nomortelepon" class="form-control <?php echo ($error_nomortelepon !="" ? "is-invalid" : ""); ?>" id="nomortelepon" placeholder="nomortelepon" value="<?php echo $nomortelepon; ?>" > <span class="warning"> <?php echo $error_nomortelepon; ?></span> <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="emailpribadi" class="col-sm-3 col-form-label"> 30. Email Pribadi </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="emailpribadi" class="form-control <?php echo ($error_emailpribadi !="" ? "is-invalid" : ""); ?>" id="emailpribadi" placeholder="emailpribadi" value="<?php echo $emailpribadi; ?>" > <span class="warning"> <?php echo $error_emailpribadi; ?></span>  <!-- membuat input type teks -->
	 </div>
	</div>

	<div class="form-group row">
	<label for="penerimakps" class="col-sm-3 col-form-label"> 31. Penerima KPS/PKH/KIP</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="penerimakps" class="form-control" > 01 Ya 02 Tidak  <!-- membuat input type teks -->
	</div>
	</div>

	<div class="form-group row">
	<label for="nokps" class="col-sm-3 col-form-label"> 32. No. KPS/KKS/PKH/KIP </label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="no_kps" class="form-control" >  <!-- membuat input type teks -->
	 </div>
	</div>


	<div class="form-group row">
	<label for="kewarganegaraan" class="col-sm-3 col-form-label"> 31. Kewarganegaraan</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="kewarganegaraan" class="form-control" > 01 WNI 02 WNA <!-- membuat input type teks -->
	</div>
	</div>

	<div class="form-group row">
	<label for="nama_nagara" class="col-sm-3 col-form-label"> Nama Negara</label>  <!--membuat label -->
	<div class="col-sm-5">
	<input type="text" name="nama_negara" class="form-control" >  <!-- membuat input type teks -->
	</div>
	</div>

	<div class="form-group row">
	 <div class="col-sm-10">
	 	<button type="submit" class="btn btn-primary" name="submit">Sign in</button> <!-- membuat input type button -->
	 </div>
	</div>
	</form>
	</div>
	</div>
	</div>
	</div>


</body>
</html>