<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Link</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f5;
        }
        nav {
            background-color: #4CAF50;
            padding: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        nav h1 {
            margin: 0;
            font-size: 1.5rem;
        }
        nav a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        nav a:hover {
            background-color: #45a049;
            transform: scale(1.1);
        }
        nav a:active {
            background-color: #388e3c;
        }
        .hero {
            text-align: center;
            padding: 3rem 1rem;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            width: 90%;
            max-width: 800px;
            border-radius: 8px;
        }
        .hero h2 {
            font-size: 2.5rem;
            color: #4CAF50;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }
        .hero button {
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        .hero button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="hero">

        <button onclick="location.href='http://127.0.0.1:8000/about'">Pelajari Lebih Lanjut</button>
    </div>
</body>
</html>