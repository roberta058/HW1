<?php 
    
        $client_id="2cdbf52de6bb41cdaa8955a0ffc6668d";
        $client_secret="52bc521a925b4a59ad94a94a4965404c"; 

        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
        $token=json_decode(curl_exec($ch), true);
        curl_close($ch);    
        
        $query = urlencode($_GET["q"]);
        $url = 'https://api.spotify.com/v1/search?type=tracce&q=' .$query;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
        $res = json_decode(curl_exec($ch),true);
        
        curl_close($ch);

        echo $res;
    
?>