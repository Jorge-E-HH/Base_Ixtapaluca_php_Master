<?php
use Dompdf\Dompdf;
include_once "dompdf/autoload.inc.php";
$print_pdf_2023=new Dompdf();
$html=file_get_contents("http://localhost/xampp/Base_Ixtapaluca_php/tabla_pdf_2023.php?id_23=1");
$print_pdf_2023->loadHtml("$html");
$print_pdf_2023->setPaper("A4", "landingpage");
$print_pdf_2023->render();
$print_pdf_2023->stream();


