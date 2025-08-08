<!DOCTYPE html>
<html>
<head>
    <title>Games List</title>
</head>
<body>
    <h1>Games</h1>
    <ul>
        @foreach ($games as $game)
            <li>{{ $game['id'] }} - {{ $game['title'] }}</li>
        @endforeach
    </ul>
</body>
</html>
