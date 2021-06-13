<!DOCTYPE html>
<html lang="en">
<head>
  
@include('layout/partials/_head')
  
</head>


<body class="hold-transition sidebar-mini layout-fixed">

@include('layout/partials/_topbar')
@include('layout/partials/_sidebar')


@yield('content')

@include('layout/partials/_footer')
</body>
</html>