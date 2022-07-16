<?php
//
//$init = curl_init();
//
////set option
//$url="file:///C:/xampp/htdocs/ajax%20test/object.json";
//curl_setopt($init,CURL_URL,$url);
//curl_setopt($init,CURLOPT_RETURNTRANSFER,true);
//curl_setopt($init,CURLOPT_HEADER,true);
//
//$out = curl_exec($init);
//
//$info = curl_getinfo($init);
//print_r($out);
//
//curl_close($init);
//
//

/*   send SMS

$curl = curl_init();
$data = array(
    'messaging_product' => 'whatsapp',
    'to' => '201017987421',
    'text' => array('body' => 'test')
);

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://graph.facebook.com/v12.0/108562701915916/messages?access_token=EABOvYfMXZCIYBAGWOSEVgEnWN5HgACi5SdqxXgPsb7hs6eOJNZCni9TDgp51ayJj2RMUl1oZAwItTCd8cxr5zIAZBnlE0wYBUtxvvvSSvUUBR1RjPEtiMZAJfXDKXGSJi2i1RIuLNszx8HoMWVy0fVq6FfYW3eJpTGUKIrOpHMj50mZATsCWN3Ue5DDi7WU090DfJZCJGQpUJ42vtjiBzg2JFyCOMy37ZC4ZD",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => http_build_query($data)
    ,
    CURLOPT_HTTPHEADER => array(
        "content-type: application/json"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

$git = curl_getinfo($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
    echo "<br>";
    print_r($git);
}
*/

$data = file_get_contents("php://input");
$event = json_decode($data, true);
if(isset($event)){
    //Here, you now have event and can process them how you like e.g Add to the database or generate a response
    $file = 'log.txt';
    $data =json_encode($event)."\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);}