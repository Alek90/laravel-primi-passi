<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * { 
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }
           
            html, body {
                background-color: green;
            }

            header {
                height: 75px;
                background-color: rgb(17, 15, 03);
                color: rgb(230, 175, 3);
                padding: 0 30px;
                display: flex;
                justify-content: start;
                align-items: center;
            }

            nav {
                width: 40%;
                margin: auto;
            }

            .hr_list {
                width: 100%;
                display: flex;
                justify-content: space-between;
                list-style: none;
            }

            li {
                display: inline;
                
            }

            a {
                text-decoration: none;
                color: rgb(230, 175, 3);
            }

           
        </style>
    </head>
    <body>
        
        <header>

            <h1 class="title">Hello Word</h1>

            <nav>
                <ul class="hr_list">
                    @foreach ($items as $item)
                    <li>
                        @if($item != 'home')
                        <a href="http://127.0.0.1:8000/{{$item}}"> {{ $item }} </a>
                        @else
                        <a href="http://127.0.0.1:8000/"> {{ $item }} </a>
                        @endif         
                    </li>
                    @endforeach
                </ul>
            </nav>

        </header>


        

    </body>
</html>