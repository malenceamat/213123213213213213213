
<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar1')
    This is the master sidebar.    {{-- @include--}}
@show

<div class="container">
    @yield('content1')
</div>
</body>
</html>
