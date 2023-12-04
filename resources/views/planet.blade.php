<!DOCTYPE html>
<html>
<head>
    <title>Planet Information</title>
</head>
<body>
    <h1>Planet Information</h1>
    <p><strong>Name:</strong> {{ $planet->name }}</p>
    <p><strong>Description:</strong> {{ $planet->description }}</p>
    <p><strong>Size (in km):</strong> {{ $planet->size_in_km }}</p>
    <p><strong>Solar System:</strong> {{ $planet->solarSystem->name }}</p>
</body>
</html>
