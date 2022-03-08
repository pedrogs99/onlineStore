<!DOCTYPE html>
<html>
<head>
    <title>Shop - Sabores de Galicia</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" type="text/css" href="/styles/style_header.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_categorias.css">
    <link rel="stylesheet" type="text/css" href="/styles/style_footer.css">
    <link rel="icon" href="/img/LogoConcha.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
    <!--Style-->
    <!--typo--> <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <style>
        .menu a[href="index.php?accio=mostra-productesDIRECTO&categoria=<?php echo $_GET['categoria'];?>"]{
            background: rgba(0,0,0,0.3);
            font-weight: bold;
        }
    </style>
</head>

<body>
<div id="layout">
    <header>
        <?php require __DIR__.'/controladores/menu_header.php'; ?>
    </header>

    <section id="workspace">
        <div id="contingutPagina">
            <?php require __DIR__.'/controladores/c_detallProducte.php'; ?>
        </div>
    </section>
    <footer>
        <?php require __DIR__.'/controladores/c_footer.php'; ?>
    </footer>
</body>
</html>