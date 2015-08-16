<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
          .flex-justified {
            display: flex;
            align-items: center;
            justify-content: space-between;
          }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
          <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Tweeter</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
              <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>

                @if (Auth::guest())
                <li><a href="/sign-up">Sign Up</a></li>
                <li><a href="/sign-in">Sign In</a></li>
                @else
                <li><p class="navbar-text">Welcome {{ Auth::user()->username }}!</p></li>
                <li><a href="/logout">Logout</a></li>
                @endif

              </ul>
            </div><!-- /.navbar-collapse -->
          </div>
        </nav>

        @yield('content')

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
