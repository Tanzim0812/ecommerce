{{--@extends('layouts.app')

@section('content')--}}
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('files/website/css/style.css')}}">
    <title>Sign in</title>
    <style>

    </style>
</head>

<body>
<div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="post" action="{{ route('login') }}">
        @csrf
        <input class="un " type="email" align="center" name="email" placeholder="email" required>
        <input class="pass" type="password" align="center" name="password" placeholder="Password" required>

        <button class="submit" value="submit" name="submit">Login</button>
        <p class="forgot" align="center"><a href="#">Forgot Password?</p>
        <p class="forgot" align="center" ><a href="{{route('register')}}">Didn't join us yet?</a></p>
    </form>


</div>

</body>

</html>
