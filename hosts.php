<?php
    $siteList=Array();
    $hosts = json_decode(file_get_contents('https://gitlab.com/cto.endel/atack_api/-/raw/master/sites.json'), true);//список переліком сайтів для атаки     
          foreach($hosts as $link){              
              if($link['atack']==1){                
                    array_push($siteList,$link['page']);             
              }
          }         
    print_r(json_encode($siteList));   
?>