<?php
 
// mengincludekan file berisi class nusoap
require_once('lib/nusoap.php');
// instansiasi class soap untuk server
$server = new nusoap_server;
$server->configureWSDL('server_wsdl', 'urn:server_wsdl');


$server->register('jumlahkan',
    array('x'=> 'xsd:string', 'y' => 'xsd:string'),
    array('return' => 'xsd:string'),
);

$server->register('kurangi',
    array('a'=>'xsd:string', 'b' => 'xsd:string'), 
    array('return' => 'xsd:string') 
);

// $client->request;
 
// detil isi method 'jumlahkan'
function jumlahkan($x, $y) {
    $hasil = $x+$y;
    return $hasil;
}
 
// detil isi method 'kurangi'
function kurangi($a, $b) {
    $kurang = $a - $b;
    return $kurang;
}
 
 
// memberikan response service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
// $server->service($HTTP_RAW_POST_DATA);
$server->service(file_get_contents("php://input"));
exit()
?>