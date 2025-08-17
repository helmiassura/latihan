<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar HTML, CSS, JS</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul class="ul-navbar">
                <li><a href="#" class="a-navbar">HOME</a></li>
                <li><a href="<?= site_url('about') ?>" class="a-navbar">ABOUT</a></li>
                <li><a href="<?= site_url('contact') ?>" class="a-navbar">CONTACT</a></li>
            </ul>
        </nav>

        <div class="container-content">
            <img src="assets/img/bsi.png" onclick="location.href=('https:\\students.bsi.ac.id')" class="logo"
                alt="logobsi">
            <p class="p-img" onclick="location.href=('https:\\students.bsi.ac.id')">Klik ini!</p>
            <div id="biodata"></div>
        </div>

        <footer>
            <h2>COPYRIGHT</h2>
        </footer>
    </div>
    <script src="assets/js/main.js"></script>
</body>

</html>