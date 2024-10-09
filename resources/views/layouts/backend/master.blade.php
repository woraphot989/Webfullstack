<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title> 
  @include('layouts.backend.css')
  @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper"></div>  
  @include('layouts.backend.nav')
  @include('layouts.backend.menu')

  @yield('content')
  
  @include('layouts.backend.footer')
</div>
@include('layouts.backend.js')
@livewireScripts
</body>
</html>