class Main{
    public static boolean turnOnCandle(boolean status){
	if(!status){
	    return true;
	}
	else{
	    return false;
	}
    }
    public static void main(String[] args){
	boolean candleIsOn = false;
	if(turnOnCandle(candleIsOn)){
	    System.out.println("Candle is On!.");
	}else{
	    System.out.println("fail");
	}
    }
}
