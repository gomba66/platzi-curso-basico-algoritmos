class Main{
    public static int StartRegresiveCount(){
        for (int seconds = 300;seconds >0;seconds--){
            System.out.println(seconds+" Seconds..");
        }
        return 0;
    }
    public static void main(String[] args){

        int status = StartRegresiveCount();
        if(status == 0){
            System.out.println("The counter has endeed.");
        }
    }

}