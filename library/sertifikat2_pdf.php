<?php ob_start(); ?>
<html>
<head>
	<title>Cetak PDF</title>
</head>
<?php
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
        $BulanIndo = array("Januari", "Februari", "Maret",
                           "April", "Mei", "Juni",
                           "Juli", "Agustus", "September",
                           "Oktober", "November", "Desember");
    
        $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
        $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
        $tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
        
        $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
        return($result);
}
?>	
<body>
<table align='center'>
<tr align='center'><td><img src='http://localhost/bismillahsip/style/images/logo.jpg' width='100' height='100'></td><br><br>
<br><br>
</tr>
</table>
<table align='center'>
<tr align='center'><td><h1><u>SERTIFIKAT</u></h1>
Nomor :.........../............./............/..........
</td></tr>
<tr><td>
<br>
<br>
<br>
Berdasarkan Keputusan Kepala Unit Pelaksana Teknis Pelatihan Kerja Situbondo<br>
Nomor........../............/.......... Tanggal ........ menerangkan :
</td></tr>
</table>
<br>
<?php
$cari = $_GET['nis'];
mysql_connect("localhost","root","") or die("koneksi gagal");
mysql_select_db("suptpk");
$qq = mysql_fetch_array(mysql_query("select * from tb_siswa where nis='$cari'"));
$nama_siswa = $qq['nama_siswa'];
$tempat_lahir = $qq['tempat_lahir'];
$tgl = DateToIndo($qq['tgl_lahir']);
$alamat = $qq['alamat_siswa'];
$pelatihan = $qq['jenis_pelatihan'];
$j = mysql_fetch_array(mysql_query("select * from tb_siswa,tb_subkejuruan,tb_kejuruan where tb_siswa.id_subkejuruan=tb_subkejuruan.id_subkejuruan
and tb_kejuruan.id_kejuruan=tb_subkejuruan.id_kejuruan and tb_subkejuruan.id_subkejuruan='$qq[id_subkejuruan]' and nis='$cari'"));
$tgl_start = DateToIndo($j['start_pelatihan']);
$tgl_end   = DateToIndo($j['end_pelatihan']);
?>
<br> 
<table align='left' width='100%'>
<tr align='left'><td>Nama</td><td>:</td><td><b><?php echo $nama_siswa;?></b></td></tr>
<tr align='left'><td>Tempat, Tgl. Lahir</td><td>:</td><td><?php echo "$tempat_lahir, $tgl";?></td></tr>
<tr align='left'><td>Nomor Induk</td><td>:</td><td><?php echo $cari;?></td></tr>
</table>
<br>
<br>
<table align='center'>
<tr><td>Telah mengikuti Pelatihan <?php echo $pelatihan;?>, Kejuruan <?php echo $j['nm_kejuruan'];?>, Sub Kejuruan <?php echo $j['nm_subkejuruan'];?>
  yzng dilaksanakan seama 240 Jam Latih mulai tanggal <?php echo $tgl_start;?> s/d <?php echo $tgl_end;?> dengan hasil : <b>BAIK</b>.</td></tr>
</table>

<br><br><br>
<table align='right'>
<tr><td></td><td align='center'>SITUBONDO, <?php echo date("j F Y");?>
<br>KEPALA UNIT PELAKSANA TEKNIS
<br>PELATIHAN KERJA SITUBONDO
<br>
<br>
<br>
<br>.........................................
<br>Nip...................................
<br>
<br>
<br><br><br><br><br><br>
</td></tr>
</table>

<?php

$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Sertifikat.pdf', 'D');

?>