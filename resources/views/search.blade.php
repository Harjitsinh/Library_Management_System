<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results for "{{ $query }}"</h1>
    @if(count($results) > 0)
        <ul>
            @foreach($results as $result)
                <li>
                    <strong>{{ $result['title'] }}</strong> by {{ $result['author'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No books found.</p>
    @endif
    <a href="/books">Back to Books</a>
</body>
</html>
