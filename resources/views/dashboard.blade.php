<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <style>
        body {
            background-color: #da5b5b;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding-top: 100px;
        }

        .heading {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .btn-github {
            background-color: #000;
            color: #fff;
            border: 1px solid #000;
            transition: background-color 0.3s ease;
        }

        .btn-github:hover {
            background-color: #24292e;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1 class="heading">Welcome to Test</h1>
        <h2>First login</h2>

        <a id="github-button" class="btn btn-block btn-social btn-github" href="{{ route('login') }}">
            <i class="fab fa-github"></i> Sign in with GitHub
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
