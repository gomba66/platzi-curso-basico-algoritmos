#include <stdio.h>
#include <stdbool.h>

bool turnOnCandle(bool status){
  if (status == false){
    return true;
  }
  else{
    return false;
  }
}
int main(){
  bool candleIsOn = false;
  
  if(turnOnCandle(candleIsOn)){
    printf("The candle is on\n");
    return 0;
  }else{
    return 1;
  }
   
}

