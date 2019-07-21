<?php
 // Define relative path from this script to mPDF
  $nama_dokumen='Cetak Data Sertifikat'; 
define('_MPDF_PATH','../../../library/MPDF57/');
include(_MPDF_PATH . "mpdf.php");
//$mpdf = new mPDF('utf-8', 'namakertas-bentukkertas(L)');
//$mpdf = new mPDF('utf-8', 'LEGAL', '', 0, 0, 0, 0, 0, 0, ''); //* bentuk kertas A4 yang Potret
$mpdf = new mPDF('utf-8', 'LEGAL-L', '', 0, 0, 0, 0, 0, 0, ''); //* bentuk kertas A4 yang landscape

//$mpdf = new mPDF('utf-8', [width,height]);
//$mpdf = new mPDF('utf-8', [330,250], '', 0, 0, 0, 0, 0, 0, '');
//$mpdf = new mPDF('utf-8', [200,200], '', 0, 0, 0, 0, 0, 0, '');


$mpdf->SetHTMLHeader($header);
ob_start();

include '../../../conf/connection.php';
$bulan = @$_GET['bulan'];
$tahun = @$_GET['tahun'];
if ($bulan == "Januari") {
	$bln = 1;
}else
if ($bulan == "Februari") {
	$bln = 2;
}else
if ($bulan == "Maret") {
	$bln = 3;
}else
if ($bulan == "April") {
	$bln = 4;
}else
if ($bulan == "Mei") {
	$bln = 5;
}else
if ($bulan == "Juni") {
	$bln = 6;
}else
if ($bulan == "Juli") {
	$bln = 7;
}else
if ($bulan == "Agustus") {
	$bln = 8;
}else
if ($bulan == "September") {
	$bln = 9;
}else
if ($bulan == "Oktober") {
	$bln = 10;
}else
if ($bulan == "November") {
	$bln = 11;
}else
if ($bulan == "Desember") {
	$bln = 12;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Sertifikat</title>
<style type="text/css">
	.page{
		padding: 50px
	}

	.nama-header{
		line-height: 5px;
		font-size: 15px;
		text-align: center;
	}

	.logo-header{
		margin-top: -85px;
		padding-left: 50px;
		padding-bottom: 25px
	}

	.isi{

	}

	.isi-nama{
		border: 1px solid black;
		padding: 10px;
		width: 150px;
		font-weight: bold;
		margin-top: 10px;
		margin-bottom: 5px
	}

	.tabelnya{
		width: 100%;
		border-collapse: collapse;
		font-size: 12px
	}

	.tabelnya th, td{
		padding: 10px;
		border: 1px solid black;
	}

	.tabelnya th{
		background-color: #ddd;
		text-transform: capitalize;
	}

	.bawah{
		line-height: 10px;
		margin-left: 70%;
	}
</style>
</head>
<body >
<div class="page">
	<div class="header">
		<div class="nama-header">
			<p style="font-size: 18px; font-weight: bold;">Laporan Sertifikat</p>
			<!-- <P style="font-size: 18px; font-weight: bold;">KOMUNIKASI INFORMATIKA DAN PERSANDIAN</P>
			<p style="font-size: 17px; font-weight: bold;">Bidang Komunikasi Informasi Public</p> -->
			<!-- <p>KABUPATEN SITUBONDO JAWA TIMUR</p>
			<p>Jl. Pb. Sudirman No.1, Plaosan, Patokan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68312</p> -->
		</div>
		<!-- <div class="logo-header">
			<img src="../../../style/images/logo1.png" alt="Logo" width="80" height="80">
		</div>
		<div style="border-top: 2px solid black; "></div>
		<div style="border-top: 5px solid black; margin-top: 2px"></div>
	</div> -->
	<div style="padding: 5px 0px 5px 0px">
		Bulan : <?php echo $bulan. " ". $tahun ?>
	</div>
	<div class="isi">
		<div class="isi-tabel">
			<table class="tabelnya">
                <thead>
                <tr>
	                <th>No</th>
					<th>No Sertifikat</th>
					<th>Nama Pemilik</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                $no = 1;
                $q = $db->query("SELECT * FROM tb_sertifikat LEFT JOIN tb_user ON tb_sertifikat.id_username =
                                            tb_user.id_username
                                            LEFT JOIN tb_lampiran ON tb_sertifikat.id_lampiran=
                                            tb_lampiran.id_lampiran ");
                $cek = $q->num_rows;
                if ($cek == 0) {
                ?>
                <tr>
                	<td colspan="7">Data tidak tersedia</td>
                </tr>
                <?php
                }else{
                while($r = $q->fetch_array()){
                ?>
                <tr>
	                <td style="text-align: center;"><?php echo $no ?></td>
					<td><?php echo date("d-F-Y", strtotime($r['no_sertifikat'])) ?></td>
					<td><?php echo $r['nama_pemilik'] ?></td>
					<!-- <td><?php echo $r['nama_koordinator'] ?></td>
					<td><?php echo $r['nama_jenis_permohonan'] ?></td>
					<td  style="text-align: center;"><?php echo $r['jangka_waktu'] ?> Hari</td> -->
					<td></td>
                </tr>
                <?php $no++; } } ?>
                </tbody>
             </table>
		</div>
	</div>
	<br>
	<div class="bawah">
		<p>Sukorejo, <?php echo date("d F Y"); ?></p>
		<p style="margin-bottom: 100px">Mengetahui,</p>
		
		<p><b><u>Setiawan Edi P., S.Kom</u></b></p>
		<p>NIP : 19830620 201001 1 018</p>
	</div>
</div>
</body>
</html> 

<?php
$mpdf->SetHTMLHeader($header);
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>

