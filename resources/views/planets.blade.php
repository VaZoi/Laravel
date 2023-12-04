<!DOCTYPE html>
<html>
<head>
    <title>List of Planets</title>
</head>
<body>
    <h1>List of Planets</h1>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <strong>Name:</strong> {{ $planet->name }}<br>
                <strong>Description:</strong> {{ $planet->description }}<br>
                <strong>Size (in km):</strong> {{ $planet->size_in_km }}<br>
                <strong>Solar System:</strong> {{ $planet->solarSystem->name }}<br><br>
            </li>
        @endforeach
    </ul>
</body>
</html>
