<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro - Sabores de Galicia</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" type="text/css" href="/styles/style_header.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_login.css">
    <link rel="icon" href="/img/LogoConcha.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <style>
        .menu a[href="#"]{
            background: rgba(0,0,0,0.3);
            font-weight: bold;
        }
    </style>
</head>
<body>
<header>
    <?php require __DIR__.'/controladores/menu_header.php'; ?>
</header>

<section id="contingutLogin">
    <?php require __DIR__.'/controladores/c_registre.php'; ?>
</section>

</body>
</html>