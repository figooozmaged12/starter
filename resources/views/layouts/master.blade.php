<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Startup</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="container">
        <h1>My Startup</h1>
        <nav>
            <ul>
                <li><a href="index.blade.php">Home</a></li>
                <li><a href="about.blade.php">About</a></li>
                <li><a href="services.blade.php">Services</a></li>
                <li><a href="contact.blade.php">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="container">

        @yield('content')
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; 2024 My Startup. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        overflow: hidden;
    }

    header {
        background: #35424a;
        color: #ffffff;
        padding-top: 30px;
        min-height: 70px;
        border-bottom: #e8491d 3px solid;
    }

    header h1 {
        float: left;
        margin: 0;
        padding: 0;
    }

    header nav {
        float: right;
        margin-top: 10px;
    }

    header nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    header nav ul li {
        display: inline;
        margin-left: 5px;
    }

    header nav ul li a {
        color: #ffffff;
        text-decoration: none;
        font-weight: bold;
        padding: 5px 20px;
    }

    header nav ul li a:hover {
        background: #e8491d;
        color: #ffffff;
    }

    main {
        padding: 20px 0;
    }

    footer {
        background: #35424a;
        color: #ffffff;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
        border-top: #e8491d 3px solid;
    }

</style>

