<?php 
function getNumMatches ($arr,$word){
    $i=0;
    foreach($arr as $a){
        if($a==$word){
            $i++;
        }
    }
    return $i;
}

function getPriceWithDiscount ($price){
    if($price<1000 && $price>0){
        $priceafter=$price*0.9;
    }elseif($price>=1000){
        $priceafter=$price*0.95;
    }else{
        $priceafter="Invalid Price";
    }
    return $priceafter;
}

// $arr=["a","b","a","c","d"];
// $a="b";
// echo "$a is found ". getNumMatches($arr,$a) ." times";

// $price=-50;
// echo "New price is ". getPriceWithDiscount($price);


?>