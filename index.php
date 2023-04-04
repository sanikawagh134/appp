<?php
// this is index first visit of user
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
?>
<!DOCTYPE html>
<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
     <meta http-equiv="cache-control" content="no-cache" />
    <title>Ang Key ng Ina mo - ang susi sa buhay mo</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            text-align: center;
        }

        input[type="password"] {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            font-size: 16px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>Password required to open this page:</h2>
        <div style="text-align:center;">
            <input type="password" name="pass" placeholder="sabi po nino?">
        </div>
        <input type="submit" value="Enter">
    </form>
<?php
}

// this is the page when successfully entered the correct password & requires url
if (isset($_POST['pass']) && $_POST['pass'] === 'amacanaaclaa'
    && (!isset($_POST['url']) || empty($_POST['url']))) {

$pass = $_POST['pass']; // get the pass from the previous form

echo '<!DOCTYPE html>
<html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
     <meta http-equiv="cache-control" content="no-cache" />
    <title>Ang Key ng Ina mo - ang susi sa buhay mo</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            text-align: center;
        }

        select {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            font-size: 16px;
            text-align: center;
        }

        input[type="text"] {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            font-size: 16px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <h2>Provide the stripe co link below:</h2>
        <div style="text-align:center;">
            <input type="hidden" name="pass" value="'.$pass.'">
            <input type="text" name="url" placeholder="paste the link here" value"">
            <select name="pk_live_key">
            <option selected disabled hidden>Select PK Options</option>
            <option value="pk_live_rHudX0Gd50MtPyISpIBdShXq">Mediafire</option>
            <option value="pk_live_ogltRjx6AGmhikTNJbgDIYJI005E2bBVzA">Moviebox</option>
            <option value="pk_live_51HOrSwC6h1nxGoI3lTAgRjYVrz4dU3fVOabyCcKR3pbEJguCVAlqCxdxCUvoRh1XWwRacViovU3kLKvpkjh7IqkW00iXQsjo3n">ChatGPT Plus</option>
            <option value="pk_live_51HtphAFvxRVevdXSwMmqH6AzYjQRWtAjYcWph5j2bXoiX9kaBFjYXhCKUJCiyINW37mNarSXvEJe5SeNe6tMLrww00oQ7rdo13">Lezhin</option>
            <option value="pk_live_r5Nvu05SdIl33lqWlJl4i1th00F3uwarsX">Fecurity</option>
            <option value="pk_live_51Klny6JavIy9pYdOCk6XphadL80gWZLgPnyWI4DXPHkyO6ocDGZg6hm9Wt67Ogzc11UodLsBO5PQDEVL1kigVDhS00a8GLusLv">MidJourney</option>
            <option value="pk_live_51HgodtGRvHz7HxXDZGoHvg6LA2ETexYxMH2A4LYbNN8n6lqzGuk3CkdrHWFQ3P3B7Dh448mBs6OJnpIFl7V9sgYD00FLvhh9TB">HydraProxy</option>
            <option value="pk_live_NjCA1yGv5ie85lOhnTt2E11z005pitDerS">BlackBox AI</option>
            <option value="pk_live_51Ika5JA3KZ32dPo1Uxw4aqV0ZMlJ6ATznaCs2P3nJCtDAwj6qw0ACmoab3PrB9eGfrWmxHVtrcWZcSohktLW26Ji00gnr09tHq">Twitter Blue</option>
            <option value="pk_live_51In2OQF6KbQh44q11COsLzIbvnPzOdzg6WIOXQHDFMm9TnI4pjt1tJm9V6tulgkaBozAHONpUdjLHJeJDW1rxneD001MeE6VpM">Suschegg</option>
            <option value="pk_live_51MEOFDA01fqdGEElh0LoXayHzN2Dmoh5B4IpPQ1g3hQLXMNLtSnahZLF5oKcIEi9sIOM9Fx9xNbBI93LKrlToyfX00DwmCXds8">Redfinger</option>
            <option value="pk_live_51McKbyIj7RaCgFGVFRur9zCpNqqXAievH3zLpgf1WpmtcIIYIFlzFiKUHUuxly3zss78QnZtr8AaqHkJvRRchjSG00nQrHQcPW">nat.dev</option>
            <option value="pk_live_5C5OBFQIejDjAbVnFmZGpcRg">instaproxy</option>
            <option value="pk_live_51JbCOgG4xVdWcYVX7t5gYnyeM2EjwUKgKecEMPHBII5ym8CgfLbo1SCTDfqsLlISxfWruslI2Riz7SOIzwu86eRr00WLhP8xHm">juproxy</option>
            <option>I will provide my own pk_live</option>
            </select>
        </div>
        <input type="submit" value="Proceed">
    </form>';
};
// this is the page when successfully entered the correct password & url
if (isset($_POST['pass']) && $_POST['pass'] === 'amacanaaclaa'
    && isset($_POST['url']) && !empty($_POST['url']) && isset($_POST['pk_live_key']) && !empty($_POST['pk_live_key'])) {
?>
<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>Alice Schuberg - autoco</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  </head>
<body class="vertical-layout" style="background-color:#112132;" data-color="bg-gradient-x-purple-blue">   
  <style>
		h5,h4{
			color:white;
		}
		.text-center{
			background-color:#0e1d2c;
			border:1px solid #525252;
			border-radius:5px;
		}
		textarea{
			color:white;
			resize: none;
		}

		.text-center::placeholder{
			color:grey;
		}
		.text-center:focus{
			background-color:#0e1d2c;
		}

		textarea::-webkit-scrollbar {
  			width: 5px;
 			background-color: #112132; 
		}

		textarea::-webkit-scrollbar-thumb {
 			border-radius: 10px;
  			background-color: #2e4964; 
		}
		.lista_reprovadass{
			color:#747474;
		}
		.card-body{
			background-color: #1c3044; 
			border-radius:5px;
		}
		.text-center{
			border:none;
		}
		.badge-success,.btn-success{
			background-color: #ffe74c;
			color:black	;
			border:none;
		}
		.btn-success:hover{
			background-color: #c9b63c;
			border:none;
			color:black;
			shadow:hidden;
		}
		.aprovadas{
			background-color: #35a7ff;
			color:black	;
		}
		.badge-danger{
			background-color: #ff5964;
			color:black	;
		}
		.html body .content .content-wrapper{
			background-color:#112132;
		}

		.btn-bg-gradient {
  			background-image: linear-gradient(to right, #FF8008 0%, #FFC837  51%, #FF8008  100%);
   			 margin: 5px;
			 width:49%;
    		padding: 12px 40px;
    		text-align: center;
    		text-transform: uppercase;
    		transition: 0.5s;
    		background-size: 200% auto;
    		color: white;            
    		box-shadow: 0 0 20px #eee;
    		border-radius: 5px;
    		display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}

  		.btn-bg-gradient:hover {
   			background-position: right center; /* change the direction of the change here */
    		color: #fff;
    		text-decoration: none;
  		}

		  .btn-bg-gradient-x {
			background-image: linear-gradient(to right, #ee0979 0%, #ff6a00  51%, #ee0979  100%);
            margin: 5px;
            padding: 12px 45px;
			
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}

  		.btn-bg-gradient-x:hover {
			background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
  		}

		  .statusbar{
			height:320px;
			padding-top:50px;
		  }
		  .hr-statusbar{
			border:none;
			height:1px;
			background-color:#3c5c7c;
		  }
		  
		  option { 
    /* Whatever color  you want */
    background-color: #112132;
	color: white;
	}
	</style>
	
    <div class="app-content content" style="display:block;">
      <div class="content-wrapper" style="background-color:#112132;">
<?php

// get fraud score of your ip
$url = 'https://api.ipify.org/';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip = curl_exec($ch);
curl_close($ch);
$url = "https://scamalytics.com/ip/$ip";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
curl_close($ch);

// find the fraud score value in the HTML using a regular expression
preg_match('/Fraud Score: ([0-9]+)/', $html, $matches);
$fraud_score = isset($matches[1]) ? $matches[1] : null;
preg_match('/"risk":"(.*?)"/', $html, $matches);
$risk = isset($matches[1]) ? $matches[1] : null;

if ($fraud_score !== null) {
    $finalscore = "$fraud_score";
} else {
    $finalscore = "";
}
if ($risk !== null) {
    $risk = strtoupper($risk);
} else {
    $risk = "";
}

    
	 echo '<div class="text-center" style="background-color:#112132;">
	 <h4 class="mb-2"><strong>Alice Schuberg\'s Stripe Auto-Checkout</strong></h4>
	 <div class="form-group">
	 CHECKED OUT: <span class="badge badge-success charge">0</span>
	 LIVE: <span class="badge badge-success aprovadas"> 0</span>
	 DEAD: <span class="badge badge-danger reprovadas"> 0</span>
	 TOTAL: <span class="badge badge-primary carregadas"> 0</span>
	 LIMIT: <span class="badge badge-secondary"> 20</span><br>
	 DATE: <span class="badge badge-dark" id="datetime">01/02/2022</span> •  TIME: <span class="badge badge-dark" id="timenow">12:00:00 AM</span> •  IP: <span class="badge badge-dark">'.$ip.'</span> •  <span class="badge badge-dark">FRAUD SCORE OF IP: '.$finalscore.' ('.$risk.')</span>
	 </div>
	 	  </div>';
?>
  <div class="content-body">
  	<div class="mt-2"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body text-center">
					<textarea rows="6" class="form-control text-center form-checker mb-2" placeholder="PUT YOUR CARD LIST HERE :>"></textarea>
					
					<div class="input-group mb-1">
<?php

// get the cs key value
$pk_live_key = isset($_POST['pk_live_key']) ? $_POST['pk_live_key'] : '';
$url = isset($_POST['url']) ? $_POST['url'] : '';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_close($ch);
$parts = explode('/', $url);
if (count($parts) > 0) {
    $text = $parts[count($parts) - 1];
    $cs_live_value = preg_replace('/#.*$/', '', $text);
} else {
    echo "no detected cs key";
}

// get the pk key value
// ginagawa pa

// patch the values of cs & pk

					echo '<input type="text" style="background-color:#112132;" class="form-control" id="cslive" placeholder="" disabled name="cslive" value="'.$cs_live_value.'">&nbsp;       
										<input type="text" style="background-color:#112132;" class="form-control" id="pklive" placeholder="pk_live_xxxxx" name="pklive" autocomplete="off" value="'.$pk_live_key.'">';
?>
                    </div>
                    
                    <div class="input-group mb-1">

<?php

// get the amount
$gon = 'jungkookie.txt';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cs_live_value.'?key='.$pk_live_key.'&eid=NA');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array();
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $headers, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0));
$result2 = curl_exec($ch);
curl_close($ch);

