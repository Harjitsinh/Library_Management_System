<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 10px 0;
            font-size: 1.2rem;
        }

        .search-bar {
            display: flex;
            margin-bottom: 20px;
        }

        .search-bar input {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            font-size: 1rem;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        .add-book-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1rem;
            cursor: pointer;
        }

        .add-book-btn:hover {
            background-color: #218838;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background-color: #ff3f31;
        }
    </style>
</head>
<body>
    <h1>Available Books</h1>
    <form action="/search" method="GET" class="search-bar">
        <input type="text" name="query" placeholder="Search books..." required>
        <button type="submit">Search</button>
    </form>
    <a href="/add-book" class="add-book-btn">Add a New Book</a>
    <ul>
        @foreach($books as $book)
            <li>
                <strong>{{ $book['title'] }}</strong> by {{ $book['author'] }} - {{ $book['status'] }}
            </li>
        @endforeach
    </ul>
    <a href="/" class="back-btn">Back to Home</a>
</body>
</html>
