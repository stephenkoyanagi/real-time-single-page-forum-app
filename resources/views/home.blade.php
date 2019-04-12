<!DOCTYPE html>
<html>
<head>
  <title>Single Page Forum</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <div id="app">
    <v-app>
        <app-home></app-home>
    </v-app>
  </div>
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>