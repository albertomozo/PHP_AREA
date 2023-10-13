<?php 
require_once 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
include('03-modelo.php');
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Genera el nombre del archivo PDF
$filename = 'ejemplo_'.$time.'.pdf';

// Guarda el archivo PDF en el servidor
$output = $dompdf->output();
file_put_contents($filename, $output);

echo "PDF generado y guardado en el servidor.";
// Output the generated PDF to Browser
//$dompdf->stream();

?>
<a href="<?php echo $filename; ?>" target="_blank">documento</a>