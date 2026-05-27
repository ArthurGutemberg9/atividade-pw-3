
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Plus</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#eef5ff;
            font-family:Arial;
        }

        .navbar{
            background:#003b7a;
        }

        .navbar-brand,
        .nav-link{
            color:white !important;
            font-weight:bold;
        }

        .hero{
            background:linear-gradient(135deg,#0057b8,#00a2ff);
            color:white;
            padding:120px 20px;
            text-align:center;
        }

        .card{
            border:none;
            border-radius:20px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        footer{
            background:#00244d;
            color:white;
            padding:30px;
            margin-top:50px;
            text-align:center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">ETEC Plus</a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="/">Home</a>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <h5>ETEC Plus</h5>
    <p>Projeto Laravel moderno</p>
</footer>

</body>
</html>
