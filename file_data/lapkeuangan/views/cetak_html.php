<?php
include("../../../library/MPDF57/mpdf.php");
 // Define relative path from this script to mPDF
 $nama_dokumen='buktibayar'; //Beri nama file PDF hasil.
define('_MPDF_PATH','MPDF57/');
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
ob_start();
?>

<?php
 //KONEKSI
$db = new mysqli("localhost","root","","ta_sukses (1)");

?>

<?php
function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
        $BulanIndo = array("JANUARI", "FEBRUARI", "MARET",
                           "APRIL", "MEI", "JUNI",
                           "JULI", "AGUSTUS", "SEPTEMBER",
                           "OKTOBER", "NOVEMBER", "DESEMBER");
    
        $tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
        $bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
        $tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
        
        $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
        return($result);
}
?>

<!-- <h1 style='text-align:center;'><img src="logo.jpg" width=700 /></h1> -->
<?php
include "../../../conf/connection.php";
      $q = $db->query("SELECT *FROM`trans_aruskas` INNER JOIN `master_pengeluaran` ON `trans_aruskas`.`id_master_pengeluaran` =
    `master_pengeluaran`.`id_master_pengeluaran`");
$no=1;
$r = $q->fetch_array();
echo
'<div style="text-align:center">
            <img src="../../../style/images/logo.png"  width="190" height="70">
            <p style="font-size: 16px; font-weight: bold;">SUB BAGIAN PENGAJIAN DAN BAHTSUL MASAIL PUTRI <br>
            <style="font-size: 16px; font-weight: bold;">PONDOK PESANTREN SALAFIYAH SYAFIIYAH <br>
            <style="font-size: 12px; font-weight: bold;">SUKOREJO SITUBONDO JAWA TIMUR 
            <div style="border-top: 1px solid black; "></div>
            <div style="border-top: 1px solid black; margin-top: 1px"></div>   
             <p style="font-size: 14px;"><b>LAPORAN KEUANGAN BULANAN </b><br>
            <style="font-size: 8px;">Bulan : '.date("d M Y").'<br>
            <style="font-size: 3px;">Nomor : 10/0828/PBM Pi/X/ 2017     
        </div>
<br>
	<table>
<tr>
<td width=300>A. SALDO KAS AWAL BULAN &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td></tr><br>
<tr>
<td width=800>&nbsp; &nbsp; &nbsp;A. Saldo Lebih (+) &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; <td>1.079.011</td></tr><br>
<tr>
<td width=800>&nbsp; &nbsp; &nbsp;B. Saldo Kurang (-)     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -</td></tr><br>
<tr>
<td width=150>B. PEMASUKAN</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;1. Anggaran Buget dari P2S2  &nbsp; &nbsp; &nbsp;  Rp. &nbsp; &nbsp; &nbsp; - </td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;2. Lain-lain &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; - </td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <b>JUMLAH DEBET<b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; 1.079.011</td></tr><br><br>
<tr>
<td width=150>C. PENGELUARAN</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;1. Barokah Tenaga Pengajar Amstilati &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; 1.100.000</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;2. Barokah Pimpinan dan Staf &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  Rp. &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;3. Transport &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;4. Adminitrasi &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 244.850</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;5. Konsumsi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;139.980</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;6. Rekening </td></tr><br>
<tr>
<td width=300>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; a. Listrik dan Air &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Rp.  &nbsp; &nbsp; &nbsp;  - </td></tr><br>
<tr>
<td width=300>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; b. Telepon dan internet &nbsp; &nbsp; &nbsp;  Rp. &nbsp; &nbsp; &nbsp; - </td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;7. Pengadaan &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;8. Pemeliharaan Rutin &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;9. Pembinaan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;-</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;10. Perpustakaan dan Laborat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;11. Lain-lain &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;415.000</td></tr><br>
<tr>
<td width=150>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <b>JUMLAH KREDIT &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Rp. &nbsp; &nbsp; &nbsp; 1.899.830<b></td></tr><br>
<tr>
<td width=150>D. SALDO KAS AKHIR BULAN &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b> Rp. &nbsp; &nbsp; &nbsp; (820.819)</b></td></tr><br>
<tr>
</table><br>
	
<tr>

 <div style="bawah">   &emsp;Kabag, Pendidikan Non Formal &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp; &emsp;Sukorejo,'.date("d M Y").' <br> 
        <div style="text-align:">  &emsp;Menyetujui, &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Kasubag. PBM Putri <br><br><br><br>

        
        <p><b> &emsp;<u> Dra. Muani</u>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u>Aizatul Mustafidah,S.Ag</u></b></p>
<p>&emsp;<u> Tembusan disampaikan Kepada Yth :</u><br>
&emsp;1. Ketua BPK2M </P>
</div>
</div>

</div>';


?>
<!--CONTOH Code END-->
 
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output('Bukti Bayar'.".pdf" ,'I');
exit;
?>