<?php


function Log10n($n) {
  return log10($n);
}

function minus-feature(a,b){
  return a-b;
}

function addition($a,$b){
	    $result = $a+$b;
    return $result;
}


function fucCosine($x){
   $res = cos($x);
   return $res;

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

