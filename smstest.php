

<?php 

$apikey = "sPbQcFPI2EmTpdPmdlGYQQ";
$apisender = "KINDIA";
$msg ="Dear $name Your Account has been Created Successfully. your user name is $username and password is $password. H2B. http://holly2bolly.com";
$phn_no = 'xxxxxxxxxx'; //Add your number for testing.
$num = '91'.$phn_no; 

$ms = rawurlencode($msg);  

$url = 'https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey='.$apikey.'&senderid='.$apisender.'&channel=2&DCS=0&flashsms=0&number='.$num.'&text='.$ms.'&route=1';

echo $url;
$ch=curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
$data = curl_exec($ch);
//$info = curl_getinfo($ch);
echo '<br/><br/>';
print($data);
//if($info['http_code'] == 200) {
//    $xmlparser = xml_parser_create();
//    xml_parse_into_struct($xmlparser,$data,$xml_val$index);
//    xml_parser_free($xmlparser);
//    
//}




?>