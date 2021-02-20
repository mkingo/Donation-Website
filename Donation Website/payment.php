<?php
 $name =$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $amount=$_POST['amount'];
 $purpose='donation';
 
 include 'instamojo/Instamojo.php';
 $api = new Instamojo\Instamojo('test_cef78c056ef0d37c870ce61717e','test_6ce8f3bc07add4d3a498c901031', 'https://test.instamojo.com/api/1.1/');
 
 try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
		"buyer_name"=>$name,
		"phone"	=> $phone,
		"send_sms"=> true,
		"allow_repeated_payments"=> false,
        "redirect_url" => "http://localhost/PaymentGatewayIntegration/thankyou.php"
		//"webhook"=>
        ));
    //print_r($response);
	$pay_url=$response['longurl'];
	header("location:$pay_url");
	}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
	}	
?>

