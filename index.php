<?php
//Trojan Bogacki 3pir
    $tab = array(array());

    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            $tab[$i][$j] = rand(0,9);
            echo $tab[$i][$j]; echo " ";
        }
        echo "<br>";
    }

    $lg_pd = $tab[0][0] + $tab[1][1] + $tab[2][2];
    $ld_pg = $tab[2][0] + $tab[1][1] + $tab[0][2];

    echo "Przekątna  LG_PD: $lg_pd <br>";
    echo "Przekątna LD_PG: $ld_pg <br><br>";

    if($ld_pg>$lg_pd) echo "Przekątna LD_PG jest większa <br>";
    else if($lg_pd>$ld_pg) echo "Przekątna LG_PD jest większa <br>";
    else echo "Obie przekątne są równe"


?>