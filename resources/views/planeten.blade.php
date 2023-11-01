<!DOCTYPE html>
<html>
<head>
    <title>Planeten</title>
</head>
<body>
    <h1>Planetenlijst</h1>
    
    @if (count($planets) > 0)
        <ul>
            @foreach ($planets as $planet)
                <li>
                    <strong>{{ $planet['name'] }}</strong>: {{ $planet['description'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Geen planeten gevonden voor de opgegeven filter.</p>
    @endif
</body>
</html>
