<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
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

        form {
            display: flex;
            flex-direction: column;
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        label {
            font-size: 1rem;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        .back-btn {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            text-align: center;
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
    <h1>Add a New Book</h1>
    <form action="/add-book" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter book title" required>
        
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" placeholder="Enter author name" required>
        
        <button type="submit">Add Book</button>
    </form>
    <a href="/books" class="back-btn">Back to Books</a>
</body>
</html>
