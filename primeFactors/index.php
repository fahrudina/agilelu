<?php

function is_factor($number, $factor) {
    $half = $number/2;
    
    for($y=1; $y<=$half; $y++) {
        
        if(fmod($number, $factor) == 0) {
           echo $y;
	     //return true;
        }
    }
}
$number = $_GET['number'];
$numbers = $_GET['number'];
$counter=1;
$resp = array();

if (is_numeric($number))
{

while (1){
	$number = $number/2 ;
	if ( $number <= 1 ) break;
	
	$counter++;
}

for($x=1 ; $x<=$counter; $x++ )
	$resp[] = 2;
	$data  = array('number' => $numbers, "decomposition" => $resp );
	header('Content-Type: application/json');
	echo json_encode($data);

}else{
	$data  = array('number' => $numbers, "error" => "not a number" );
	header('Content-Type: application/json');
	echo json_encode($data);
}

?>

