<?php
    $siteList=Array();
    $hosts = json_decode(file_get_contents('https://gitlab.com/cto.endel/atack_hosts/-/raw/master/hosts.json'), true);//список переліком сайтів для атаки     
    for ($i=0; $i <count($hosts) ; $i++) {        
       $data = @file_get_contents($hosts[array_rand($hosts)]);
        if($data){
            $sites=json_decode($data,true);  
            array_push($siteList,$sites['site']['url']);
        }     
    }
    echo json_encode($siteList);
?>