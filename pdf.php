<?php 
require_once 'app/config.php';

// Primero validar que existan cotizaciones y el parametro $_GET number
if(!isset($_GET['number'])) {
  redirect('index.php?error=invalid_number');
}

// Si no hay cotizaciones
$quotes = get_all_quotes();
if(empty($quotes)) {
  redirect('index.php?error=no_quotes');
}

// Buscar el match del folio que buscamos
$number = trim($_GET['number']);
$file   = sprintf(UPLOADS.'coty_%s.pdf', $number);

if(!is_file($file)) {
  // No existe la cotización
  redirect('index.php?error=not_found');
}

// Descarga
header('Content-Type: application/pdf');
header(sprintf('Content-Disposition: attachment;filename=%s', pathinfo($file, PATHINFO_BASENAME)));
readfile($file);
