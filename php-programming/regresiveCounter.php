<?php
function regresiveCounter(){
    for ($i = 300;$i>0;$i--){
        echo $i." Seconds... \n";
    }
    return 0;
}
if(regresiveCounter() == 0){
    echo "The counter has endeed.\n";
}