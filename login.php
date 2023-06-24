<?php 
    include("conexao.php");
    if (isset($_POST["submit"])) {

        $usuario = $_POST["email"];
        $senha = $_POST["senha"];

        $sqlCode = "SELECT * FROM usuarios WHERE email = '$usuario' AND senha = '$senha'";
        $resultado = mysqli_query($mysqli, $sqlCode);
        $row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $count = mysqli_num_rows($resultado);
        
        if ($count == 1) {
   
            header("Location: painel.php");
        } else {
            echo '<script> 
                window.location.href = "index.php";
                alert("Usuário ou senha incorretos.");
            </script>';
        }
    }

?>