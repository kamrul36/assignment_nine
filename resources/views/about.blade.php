<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

    @extends('app')

    @section('content')
    <h1>About Me</h1>
        <p>Name: {{ $name }}</p>
        <p>Bio: {{ $bio }}</p>
    @endsection


</body>

</html> 