$json_response = json_decode($result2);
$totalamt = isset($json_response->payment_intent->amount) ? $json_response->payment_intent->amount : '';
$email = isset($json_response->customer->email) ? $json_response->customer->email : '';

				echo '<input type="number" style="background-color:#112132;" class="form-control" id="xamount" placeholder="e.g $8.75, type 875" name="xamount" autocomplete="off" value="'.$totalamt.'">&nbsp;
					<input type="text" style="background-color:#112132;" class="form-control" id="xemail" placeholder="placeyouremailhere@email.com" name="xemail" value="'.$email.'">';
?>
										</div>
					<div class="input-group mb-1">
									 <input type="text" style="background-color:#112132; width: 25px;" class="form-control" id="ip" placeholder="ProxyIP:Port" name="ip" autocomplete="off">
					<input type="text" style="background-color:#112132;width: 25px;" class="form-control" id="hydra" placeholder="Username:Password" name="hydra" autocomplete="off">
					</div>


					<button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i> START</button>
					<button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i> STOP</button>
					
				</div>
			</div>
		</div>

            		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHECKED OUT <span class="badge badge-success charge">0</span></h4>					
			<div id='cards_charge'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> INSUFFICIENT FUNDS <span class="badge badge-success aprovadas">0</span></h4>					
			<div id='cards_aprovadas'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
					<button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> FAILED TRANSACTIONS <span class="badge badge-danger reprovadas">0</span></h4>		
						<div style='display: none;' id='cards_reprovadas'></div>
				</div>				
			</div>
		</div>
		
