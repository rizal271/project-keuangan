<?php
ob_start();
include "cetak_html.php";
$content = ob_get_clean();
require_once("../../../library/html2pdf/html2pdf.class.php");
try
{
$html2pdf = new HTML2PDF('P','legal', 'en', false, 'ISO-8859-15',array(20,5,20,10));
$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
$html2pdf->Output('Laporan Sertifikat.pdf');
}
catch(HTML2PDF_exception $e) { echo $e; }
?>