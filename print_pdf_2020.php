<?php
use Dompdf\Dompdf;
include_once "dompdf/autoload.inc.php";
$print_pdf_2020=new Dompdf();
$html=file_get_contents("http://localhost/xampp/Base_Ixtapaluca_php/tabla_pdf_2020.php?id_20=1");
$print_pdf_2020->loadHtml("$html");
$print_pdf_2020->setPaper("A4", "landingpage");
$print_pdf_2020->render();
$print_pdf_2020->stream();