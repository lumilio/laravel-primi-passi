<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid d-flex flex-column align-items-center">
            <div class="container d-flex justify-content-center">
                <a class='mx-3' href="{{route('route_about')}}">ABOUT</a>
                <a class='mx-3' href="{{route('route_people')}}">PEOPLE</a>
                <a class='mx-3' href="{{route('route_store')}}">STORE</a>
                <a class='mx-3' href="{{route('route_contacts')}}">CONTACTS</a>
                <a class='mx-3' href="{{route('route_social')}}">SOCIAL</a>  
            </div>
            <h3 class='my-5'>Home page</h3>
        </div>
    </body>
</html>
