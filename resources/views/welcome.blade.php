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
        <link rel="stylesheet"


        <!-- Styles -->
        {{--  <script src="{!! asset('js/js.js') !!}"></script>
        <script src="{!! asset('js/prism.js') !!}"></script>  --}}

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
                            
                    <textarea class="code-input" style="color:navy">
        public static boolean checkPassword(char[] pass){
                             .
                             .
        }

        public static void main(String args[]){


    //write your code here.
    // try to make the 'checkPassword' method to return true,
    // by guessing the correct password


        }

    </textarea>

                    <pre class="code-output">
                        <code class="language-javascript">
                            
                        </code>
                    </pre>
                </div>
            </div>

        </main>
    </body>
</html>
