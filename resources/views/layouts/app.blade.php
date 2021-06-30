<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootsrap  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        
        

        <style type="text/css">
            body {
                font-family: "Gill Sans", sans-serif;
                background: skyblue; 
            }
            /* Making text slide across the browser window */
            p {
                font-weight: normal;
            animation-duration: 3s;
            animation-name: slidein;
              }

            @keyframes slidein {
             from {
             margin-left: 100%;
             width: 300%;
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}
     
        </style>

    </head>

    <body>

    @yield('content')

    </body>
    
</html>