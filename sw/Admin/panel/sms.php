<?php
// Account details
$apiKey = urlencode('Ol9Tys+W3uM-Zt3uBe8jCyuuCOce4al2gDPancgC8f');
// Message details
$numbers = urlencode('917017956341');
$sender = urlencode('TXTLCL');
$message = rawurlencode('This is your message');
 
// Prepare data for POST request
$data = 'apikey=' . $apiKey . '&numbers=' . $numbers . '&sender=' . $sender . '&message=' . $message;
// Send the GET request with cURL
$ch = curl_init('https://api.textlocal.in/send/?' . $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
?>
<?php
	// Account details
	$apiKey = urlencode('Ol9Tys+W3uM-Zt3uBe8jCyuuCOce4al2gDPancgC8f');
	
	// Message details
	$numbers = array(917017956341);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('This is your message');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>