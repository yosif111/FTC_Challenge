<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{--  <link href="{!! asset('css/prism.css') !!}" rel="stylesheet" />  --}}
        {{--  <script src="{!! asset('js/prism.js') !!}"></script>  --}}

        <link rel="stylesheet/less" type="text/css" href="{!! asset('css/styles.less') !!}" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.0.0/less.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
        {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js" ></script>  --}}
  


        <!-- Styles -->
        {{--  <script src="{!! asset('js/js.js') !!}"></script>
        <script src="{!! asset('js/prism.js') !!}"></script>  --}}

        <style>
                .button {
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    -webkit-transition-duration: 0.4s; /* Safari */
                    transition-duration: 0.4s;
                    cursor: pointer;
                    border-radius: 15px;
                }
                
                .button1 {
                    background-color: white; 
                    color: black; 
                    border: 2px solid #4CAF50;
                }

                .button1:hover {
                    background-color: #4CAF50;
                    color: white;
                }
                
                .error{
                    color: #7b2627;
                }

                .output {
                    color: black
                }
        </style>
    </head>
    <body>
            {{--  <script src="{!! asset('js/prism.js') !!}"></script>
            <script src="{!! asset('js/js.js') !!}"></script>  --}}

        <main class="view">
            <h1 class="title">
FTC Challenge
                <small>اتحداكم تحلونه</small>
            </h1>
        
            <div class="window">
                <div class="window-header">
                    <div class="action-buttons"></div>
                    <select class="language">
                        <option value="javascript" selected>Java</option>
 
                    </select>
                </div>
                <div class="window-body">

                        <form method="POST" action="/">
                   
            
                           
                    <textarea class="code-input" id="code" name="code" type="textarea" style="color:navy;">
public static boolean checkPassword(char[] pass){ ... }

     // try to make the 'checkPassword' method to return true,
     // by guessing the correct password
     //anything outside of the main method will be ignored.

public static void main(String args[])
{

 //write your code here.
    

}

                     </textarea>

                    <pre class="code-output">
                        <code class="language-javascript">
                            
                        </code>
                    </pre>

                </div>
            </div>

            <div >
                    <button type="submit" class="button button1">Submit</button>
            </div>
        </form>
            <br>
            <br>
            @if( ! empty($empty))
            <div>
                   <span style="color:black; font-size:35px; font-weight:300"> {{$empty or ''}} </span>
            </div>
            @endif

            @if(! empty($error))
        <div class="error">
               <span style="color:#7b2627; font-size:35px; font-weight:300">Error: </span> {{ $error or '' }}
        </div>
        @endif
        @if(! empty($output))
        <div class="output">
               <span style="color:#00b894; font-size:35px; font-weight:300">Output: </span> {{ $output or '' }}
        </div>
        @endif

        </main>
    </body>
</html>
