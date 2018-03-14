<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem;
use File;
class QController extends Controller
{
    
    
    
    
    
    public function execute(Request $request){
        File::put('../app/quiz.java',"
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
            
            public static void main(String args[]){
                
                
                //user space
                ");
                
                
                File::append('../app/quiz.java',$request['userCode']);
                File::append('../app/quiz.java',"
                //checkPassword(x);
            }
            
        }
        ");
        
        $complie = shell_exec("cd ../app; javac quiz.java  2>&1");
        $output = shell_exec("cd ../app; java quiz 2>&1");
       if($output == '')
        return $complie;

        return $output;
    }
}