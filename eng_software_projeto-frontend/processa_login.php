<?php
// começar ou retomar uma sessão
session_start();

// se vier um pedido para login
if (!empty($_POST)) {

    // estabelecer ligação com a base de dados
    // mysql_connect('hostsql', 'username', 'password') or die(mysql_error());
    // mysql_select_db('basedados');

    // receber o pedido de login com segurança
    // $username = mysql_real_escape_string($_POST['username']);
    // $password = sha1($_POST['password']);

    $username = $_POST['username'];
    $password = $_POST['password'];

    // verificar o utilizador em questão (pretendemos obter uma única linha de registos)
    // $login = mysql_query("SELECT userid, username FROM users WHERE username = '$username' AND password = '$password'");

    // if ($login && mysql_num_rows($login) == 1) {
    if ($username == "user") {

        // o utilizador está correctamente validado
        // guardamos as suas informações numa sessão
        // $_SESSION['id'] = mysql_result($login, 0, 0);
        // $_SESSION['username'] = mysql_result($login, 0, 1);
        $_SESSION['id'] = $username;
        $_SESSION['username'] = $username;

        header("Location: cadastro_pessoa.php");
    } else {
        // falhou o login
        echo "<p>Utilizador ou password invalidos. <a href=\"login.php\">Tente novamente</a></p>";
    }
}
?>
