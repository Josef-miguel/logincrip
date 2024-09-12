<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <?php
 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $usuario = $_POST["user_campo"] ?? '';
            $senha = $_POST["senha_campo"] ?? '';

      
            if (empty($usuario) || empty($senha)) {
                echo "<h3>Digite um usuário e senha válidos</h3>";
            } else {
         

  
                $criptografia = md5($senha); 
                $checkcripto = md5($senha); 

                if ($criptografia === $checkcripto) {
              
                    echo "<h1>Usuário e senha válidos</h1>";
                    echo "<p>Senha criptografada: <br>" . htmlspecialchars($checkcripto) . "</p>";
                } else {
                    echo "<h3>Senha inválida</h3>";
                }
            }
        }
        ?>

        <form action="central.php">
            <input type="submit" value="Entrar">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>
