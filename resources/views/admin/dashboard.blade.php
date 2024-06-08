<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IfVent</title>
    <link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen dashbg ">
        @if(auth()->user()->usertype === 'admin')
            @include('layouts.navigation')
        @else
            @include('layouts.guestNavigation')
        @endif


    </div>
</body>
</html>
