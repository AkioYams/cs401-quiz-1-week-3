<!DOCTYPE html>
<html>
<head>
    <title>Game Details</title>
</head>
<body>
    <h1>{{ $game['title'] }}</h1>
    <ul>
        <li><strong>ID:</strong> {{ $game['id'] }}</li>
        <li><strong>Developer:</strong> {{ $game['developer'] }}</li>
        <li><strong>Publisher:</strong> {{ $game['publisher'] }}</li>
        <li><strong>Genre:</strong> {{ $game['genre'] }}</li>
        <li><strong>Release Date:</strong> {{ $game['releaseDate'] }}</li>
        <li><strong>Platform:</strong> {{ $game['platform'] }}</li>
        <li><strong>Price:</strong> ${{ $game['price'] }}</li>
    </ul>
    <a href="/games">← Back to list</a>
</body>
</html>
