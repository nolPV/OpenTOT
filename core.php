<?php
	function Division($a,$b){
            
            if($a==0 or $b ==0){
                return "No!!! Don't Input Number 0";
            }
            else{
                return ($b/$a);
            }
	}
	echo Division(4,2);
?>

