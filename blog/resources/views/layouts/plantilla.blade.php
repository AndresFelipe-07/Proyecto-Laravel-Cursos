<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <!---<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">-->
    <!--favicon-->
    <!--estilos-->
    <!--<link rel="stylesheet" href="{{'css/style.css'}}">-->
</head>
<body>
    <!--header-->
    <!--nav-->
    
    {{--Inicio style--}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap');
        
        body {
            font-family: 'Bungee Spice', cursive; 
            background:black;
        }

        button{
            font-family: 'Bungee Spice', cursive;
        }



    </style>

    {{--Fin style--}}

   @yield('content')


    <!--footer-->
    
    <!--script-->
</body>
</html>