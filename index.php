<?php
session_start();

if(!isset($_SESSION['estado'])) {
    $_SESSION['carrito'] = array();
    $_SESSION['estado'] = 'nologeado';
    $_SESSION['numeroProductos'] = 0;
    $_SESSION['precioTotal'] = 0;
}

if(empty($_GET['accio'])){
    $accio="none";;
}else{
    $accio=$_GET['accio'];
}


switch ($accio) {
    case 'llistar-categories':
        include __DIR__.'/recurs_categorias.php';
        break;
    case 'mostra-productes':
        include __DIR__.'/controladores/c_mostraProductes.php';
        break;
    case 'detall-producte':
        include __DIR__.'/controladores/c_detallProducte.php';
        break;
    case 'mostra-login':
        include __DIR__.'/recurs_login.php';
        break;
    case 'mostra-registre':
        include __DIR__.'/recurs_registre.php';
        break;
    case 'validacio-login':
        include __DIR__.'/controladores/c_validaLogin.php';
        break;
    case 'inici':
        include __DIR__.'/recurs_inicio.php';
        break;
    case'afegir-cabas':
        include __DIR__.'/controladores/c_afegirCabas.php';
        break;
    case 'mostra-cabas':
        include __DIR__.'/recurs_cabas.php';
        break;
    case 'elimina-producte':
        include __DIR__.'/controladores/c_mostraCabas.php';
        break;
    case 'confirma-compra':
        include __DIR__.'/recurs_confirmaCompra.php';
        break;
    case 'mostra-comandas':
        include __DIR__.'/recurs_comandas.php';
        break;
    case 'mostra-cuenta':
        include __DIR__.'/recurs_infoCuenta.php';
        break;
    case 'edita-cuenta':
        include __DIR__.'/recurs_editarCuenta.php';
        break;
    case 'logout':
        include __DIR__.'/controladores/c_logout.php';
        break;
    case 'mostra-productesDIRECTO':
        include __DIR__.'/recurs_productes.php';
        break;
    case 'busca-productes':
        include __DIR__.'/controladores/c_buscaProductes.php';
        break;
    case 'mostra-producteBuscador':
        include __DIR__.'/recurs_detallProducte.php';
        break;
    case 'valida-valorsRegistres':
        include __DIR__.'/controladores/c_validaRegistre.php';
        break;
    case 'modifica-cantidad':
        include __DIR__.'/controladores/c_modificaCantidad.php';
        break;
    default:
        include __DIR__.'/recurs_inicio.php';
        break;


}