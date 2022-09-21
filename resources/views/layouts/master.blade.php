<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
       @yield('style')
       <style>

        body {
            font-family:  "Open Sans",sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.45;
            font-style: normal;
        }
    .main {
        height: 1800px;
        display: flex;
        flex-direction: column;
    }

    .navigation {
        display: flex;
        width: 100%;
        height: 80px;
        justify-content: flex-end;
        position: sticky;
        top: 0;
        background-color: #fff;
        z-index: 5;
        border-bottom: 1px solid gray;

    }


    .navigation-list {
        display: flex;
        justify-content: flex-end;
        list-style: none;
        margin-bottom: 0px;
    }

    .navigation-items {
        width: 170px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
       </style>
    </head>
    <body>
        <div class="main">
                <div class="navigation">
                    <ul class="navigation-list">
                        <li class="navigation-items">Find</li>
                        <li class="navigation-items">Book</li>
                        <li class="navigation-items">Search</li>
                    </ul>
                </div>
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
