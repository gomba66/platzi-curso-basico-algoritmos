function regresiveCounter(){
    for(let i = 300;i>0;i--){
	console.log(`${i} Seconds...`);
    }
    return 0;
}

if(regresiveCounter()===0){
    console.log("Counter has endeed!.");
}
