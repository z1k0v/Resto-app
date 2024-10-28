<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Specific Review</title>
</head>
<body>
    <h1>Review</h1>

    <ul>
        @foreach(collect($reviews)->random(3) as $resto)

        <li>
            <h3>{{ $resto['name'] }}</h3> 

            <p>Reviews:</p>
            <ul>
            @foreach( data_get($resto, 'reviewSnippets.reviewSnippetsList', []) as $review)
                <li>{{ $review['reviewText'] }}</li>
            @endforeach
            </ul>
        </li>
@endforeach
    </ul>
</body>
</html>