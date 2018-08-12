<?php
$contractArray = $_POST;


//next example will insert new conversation
$service_url = 'https://tcc353.encs.concordia.ca/api/index.php/contracts';
$curl = curl_init($service_url);
$curl_post_data = array(
    'company' => $contractArray['company'],
    'category' => $contractArray['category'],
    'serviceType' => $contractArray['serviceType'],
    'acv' => $contractArray['acv'],
    'initialAmount' => $contractArray['initialAmount'],
    'manager' => $contractArray['manager'],
);
$headers = array(
    'Authorization: Basic '.base64_encode($_SERVER['PHP_AUTH_USER'].':'.$_SERVER['PHP_AUTH_PW'])
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
curl_exec($curl);
$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);


if ($httpcode == 200) {
    header("Location: ../site/SAhome.php");
}
else{
    echo 'Error';
}