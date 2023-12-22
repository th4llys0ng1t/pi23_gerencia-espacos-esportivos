<?php

// Verificar se sessão já foi iniciada anteriormentre
if(session_id() == ''){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    die();
}
    
?>


