<?php 

$P1=$_SESSION['P_1_10'];
$P2=$_SESSION['P_2_10'];
$P3=$_SESSION['P_3_10'];
$P4=$_SESSION['P_4_10'];
$I1=$_SESSION['I_1_10'];
$I2=$_SESSION['I_2_10'];
$I3=$_SESSION['I_3_10'];
$I4=$_SESSION['I_4_10'];
$skill=$_SESSION['skill_10'];
$m=$_SESSION['math'];
$s=$_SESSION['science'];
$e=$_SESSION['english'];
$ss=$_SESSION['social science'];
$c=$_SESSION['computer'];
$h=$_SESSION['hindi'];

if((($I1>$I2) and ($I1>$I3) and ($I1>$I4))){

    if($skill >= 7){
        if((($P2>$P1) and($P2>$P3) and  ($P2>$P4))){

                if(($m+$s)/2 >70){
                echo "Mathematics";
                }
            
                else{ echo "Mathematics OR Agriculture ";
                }
        }
        else{

            if(($m+$s)/2 >60){
                echo "Biology";
            }
            else{
                echo "Biology OR Agriculture ";
            }

        }
    }
    else{ 
        if((($P2>$P1) and($P2>$P3) and  ($P2>$P4))){
            if(($m+$s)/2 >60){
                echo "Biology";
            }
            else{
                echo "Biology OR Agriculture";
            }
            
        
        }
        
  
    }
}

else if((($I2>$I3)&&($I2>$I1)&& ($I2>$I4))){
    if($skill >= 6){
        if((($P3>$P1) && ($P3>$P2) && ($P3>$P4))){

            if(($ss+$m)/2 >50){
               echo "Commerce";
            }
            else{ 
                echo "Commerce OR Arts";
            }
        }
        else{
             echo "Arts";
        }

    }
    else{
        if((($P3>$P1) && ($P3>$P2) && ($P3>$P4))){

            if(($ss+$m)/2 >50){
               echo "Commerce";
            }
            else{ 
                echo "Arts ";
            }
        }
    }
}

  else if((($I3>$I1)&&($I3>$I2)&& ($I3>$I4))){
    if($skill >=5 ){
       
           if((($P1>$P3) && ($P1>$P2) && ($P1>$P4))){
              if(($ss+$m+$s)/3 >50){
               echo "Arts";
            }
            else{
                echo "Arts";
            }
        
        }
        else{
            if(($ss+$m+$s)/3 >50){
                echo "Arts";
             }
             else{
                 echo "Arts OR Agriculture";
             }
        }

    }
    else{ echo "Arts";}
  }

else {

    if($skill >=6 ){
       
        if((($P4>$P3) && ($P4>$P2) && ($P4>$P1))){
           if(($ss+$m+$s)/3 >60){
            echo "Agriculture";
         }
         else{
             echo "Agriculture OR Arts";
         }
     
     }
     else{
         if(($ss+$m+$s)/3 >50){
             echo "Arts";
          }
          else{
              echo "Arts OR Agriculture";
          }
     }

 }
 else{
     echo " Commerce OR Arts";
 }
 
}


?>