<?php
 
require_once('lib/nusoap.php');
 
// dua bilangan yang akan dijumlahkan
$bil1 = 10;
$bil2 = 25;
 
// instansiasi obyek untuk class nusoap client
$client = new nusoap_client('http://localhost/XML/server.php');
// proses call method 'jumlahkan' di script server.php yang ada di komputer B
$result = $client->call('jumlahkan', array('x' => $bil1, 'y' => $bil2));
 
echo "<p>Hasil penjumlahan ".$bil1." dan ".$bil2." adalah ".$result."</p>";
 
?>