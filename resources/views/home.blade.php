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
                background-color: black;
                color: white;
            }

            header {
                height: 75px;
                display: flex;
                justify-content: space-around;
                align-items: center;
            }

            nav {
                width: 40%;
            }

            .hr_list {
                width: 100%;
                list-style: none;
                text-align: center;
            }

            li {
                display: inline;
                
            }

           
        </style>
    </head>
    <body>
        
        <header>

            <h1>Hello Word</h1>

            <nav>
                <ul class="hr_list">
                    @foreach ($items as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </nav>

        </header>


        

    </body>
</html>