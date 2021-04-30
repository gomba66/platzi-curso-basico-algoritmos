#include <stdio.h>

int regresiveCounter(){
  for(int i = 300;i>0;i--){
    printf("%d Seconds...\n",i);
  }
  return 0;
}

int main(){
  if(regresiveCounter() == 0){
    printf("The counter has endeed.\n");
  }
  return 0;
}
