
        public class quiz {
            public static char[] real = {'a', 'b', 'c' ,'d', 'e','f'};
            
            public static boolean checkPassword(char[] pass){
                for(int i = 0; i < pass.length && i < real.length; i++)
                if(pass[i] == real[i]){
                    try{
                        Thread.sleep(200);
                    }catch(Exception e){
                        
                    }
                    
                }else{
                    return false;
                }
                return true;
            }
                
            public static void main(String args[])
{

 //write your code here.
    

}}