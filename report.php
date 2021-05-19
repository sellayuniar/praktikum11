<?php
include('koneksi.php'); //memasukan file koneksi.php
require_once("dompdf/autoload.inc.php"); //memasukan file autoload.inc.php
use Dompdf\Dompdf; //menggunakan namespace Dompdf
$dompdf = new Dompdf(); //membuat objek dengan class Dompdf
$query = mysqli_query($koneksi,"select * from tb_siswa"); // query untuk menampilkan data tb_siswa
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/><br/>';//membuat variabel $html yang berisi code html
$html .= '<table border="1" width="100%"> 
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Kelas</th>
 <th>Alamat</th>
 </tr>';
$no = 1; //untuk memberi nomor urut
while($row = mysqli_fetch_array($query)) //perulangan untuk menyimpan data
{//variabel $html untuk menyimpan data
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['kelas']."</td>
 <td>".$row['alamat']."</td>
 </tr>";
 $no++;
}
$html .= "</html>"; //untuk menutup html
$dompdf->loadHtml($html);//melakukan konververi code html yang ada di variabel $html
$dompdf->setPaper('A4', 'potrait'); // Setting ukuran dan orientasi kertas
$dompdf->render();// Rendering dari HTML Ke PDF
$dompdf->stream('laporan_siswa.pdf'); // Melakukan output file Pdf
?>