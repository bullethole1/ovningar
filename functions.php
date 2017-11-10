<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// "HTTP/1.0 404 Not Found"
function status_header($code = 200) {
	$status_code = [
		200 => 'fuck you buddy!!!!!!!!',
		500 => 'server melldor',
	];
	header('HTTP/1.1 ' . $code . " " . $status_code[$code]);
}
status_header(500);

 //[header => värde];
 //Connection: Upgrade;
function headers(array $headers = []) {
    foreach ($headers as $header => $value) {
        header("$header: $value");
    }
}
headers([
    "Connection" => "Upgrade"
]);

function redirect($url, $code = 302) {

    header('Location:' . $url);

}

redirect('www.google.com');