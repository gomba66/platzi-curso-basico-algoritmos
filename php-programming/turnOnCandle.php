<?php
function turnOnCandle(){
$candleIsOn = false;
	 if($candleIsOn === false){
	 	$candleIsOn = true;
	 }else{
		$candleIsOn = false;
	}
	return $candleIsOn;
}
if(turnOnCandle()){
echo "The candle is On!.\n";
}