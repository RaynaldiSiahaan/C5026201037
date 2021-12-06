<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">


		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

</head>
<style>
    body{background-color:aqua;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
</style>
<body>
    <header class="row">
        @include('layout/header')
        </header>

<div >

    <div id="sidebar" class="col-md-2" style="background-color:pink; height:1000px">
        @include('layout/sidebar')
    </div>

    <div id="content" class="col-md-10">
    @section('isikonten')
    </div>


</div>
<footer class="row">
    @include('layout/footer')
    </footer>
    @show
</body>
</html>
