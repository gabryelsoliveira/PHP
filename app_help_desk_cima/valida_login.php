<?php
session_start();
 
// Usuários pré-cadastrados
$usuarios = array(
    ['id' => '1',
    'perfil' => 'adm',
    'nome' => 'Gabryel',
    'email' => 'gabryels.oliveira08@gmail.com',
    'senha' => '0209'],

);
 
$usuarioAutenticado = false;
 
$emailUsuario = $_GET['email'];
$senhaUsuario = $_GET['senha'];
 
for ($idx = 0; $idx < count($usuarios); $idx ++) {
    if($emailUsuario == $usuarios[$idx]['email'] && $senhaUsuario == $usuarios[$idx]['senha']){
        $usuarioAutenticado = true;
        $_SESSION['id'] = $usuarios[$idx]['id'];
        $_SESSION['perfil'] = $usuarios[$idx]['perfil'];
        $usuarios['nome'] = $usuarios[$idx]['nome'];
        break;
    }else{
        $usuarioAutenticado = false;
    }
}
 
if($usuarioAutenticado){
    $_SESSION['autenticado'] = 'sim';
    header('location: home.php');
}else{
    $_SESSION['autenticado'] = 'nao';
    header('location: index.php?login=erro');
}
 
?>