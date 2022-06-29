<?php 

  if(isset($_POST['submit']))
{ 

    print_r($_POST['nome']);

  include_once('conn.php');

$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email= $_POST['email'];
$contato= $_POST['contato'];


$insere=mysqli_query($conn, "INSERT INTO tbusu(nome,sobrenome,email,contato) values ('$nome','$sobrenome','$email','$contato')");

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
</head>

<body>
<form action="cadastroUsu.php" method="post">
        Nome do Usuario:<br>
        <input type="text" name="nome"/><br>
        <br>
            Sobrenome do Usuario:<br>
        <input type="text" name="sobrenome"/><br>
        <br>
        
            Email do Usuario:<br>
        <input type="text" name="email"/><br>
        <br>
        
            Forma de Contato:<br>
        <input type="text" name="contato"/><br>
        <br>
        
        
        <input type="submit" name="submit" id="submit" value="Cadastrar">
</form>
</body>
</html>
