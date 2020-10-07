<?php
        send_the_order ($_POST);
        
        
    function send_the_order ($post){

           $API_URL = "https://partner.trsmarkets.com/clients";
            $API_LOGIN = "kirill.orlov@mercuryo.co.com";
            $API_PASS = "A1#0.u8jhqdkxolr";

            $isCurlEnabled = function(){
                return function_exists('curl_version');
            };

            if (!$isCurlEnabled) {
                echo "<pre>";
                echo "pls install curl\n";
                echo "For *unix open terminal and type this:\n";
                echo 'sudo apt-get install curl && apt-get install php-curl';
                die;
            }

            $args = array(
                'firstName' => $post['firstname'],
                'lastName' => $post['lastname'],
                'phone' => "+48".$post['phone_number'],
                'email' => $post['email'],
                'password' => 'Kv8lXrhT',
                'country' => "PL",
                'language' =>  "PL",
                'currency' =>  "USD",
                'source' => "maxetmlicier.online", 
                'referral' => $post['sub1']
                );
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $API_URL);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($args));

            $headers = array();
            $headers[] = 'Content-Type: application/json';
            $headers[] = 'Login: '.$API_LOGIN;
            $headers[] = 'Password: '.$API_PASS;
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


            $res = curl_exec($curl);
            $res = json_decode($res, true);
             if ($res['redirectUrl']) {
                // header("Location: ".$res['redirectUrl']);
                 header("Location: success.php"."?"."t1=".$post['t1']);
              }
            
            print($res['message']);
            curl_close($curl);
           


}

    ?>
