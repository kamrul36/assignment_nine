<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
</head>

<body>

    @extends('app')

    @section('title', 'Projects')

    @section('content')
    <h1>Projects</h1>
    @foreach($projects as $project)
    <div>
        <h3>{{ $project['title'] }}</h3>
        <p>{{ $project['description'] }}</p>
    </div>
    @endforeach
    @endsection

</body>

</html>