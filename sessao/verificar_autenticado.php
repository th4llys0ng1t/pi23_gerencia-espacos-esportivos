<?php

// Verifica se sessão ja foi iniciada antes
if(session_id() == '')
    session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: login.php?erro=Você+não+tem+permissão+de+acesso");
    die('');
}
?>