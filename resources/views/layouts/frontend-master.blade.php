<!DOCTYPE html>
<html>
<head>
  <title>IBI - MapChart</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/vendor.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/flat-admin.css')}}">

  <!-- Theme -->
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/blue-sky.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/blue.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/red.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/theme/yellow.css') }}">

</head>
<body>
  <div class="app app-default">

    @include('includes.side-front')
    <div class="app-container">
      @include('includes.nav-frontend')
      @yield('content')
      
      <script type="text/javascript">
        var baseUrl = "{{ URL::to('/') }}";
      </script>
  
      
    </div>

  </div>
  
  <script type="text/javascript" src="{{ URL::to('src/backend/assets/js/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('src/backend/assets/js/app.js') }}"></script>

</body>
</html>