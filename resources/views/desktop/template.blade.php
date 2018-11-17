<html>
<head>
  <title>Tự Học Toán</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/desktop/template.style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.style.css') }}">
   @yield('css')
   @yield('font')
  <link href="https://fonts.googleapis.com/css?family=Chakra+Petch" rel="stylesheet">
  <script type="text/javascript" src="js/jquery/jquery-3.3.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
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
      <div>
        
      </div>
    </div>
  </div>
  @yield('js-bottom')
</body>
</html>
