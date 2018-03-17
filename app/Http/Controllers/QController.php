<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem;
use File;
class QController extends Controller
{
    
    
    
    public function checkString($userCode){
        if(strpos($userCode, 'Runtime') || strpos($userCode, 'Process') || strpos($userCode, 'exec')
        || strpos($userCode, 'Scanner') || strpos($userCode, 'Buffer') ||  strpos($userCode, 'real')
        ){
            return false;
        }
        return true;
    }
    
    public function execute(Request $request){
        $userCode =  strstr($request['code'],'public static void main');

        if(! $this->checkString($userCode)){
            return view('welcome',['empty' => 'You are trying to do something sneaky :)']);
        }
     
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
                
            ");
                File::append('../app/quiz.java',$userCode);
                File::append('../app/quiz.java','}');

            
    
      
        
        $compile = shell_exec("cd ../app; javac quiz.java  2>&1");

        if(strlen($compile) != 0 )
            return view('welcome',['error' => $compile]);

        $output = shell_exec("cd ../app; java quiz 2>&1");
       if(strlen($output) != 0)
            return view('welcome',['output' => $output]);

            return view('welcome',['empty' => 'No Output']);
    }
}