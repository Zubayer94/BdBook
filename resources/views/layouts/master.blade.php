<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Boipokardol</title>
	<link rel="stylesheet" href="{{asset('/bootstrap/bootstrap.min.css')}}">

	<!-- fontawesome-->
	<script src="{{asset('/fontawesome/fontawesome.js')}}"></script>
	<!-- customised css-->
	<link rel="stylesheet" href="{{asset('/css/style.css')}}">


</head>


<body>
    @include('partial.navbar')
    

    @section('content')
    @show

    @include('partial.footer')
    <script src="{{asset('/bootstrap/jquery.min.js')}}"></script>
    <script src="{{asset('/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('/bootstrap/bootstrap.min.js')}}"></script>



</body>

</html>
