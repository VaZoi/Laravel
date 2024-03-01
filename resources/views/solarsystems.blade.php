<!DOCTYPE html>
<html>
<head>
    <title>List of Solar Systems</title>
</head>
<body>
    <h1>List of Solar Systems</h1>
    <ul>
        @foreach ($solarSystems as $solarSystem)
            <li>
                <strong>Name:</strong> {{ $solarSystem->name }}<br>
                <strong>Number of Planets:</strong> {{ $solarSystem->planets_count }}<br><br>
            </li>
        @endforeach
    </ul>
</body>
</html>