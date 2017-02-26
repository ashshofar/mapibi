<!DOCTYPE html>
<html>
<head>
  <title>Login Map Chart</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/vendor.css') }}">
  <link rel="stylesheet" href="{{ URL::to('src/backend/assets/css/flat-admin.css')}}">

<link rel="stylesheet" href="{{ URL::to('src/login/styles.css') }}">

</head>
<body>
   @yield('content')
      
      <script type="text/javascript">
        var baseUrl = "{{ URL::to('/') }}";
      </script>
</body>
</html>