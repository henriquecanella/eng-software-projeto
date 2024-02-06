<?php
// começar ou retomar uma sessão
session_start();

$BACKEND_ADDRESS=getenv("BACKEND_ADDRESS");
$BACKEND_PORT=getenv("BACKEND_PORT");
$BACKEND_URL="http://".$BACKEND_ADDRESS.":".$BACKEND_PORT."/auth";

if (!empty($_POST)) {

    $username = $_POST['username'];
    $password = $_POST['pass'];

    $data = array(
        'usuario' => $username,
        'senha' => $password
    );

    $corpo = json_encode($data);
    $opts = array('http' =>
        array(
            'method'  => 'GET',
            'header'  => "Content-Type: application/json",
            'content' => $corpo,
            'timeout' => 60
        )
        );

    $context = stream_context_create($opts);
    $file = file_get_contents($BACKEND_URL, false, $context);
    $data = json_decode($file);

    if ( $data->logged == true ) {
        $_SESSION['id'] = $username;
        $_SESSION['username'] = $username;

        header("Location: pagina_inicial.php");
    } else {
        header("Location: usuario_senha_incorretos.php");
    }
}
?>
