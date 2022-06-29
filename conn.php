<?php 

$host="localhost";
$user="root";
$pass="usbw";
$banco ="projeto";

$conn=new mysqli ($host,$user, $pass, $banco);

if($conn->connect_error)
{
   echo "Erro";
}
else 
{
    echo "Conexao efetuada com sucesso";
}

?>