</section>
        </div>
      </div>
    </div>
 
    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<script>

$(document).ready(function(){


Swal.fire({ title: "Welcome teaaa!", text: "At dahil very good ka may 5 stars ka sakin ddzzaaiii!", icon: "warning", confirmButtonText: "Pake ko!?...", buttonsStyling: false, confirmButtonClass: 'btn btn-primary'});


$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#cards_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#cards_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#cards_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
	Swal.fire({title: 'REMOVE CC DEAD SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#cards_reprovadas').text('');
$('.reprovadas').text('0');
});

$('.btn-copy1').click(function(){
	Swal.fire({title: 'COPY CC CHARGED SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_charge = document.getElementById('cards_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-copy').click(function(){
	Swal.fire({title: 'COPY CC LIVE SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_lives = document.getElementById('cards_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){

var cards = $('.form-checker').val().trim();
var array = cards.split('\n');
var pklive = $("#pklive").val().trim();
var cslive = $("#cslive").val().trim();
var xamount = $("#xamount").val().trim();
var xemail = $("#xemail").val().trim();
var ip = $("#ip").val().trim();
var hydra = $("#hydra").val().trim();
var charge = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!cards){
	Swal.fire({title: 'Oops! You forgot the cards LOL!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

if(!pklive){
	Swal.fire({title: 'Wheres your pk_live?? please add a pk_live!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

if(!cslive){
	Swal.fire({title: 'Wheres your cs_live?? please add a cs_live!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

if(!xamount){
	Swal.fire({title: 'Wheres the amount? please add a amount!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

if(!xemail){
	Swal.fire({title: 'Wheres the email?? please add an email!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

Swal.fire({title: 'Starting to checkout...', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

var line = array.filter(function(value){
if(value.trim() !== ""){
	txt += value.trim() + '\n';
	return value.trim();
}
});

/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

var total = line.length;


/*
line.forEach(function(value){
txt += value + '\n';
});
*/

$('.form-checker').val(txt.trim());
// Limit of CCs will inputted
if(total > 20){
  Swal.fire({title: ':) Aaclaa!! Kumalma ka auto-co lang ito hindi checker kaloka ckaa goorll!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 5000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.forEach(function(data){
var callBack = $.ajax({
	url: 'checkout.php?cards=' + data + '&cslive=' + cslive + '&pklive=' + pklive + '&xamount=' + xamount + '&xemail=' + xemail + '&ip=' + ip + '&hydra=' + hydra + '&referrer=Auth',
	success: function(retorno){
		if(retorno.indexOf("#CHARGED") >= 0){
			Swal.fire({title: '+1 CHARGED CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('#cards_charge').append(retorno);
			removelinha();
			charge = charge +1;
			}
			else if(retorno.indexOf("#LIVE") >= 0){
			Swal.fire({title: '+1 LIVE CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('#cards_aprovadas').append(retorno);
			removelinha();
			lives = lives +1;
		    }else{
			$('#cards_reprovadas').append(retorno);
			removelinha();
			dies = dies +1;
		}
		testadas = charge + lives + dies;
	    $('.charge').text(charge);
		$('.aprovadas').text(lives);
		$('.reprovadas').text(dies);
		$('.testadas').text(testadas);
		
		if(testadas == total){
			Swal.fire({title: 'All CC(s) have been checked successfully!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
		}
        }
      });
      $('.btn-stop').click(function(){
      Swal.fire({title: 'Pause - Success!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);      
      	callBack.abort();
      	return false;
      });
    });
  });
});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}

var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    var d = new Date();
    document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
}

  
	
</script>
<?php
} else if (isset($_POST['pass']) && $_POST['pass'] !== 'amacanaaclaa'
    && (!isset($_POST['url']) || empty($_POST['url']))) {
    echo '<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">
     <link rel="manifest" href="./assets/images/site.webmanifest">
     <link rel="mask-icon" href="./assets/images/safari-pinned-tab.svg" color="#5bbad5">
     <meta name="msapplication-TileColor" content="#da532c">
     <meta name="theme-color" content="#ffffff">
     <meta http-equiv="cache-control" content="no-cache" />
     <script>
        window.addEventListener("load", function() {
         setTimeout(function() {
         alert("Hmmm.... Sa tingin mo kaano-ano mo kaya sya?\n\nKasi feel ko yun ang tamang password eh", "Retry");
             }, 15000);
                });
    </script>
     <title>SHUTA KA!? ANO GINAGAWA MO?? BOBO YARNN....?</title>
     <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        form {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            text-align: center;
        }

        input[type="password"] {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            font-size: 16px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
    </head>';
?>
    <div style="text-align:center;">
    <form action="index.php" method="POST">
    <h2>Sabi ng mama mo tita nalang daw ang tawag ko sayo...<br>
    o sa kanya... tapos... ngayon mama ko na zshhhaa~<br>
    ang tita mo noon, ngayon..<br>
    kaya, pwede na tayong maggzama<br>
    kasi *huminga saglit* accept---<br>
    aksiip na tayo nilaaaa<br>
    ng mama mo, sa tita ko noon.<br></h2>
        <input type="password" name="pass" placeholder="huh!?.."><br>
        <input type="submit" value="Enter">
    </form>
    </div>
    <audio id="myAudio" hidden autoplay loop>
    <source src="mamamo.mp3" type="audio/mpeg">
        If you see this, EDI WOW!! may powers ka na happy ka na aacclaa!!??...
    </audio>
  </body>
</html>
<?php
}
?>