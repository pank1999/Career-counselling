<?php

$P1=$_SESSION['P_1_12'];
$P2=$_SESSION['P_2_12'];
$P3=$_SESSION['P_3_12'];
$P4=$_SESSION['P_4_12'];
$I1=$_SESSION['I_1_12'];
$I2=$_SESSION['I_2_12'];
$I3=$_SESSION['I_3_12'];
$I4=$_SESSION['I_4_12'];

$skill=$_SESSION['skill_12'];

$m=$_SESSION['sub1'];
$s=$_SESSION['sub2'];
$e=$_SESSION['sub3'];
$ss=$_SESSION['language'];
$h=$_SESSION['additional'];
//$stream=$_SESSION['stream'];
//if($stream=='science'){
 
 if((($I1>$I2) and ($I1>$I3) and ($I1>$I4))){

    if($skill >= 7){
        if((($P2>$P1) and($P2>$P3) and  ($P2>$P4))){

                if(($m+$s)/2 >70){
                echo "Engineering";
                }
            
                else{ echo "Engineering OR B.Sc ";
                }
        }
        else{

            if(($m+$s)/2 >60){
                echo "Engineering";
            }
            else{
                echo "M.B.B.S OR Pharmacy ";
            }

        }
    }
    else{ 
        if((($P2>$P1) and($P2>$P3) and  ($P2>$P4))){
            if(($m+$s)/2 >60){
                echo " Diploma OR B.sc";
            }
            else{
                echo "BAMS OR B.H.M.S";
            }
            
        
        }
        
  
    }
}
//}
//if($stream=='commerce'){
else if((($I2>$I3)&&($I2>$I1)&& ($I2>$I4))){
    if($skill >= 6){
        if((($P3>$P1) && ($P3>$P2) && ($P3>$P4))){

            if(($ss+$m)/2 >50){
               echo "B.com ";
            }
            else{ 
                echo "B.com OR BBA";
            }
        }
        else{
             echo "BMS-(Bachelor of Management Studies)";
        }

    }
    else{
        if((($P3>$P1) && ($P3>$P2) && ($P3>$P4))){

            if(($ss+$m)/2 >50){
               echo "CFA - (Chartered Financial Analyst)";
            }
            else{ 
                echo " B.com ";
            }
        }
    }
}
//}
//if($stream=='arts'){
  else if((($I3>$I1)&&($I3>$I2)&& ($I3>$I4))){
    if($skill >=5 ){
       
           if((($P1>$P3) && ($P1>$P2) && ($P1>$P4))){
              if(($ss+$m+$s)/3 >50){
               echo "BA";
            }
            else{
                echo "Law";
            }
        
        }
        else{
            if(($ss+$m+$s)/3 >50){
                echo "Teaching";
             }
             else{
                 echo " Journalism OR Media ";
             }
        }

    }
    else{ echo "IAS/IPS OR Defence";}
  }
//}
else {

    if($skill >=6 ){
       
        if((($P4>$P3) && ($P4>$P2) && ($P4>$P1))){
           if(($ss+$m+$s)/3 >60){
            echo "B.sc Agriculture";
         }
         else{
             echo "Agronomist OR research analyst ";
         }
     
     }
     else{
         if(($ss+$m+$s)/3 >50){
             echo "Biologist";
          }
          else{
              echo "Farm Manager";
          }
     }

 }
 else{
     echo "B.sc agriculture  ";
 }
 
}


?>