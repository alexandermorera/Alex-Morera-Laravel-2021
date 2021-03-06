<!doctype html>
<html lang="en">
<head>
 @include("includes.head")
</head>
<body>
    <header> 
        @include("includes.header")
    </header>
  <main>
    @yield('content') 
    </main>
    <footer class="text-muted py-5"> 
        @include("includes.footer")
    </footer>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
  </body>

</html>
