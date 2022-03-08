<!DOCTYPE html>
<html>
<head>
    <title>Inicio - Sabores de Galicia</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" type="text/css" href="/styles/style_header.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_inicio.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_footer.css">
    <link rel="stylesheet" type="text/css" href="/styles/fontello.css">
    <link rel="icon" href="/img/LogoConcha.png">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <!--Style-->
    <!--typo--> <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <style>
        .menu a[href="index.php"]{
            background: rgba(0,0,0,0.3);
            font-weight: bold;
        }
    </style>
</head>

<body>
<div id="layout">
    <header style="grid-area: header">
        <?php require __DIR__.'/controladores/menu_header.php'; ?>
    </header>

    <section style="grid-area: grid-banner" id="banner">
        <?php require __DIR__.'/controladores/c_banner.php'; ?>
    </section>

    <section style="grid-area: grid-sobre_nosotros" id="sobre_nosotros">
        <?php require __DIR__.'/controladores/c_infoNosotros.php'; ?>
    </section>

    <section style="grid-area: grid-categorias" id="categorias">
        <?php require __DIR__.'/controladores/c_gridCategorias.php'; ?>
    </section>

    <footer style="grid-area: footer">
        <?php require __DIR__.'/controladores/c_footer.php'; ?>
    </footer>
</div>

</body>
</html>
