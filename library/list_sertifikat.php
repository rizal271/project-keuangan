<div class="col-lg-14 col-md-14">
    <div class="card">
        <div class="card-header">
            <a href="admin.php" class="text-primary m-r-1 m-b-xs" data-toggle="tooltip" data-placement="right" title="On the Right!">
            <b>Home</b>
            </a>
            <a href="" class="text-primary m-r-1 m-b-xs" data-toggle="tooltip" data-placement="right" title="On the Right!">
            <b>/</b>
            </a>
            <a href="admin.php?target=sertifikat" class="text-primary m-r-1 m-b-xs" data-toggle="tooltip" data-placement="right" title="On the Right!">
            <b>Sertifikat</b>
            </a>
       
        <div class="card-controls">
        <a href="javascript:;" class="card-collapse" data-toggle="card-collapse"></a>
        </div>
        </div>
        <div class="card-block">

        <form method="post" action="admin.php?target=sertifikat" name='cari' class="form-horizontal form-label-left">


        <fieldset class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
            NIS
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select name="nis" class="form-control show-tick">
                <option value="">Pilih NIS Siswa</option>
                <?php
                include "conf/connection.php";
                $q = $db->query("SELECT * from tb_siswa");
                while ($r = $q->fetch_array()) {
                ?>
                <option value="<?php echo $r['nis'];?>">
                    <?php echo $r['nis'];?>
                </option>
                <?php
            }
            ?>
                </select>
            </div>
        </fieldset>
		
<fieldset class="form-group">
        <div class="col-md-6 col-sm-6 col-xs 12 col-md-offset-3">
            <input type="submit" class="btn btn-success" value="Cari"/>
        </div>
        </fieldset>
		</form>
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
<table align='center'>
<tr align='center'><td><img src='style/images/logo.jpg' width='100' height='100'></td><td><h5>PEMERINTAH PROVINSI JAWA TIMUR<br>
DINAS TENAGA KERJA DAN TRANSMIGRASI<br>
UNIT PELAKSANA TEKNIS PELATIHAN KERJA SITUBONDO<br>
Jln. Basuki Rahmat No. 357 Situbondo Telp/Fax. 0338 - 672054<br>
SITUBONDO - 68322</h5>
</td></tr>
</table>
<hr>

<?php
include "conf/connection.php";
$cari = $_POST['nis'];
mysql_connect("localhost","root","") or die("koneksi gagal");
mysql_select_db("suptpk");
$qq = mysql_fetch_array(mysql_query("select * from tb_siswa where nis='$cari'"));
$tgl = DateToIndo($qq['tgl_lahir']);
$nama_siswa = $qq['nama_siswa'];
$tempat_lahir = $qq['tempat_lahir'];
$tgl = $tgl;
$alamat = $qq['alamat_siswa'];
$pelatihan = $qq['jenis_pelatihan'];
$j = mysql_fetch_array(mysql_query("select * from tb_siswa,tb_subkejuruan,tb_kejuruan where tb_siswa.id_subkejuruan=tb_subkejuruan.id_subkejuruan and tb_kejuruan.id_kejuruan=tb_subkejuruan.id_kejuruan and tb_subkejuruan.id_subkejuruan='$qq[id_subkejuruan]' and nis='$cari'"));
$m = mysql_fetch_array(mysql_query("select * from tb_siswa,sertifikat where tb_siswa.nis=sertifikat.nis and sertifikat.no_sertifikat='$qq[no_sertifikat]' and nis='$cari'"));
$tgl_start = DateToIndo($j['start_pelatihan']);
$tgl_end   = DateToIndo($j['end_pelatihan']);
?>
<table align='center'>
<tr align='center'><td><h1><u>SERTIFIKAT</u></h1>
Nomor Sertifikat : <?php echo $j['no_sertifikat']; ?>
</td></tr>
<tr><td>
Kepala Unit Pelaksana Teknis Pelatihan Kerja Situbondo (UPTPK Situbondo) berdasarkan  Surat Keputusan Penyelenggaraan
Pelatihan Nomor : .........../............./............/.......... Tanggal <?php echo date("j F Y");?> menyatakan bahwa :
</td></tr>
</table>

    
<table align='left' width='100%'>
<tr align='left'><td>NIS</td><td>:</td><td><?php echo $cari;?></td></tr>
<tr align='left'><td>Nama</td><td>:</td><td><?php echo $nama_siswa;?></td></tr>
<tr align='left'><td>Tempat, Tgl. Lahir</td><td>:</td><td><?php echo "$tempat_lahir, $tgl";?></td></tr>
<tr align='left'><td>Alamat</td><td>:</td><td><?php echo $alamat;?></td></tr>
</table>
<br>
<br>
<br>
<table align='center'>
<tr align='center'><td><h5><u>Telah Mengikuti</u></h5></td></tr>
<tr><td>Pelatihan Program <?php echo $pelatihan;?>(PBK), Kejuruan <?php echo $j['nm_kejuruan'];?> Sub Kejuruan <?php echo $j['nm_subkejuruan'];?>
 dari tanggal <?php echo $tgl_start;?> sampai dengan <?php echo $tgl_end;?> dan dinyatakan <u>KOMPETEN</u>.</td></tr>
</table>

<br><br>
<table align='right'>
<tr><td></td><td align='center'>SITUBONDO, <?php echo date("j F Y");?>
<br>UNIT PELAKSANA TEKNIS PELATIHAN KERJA SITUBONDO
<br>KEPALA SEKSI PELATIHAN DAN SERTIFIKASI
<br>
<br>
<br>
<br>.........................................
<br>Nip...................................
</td></tr>
</table>

<a href='library/sertifikat_pdf.php?nis=<?php echo $cari;?>' class='btn btn-default'><i class='material-icons' aria-hidden='true'>print</i>Cetak PDF</a>


</div>
</div>
</div>

<!--IMRAATUL MUFIDAH-->