<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/products">
              Larastock
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/products">Listagem</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">
        @yield('content')
      </div>
      <footer class="footer">
        <p>© Larastock.</p>
      </footer>
    </body>
</html>
