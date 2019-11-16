<?php
//https://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b6907d289e10d714a6e88b30761fae22

// адрес запроса&mode=xml
//api.openweathermap.org/data/2.5/forecast/daily?q=London&mode=xml&units=metric&cnt=7
$url = "http://api.openweathermap.org/data/2.5/forecast/daily?q=Kiev&units=metric&cnt=5&lang=ua&apikey=731fdb9f46272f54a8b68c894765410b";
//$url = "http://api.openweathermap.org/data/2.5/weather?q=Kiev,ua&cnt=5&units=metric&lang=ua&apikey=731fdb9f46272f54a8b68c894765410b";
//$url = "https://samples.openweathermap.org/data/2.5/weather?q=Kiev,ua&appid=731fdb9f46272f54a8b68c894765410b";
//$url = 'http://sms2.cdyne.com/sms.svc/SimpleSMSsendWithPostback? PhoneNumber=18887477474&Message=test&LicenseKey=LICENSEKEY';
$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);
curl_setopt ($cURL, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($cURL, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
$result = curl_exec($cURL);
curl_close($cURL);
//print_r($result);
//$result = '{"Cancelled":false,"MessageID":"402f481b-c420-481f-b129-7b2d8ce7cf0a","Queued":false,"SMSError":2,"SMSIncomingMessages":null,"Sent":false,"SentDateTime":"\/Date(-62135578800000-0500)\/"}';
$json = json_decode($result, true);
echo '<pre>';
print_r($json);
echo '</pre>';
//var_dump($json);