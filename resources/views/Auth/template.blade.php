<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous">
      <style>
        .login{
          background: url('./dist/images/login-new.jpg') no-repeat center center;
                  background-size: cover;
                  height: 100vh; /* Ensures the login div takes the full height of the viewport */
                  display: flex;
                  justify-content: center;
                  align-items: center;
        }
        </style>  
</head>
<body class="h-screen font-sans login bg-cover">
    @yield('content')
</body>
</html>