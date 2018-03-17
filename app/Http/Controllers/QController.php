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
        $dirName = request()->ip();
        $dr = "/var/www/html/FTC_Challenge";
        if(! File::exists("$dr/app/files/$dirName/quiz.java")){
            mkdir("$dr/app/files/$dirName", $mode = 0777, true);
        }
        $userCode =  strstr($request['code'],'public static void main');

        if(! $this->checkString($userCode)){
            return view('welcome',['empty' => 'You are trying to do something sneaky :)','code' => $userCode]);
        }
     
        File::put("$dr/app/files/$dirName/quiz.java","
        public class quiz  {
            public static char[] real = {'m', 'h', '7' ,'s', 'n','m','h','a','y','6','y'};
            
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
                if(real.length != pass.length)
                    return false;
                return true;
            }
                
            ");
                File::append("$dr/app/files/$dirName/quiz.java",$userCode);
                File::append("$dr/app/files/$dirName/quiz.java",'}');

            
    
      
        
        $compile = shell_exec("cd $dr/app/files/$dirName; javac quiz.java  2>&1");

        if(strlen($compile) != 0 )
            return view('welcome',['error' => $compile,'code' => $userCode]);

        $output = shell_exec("cd $dr/app/files/$dirName; java quiz 2>&1");
       if(strlen($output) != 0)
            return view('welcome',['output' => $output,'code' => $userCode]);

            return view('welcome',['empty' => 'No Output','code' => $userCode ]);
    }
}