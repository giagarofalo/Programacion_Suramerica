<?php





// Include Composer autoloader if not already done.
include 'vendor/autoload.php';
 
// Parse pdf file and build necessary objects.
$parser = new \Smalot\PdfParser\Parser();
$pdf    = $parser->parseFile('constancia.pdf');
 
$text = $pdf->getText();
echo $text;
 
 
 
 
 
 /*
 
$file = $_POST['file'];











$apellidos = $_POST['apellidos'];

$nombre = $_POST['nombre'];
$identidad = $_POST['identidad'];

$censo = $_POST['censo'];

*/












?>