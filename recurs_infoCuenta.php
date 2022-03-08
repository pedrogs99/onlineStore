<!DOCTYPE html>
<html>
<head>
    <title>Mi Cuenta - Sabores de Galicias</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" type="text/css" href="/styles/style_header.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_infoCuenta.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_footer.css">
    <link rel="icon" href="/img/LogoConcha.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <!--Style-->
    <!--typo--> <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <style>
        .menu a[href="index.php?accio=mostra-cuenta"]{
            background: rgba(0,0,0,0.3);
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <?php require __DIR__.'/controladores/menu_header.php'; ?>
    </header>

    <section>
        <?php require __DIR__.'/controladores/c_mostraCuenta.php'; ?>
    </section>
    <footer>
        <?php require __DIR__.'/controladores/c_footer.php'; ?>
    </footer>
</body>
</html>