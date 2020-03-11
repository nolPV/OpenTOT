<?php
	function minus-feature(a,b){
        	return a-b;
   	}
	function Division($a, $b){
            
            if($a ==  0 or $b ==  0){
                return "No!!! Don't Input Number 0";
            }
            else{
                return ($b/ $a);
            }
	}
	echo Division(4,2);

function pow($base,$exp) {
    $result=1;
    if($exp==0){
       return $result;
    }
    else{
       for($i=1;$i<=$exp;$i++)
	    {
		  $result = $result * $base;
		}
    }
	return $result;
}

function SRoot(num){
    document.getElementById("SRoot").innerHTML = Math.sqrt(num); 
}

	function percent($a,$b){
		return ($a/100)*$b
	}

?>

