<?php 


$P1=$_SESSION['P_1_g'];
$P2=$_SESSION['P_2_g'];
$P3=$_SESSION['P_3_g'];
$P4=$_SESSION['P_4_g'];
$I1=$_SESSION['I_1_g'];
$I2=$_SESSION['I_2_g'];
$I3=$_SESSION['I_3_g'];

$skill=$_SESSION['skill_g'];


if(($I1>$I2) AND ($I1>$I3)){
    if(($P2>$P1) and ($P2>$P3) and ($P2>$P4)){
    echo " you should go for job";
    }
    else{
        echo "you should do masters ";
    }
}
else if(($I2>$I1) AND ($I2>$I3)){
    if(($P4>$P1) and ($P4>$P3) and ($P4>$P2)){
      echo " you should do master";
    }
    else{
        echo "you should go for job ";
    }
}
else{
    if(($P3>$P1) and ($P3>$P2) and ($P3>$P4)){
    echo " you should start your own Bussiness and be job creater";
    }
    else{
        echo "you should go for Bussiness";
    }
 }

?>