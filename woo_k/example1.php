<html>
<body>
<?php

// echo "hello world";

$arr = array("ali","itms2","item3");

// $ar2 = array(
//     "kabab" => "10000",
//     "pizaa" => "120000",
//     "pizaa peperoni" => "1500000"
// );

for ($i=0; $i <= 2 ; $i++) { 
    echo " ".$arr[$i];
}

foreach ($arr as $r => $d) {
    echo $r." ".$d." ";
    
}




// var_dump ($arr , $ar2);





?>
</body>
</html>