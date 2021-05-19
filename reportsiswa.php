<?php
include('koneksi2.php');//memasukan file koneksi.php
require_once("dompdf/autoload.inc.php");//memasukan file autoload.inc.php
use Dompdf\Dompdf; //menggunakan namespace Dompdf
$dompdf = new Dompdf(); //membuat objek dengan class Dompdf
$query = mysqli_query($koneksi,"select * from siswa"); // query untuk menampilkan data siswa
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/><br/>';//membuat variabel $html yang berisi code html
$html .= '<table border="1" width="100%">
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
 </tr>';
$no = 1;  //untuk memberi nomor urut
while($row = mysqli_fetch_array($query)) //perulangan untuk menyimpan data
{//variabel $html untuk menyimpan data
 $html .= "<tr>
<td>".$no."</td>
<td>".$row['jenis_pendaftaran']."</td> 
<td>".$row['tanggal_masuk_sekolah']."</td>  
<td>".$row['NIS']."</td> 
<td>".$row['nomor_peserta_ujian']."</td>   
<td>".$row['pernah_paud']."</td> 
<td>".$row['pernah_tk']."</td>  
<td>".$row['no_seri_SKHUN']."</td>  
<td>".$row['no_seri_ijazah']."</td> 
<td>".$row['Hobi']."</td>           
<td>".$row['cita_cita']."</td>     
<td>".$row['nama_lengkap']."</td> 
<td>".$row['jenis_kelamin']."</td> 
<td>".$row['NISN']."</td> 
<td>".$row['NIK']."</td> 
<td>".$row['tempat_lahir']."</td> 
<td>".$row['tanggal_lahir']."</td>  
<td>".$row['agama']."</td>    
<td>".$row['berkebutuhan_khusus']."</td> 
<td>".$row['alamat']."</td> 
<td>".$row['RT']."</td>  
<td>".$row['RW']."</td>  
<td>".$row['nama_dusun']."</td> 
<td>".$row['nama_kelurahan']."</td>
<td>".$row['kecamatan']."</td>  
<td>".$row['kode_pos']."</td> 
<td>".$row['tempat_tinggal']."</td>
<td>".$row['modal_transportasi']."</td> 
<td>".$row['nomor_hp']."</td> 
<td>".$row['nomor_telepon']."</td> 
<td>".$row['email_pribadi']."</td> 
<td>".$row['penerima_kps']."</td>          
<td>".$row['kewarganegaraan']."</td>
</tr>";
 $no++;
}
$html .= "</html>"; //untuk menutup html
$dompdf->loadHtml($html); //melakukan konververi code html yang ada di variabel $html
$dompdf->setPaper('A4', 'landscape');// Setting ukuran dan orientasi kertas
$dompdf->render(); // Rendering dari HTML Ke PDF
$dompdf->stream('laporan_siswa_pendaftar.pdf');// Melakukan output file Pdf
?>