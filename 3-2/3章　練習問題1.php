<?php

    function taxincluded($stationary,$price) {
        $tax=1.1;
        print $stationary."の税込価格は".$tax*$price."円です"; 
        print '<br>';    
    }

    $products = ["鉛筆" =>100 , "消しゴム" =>150 , "物差し" =>500 ];

    taxincluded('鉛筆',$products['鉛筆']);
    taxincluded('消しゴム',$products['消しゴム']);
    taxincluded('物差し',$products['物差し']);

?>