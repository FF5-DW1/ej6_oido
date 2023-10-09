@extends('layout.main')

@section ('title', 'Listing page')

@section ('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snippet</title>
</head>
<body>
@foreach ($snippets as $snippet)
    <div class="snippetContainer">
        <div class="snippetHeaderLeft">
            <img/>
            <a href="#" class="follow">Follow</a>
        </div>
        <div class="snippetContent">
            <span class="title">{{ $snippet['snippetTitle'] }}</span>
            <span class="snippetText">{{ $snippet['snippetText'] }}</span>
        </div>
    </div>
@endforeach

</body>
</html>

@endsection
