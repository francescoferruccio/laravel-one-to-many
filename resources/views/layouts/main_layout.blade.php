<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>One to Many - Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('components.header')

    <main>
      @yield('content')
    </main>

    @include('components.footer')
  </body>
</html>
