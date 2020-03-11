<?php
function pow($base,$exp) {
    $result=1;
    if($exp==0){
       return $temp;
    }
    else{
       for($i=1;$i<=$exp;$i++)
	    {
		  $result = $result * $base;
		}
    }
	return $result;
}
?>
