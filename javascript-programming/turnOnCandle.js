function turnOnCandle(status){
    if(!status){
	return true;
    }
    else{
	return false;
    }
}

let candleIsOn = false;

if(turnOnCandle(candleIsOn)){
    console.log("The candle is On!.");
}else{
    console.log('The candle is already on!');
}
