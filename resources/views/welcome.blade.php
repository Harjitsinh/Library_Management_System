<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('/library-bg.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #ffffff;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 50px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #ff6f61;
            color: #ffffff;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 25px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #ff3f31;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <h1>Welcome to the Library Management System</h1>
        <p>Manage your library efficiently without a database. Browse and organize books seamlessly.</p>
        <a href="/books" class="btn">Get Started</a>
        </div>
</body>
</html>
