<?php

require_once 'lib/nusoap.php';

$client = new nusoap_client('http://localhost/XML/server.php?wsdl', 'wsdl', true);
$bil1 = 10; 
$bil2 = 15;

$result = $client->call('jumlahkan', array('x' => $bil1, 'y' => $bil2));
$resultes = $client->call('kurang', array('a' => $bil1, 'b' => $bil2));

if($client->fault){
  echo 'Fault';
  print_r($result);
}else{
  $err = $client->getError();
  if($err){
    echo 'Gagal'.$err;
  } else {
    echo "<p>Hasil Penjumlahan".$bil1." dan ".$bil2/" adlah" .$result."</p>";
    echo "<p>Hasil pengurangan".$bil1." dan ".$bil2/" adlah" .$resultes."</p>";
    echo "<p>Hasil pengurangan".$bil1." dan ".$bil2/" adlah" .$resultes."</p>";
  }
}

?>