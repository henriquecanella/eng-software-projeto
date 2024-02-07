<?php
// aceder às sessões
session_start();

// para terminar uma sessão, apenas é necessário destruí-la
session_destroy();

// redirecionar o utilizador para outra página, login.php por exemplo
header('Location: login.php');
?>
