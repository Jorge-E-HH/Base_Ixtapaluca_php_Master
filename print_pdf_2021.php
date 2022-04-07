<?php
use Dompdf\Dompdf;
include_once "dompdf/autoload.inc.php";
$print_pdf_2021=new Dompdf();
$html=file_get_contents("http://localhost/xampp/Base_Ixtapaluca_php/tabla_pdf_2021.php?id_21=2");
$print_pdf_2021->loadHtml("$html");
$print_pdf_2021->setPaper("A4", "landingpage");
$print_pdf_2021->render();
$print_pdf_2021->stream();