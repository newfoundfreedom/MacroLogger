<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{config('app.name', 'MyFitnessBuddy')}}</title>

    <!--Bootstrap CSS-->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- FontAwesome -->
    {{--<script src="https://use.fontawesome.com/8eb4ed0827.js"></script>--}}
    <!--Local StyleSheet-->
    {{--<link rel="stylesheet" href="assets/css/style.css">--}}

</head>
<body>

    @include('inc.navbar')

    <div class="container">
        @yield('content')
    </div>

<!--jQuery-->
{{--<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>--}}
<script src="{{asset('js/app.js')}}"></script>
<!-- Bootstrap JavaScript -->
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
<!--Local JS-->
{{--<script src="assets/javascript/script.js"></script>--}}

</body>
</html>
