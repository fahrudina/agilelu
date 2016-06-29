<?php

    # optionally return result array 
#        print_r( $_GET['number']);
#die;

$num = $_GET['number'];
$numbers = $_GET['number'];
$counter=1;
$resp = array();

if (is_numeric($num))
{


	if($numbers > 1000000){
		$data  = array('number' => $numbers, "error" => "too big number (>1e6)" );
		header('Content-Type: application/json');
		echo json_encode($data);

	}else{
		$pembagi = 2;
		$count = 0;
		$result = array();

		while(1){
			
			$num = $num / $pembagi;
			
			//echo "num:".$num. "<br>";
			if(is_float($num)) {
				//echo "TRUE";
				$num = $num * $pembagi;
				$num = (int) $num;
				if($pembagi==2) $pembagi = 3;
				else $pembagi += 2;
				
				//echo ":: ".$num." ".$pembagi."<br>";
			}
			else {
				$result[] = $pembagi;
				//print_r($result);
				//echo "FALSE";
			}
			
			if($num<=1)	break;
			
		}


		$data  = array('number' => $numbers, "decomposition" => $result );
		header('Content-Type: application/json');
		echo json_encode($data);
	}
}else{
	$data  = array('number' => $numbers, "error" => "not a number" );
	header('Content-Type: application/json');
	echo json_encode($data);
}

?>

