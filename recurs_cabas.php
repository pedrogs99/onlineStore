<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cesta - Sabores de Galicia</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" type="text/css" href="/styles/style_header.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_footer.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_cabas.css">
    <link rel="icon" href="/img/LogoConcha.png">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <style>
        .menu a[href="index.php?accio=mostra-cabas"]{
            background: rgba(0,0,0,0.3);
            font-weight: bold;
        }
    </style>

</head>
<body>
    <header>
        <?php require __DIR__.'/controladores/menu_header.php'; ?>
    </header>

    <section id="contingutCabas">
        <?php require __DIR__.'/controladores/c_mostraCabas.php'; ?>
    </section>
    <footer>
        <?php require __DIR__.'/controladores/c_footer.php'; ?>
    </footer>
</body>
</html>