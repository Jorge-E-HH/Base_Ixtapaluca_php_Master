<?php
use Dompdf\Dompdf;
include_once "dompdf/autoload.inc.php";
$print_pdf_2022=new Dompdf();
$html=file_get_contents("http://localhost/xampp/Base_Ixtapaluca_php/tabla_pdf_2022.php?id_22=1");
$print_pdf_2022->loadHtml("$html");
$print_pdf_2022->setPaper("A4", "landingpage");
$print_pdf_2022->render();
$print_pdf_2022->stream();