<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pet->name }}</title>
</head>
<body>
    <h1>{{ $pet->name }}</h1>
    <p>Kind: {{ $pet->kind }}</p>
    <p>Age: {{ $pet->age }}</p>
    <p>Breed: {{ $pet->breed }}</p>
    <p>Location: {{ $pet->location }}</p>
    <p>Description: {{ $pet->description }}</p>
    <img src="{{ asset('images/'.$pet->image) }}" alt="{{ $pet->name }}">
    <a href="{{ route('home') }}">Back to Pets</a>
</body>
</html>