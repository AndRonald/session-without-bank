<?php
session_start();
$nome = $_POST ['Nome'];
$senha = $_POST ['Senha'];

$usuario = 'ronald';
$password = '12345';

//$dataBase = new PDO('mysql:host=localhost;dbname=teste222', 'root', 'etec');
//echo "conexao efetuada com sucesso";

//$query = $dataBase -> prepare ("SELECT * FROM tbUsuario where nmUsuario = :Nome and dsSenha = :Senha");

//$query -> bindParam (':Nome', $nome);
//$query -> bindParam (':Senha', $senha);
//$query -> execute();
//$data = $query -> fetch(PDO::FETCH_ASSOC);

if($nome == $usuario && $senha == $password){
    $_SESSION['Nome'] = $nome;
    $_SESSION['Senha'] = $senha;
    header('location:paginasessao.php');
}
else
{
    header('location:index.php');
}
?>
