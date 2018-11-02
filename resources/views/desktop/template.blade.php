<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tự Học Toán</title>
  <link rel="stylesheet" href="{{ asset('css/desktop/template.style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
  @yield('css')
</head>
<body>
  <div id="container">
    <div id="header">
      <div id="header-title">
        <span>Tự Học Toán</span>
      </div>
    </div>
    <div id="body">
      @yield("body-content")
    </div>
    <div id="footer">

    </div>
  </div>

</body>
</html>
