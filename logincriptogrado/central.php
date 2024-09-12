<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1> 
        Bem vindo a página principal
        <?php 
           // Criação do array para exibição
          $user = "casa";
          $num = md5(123456);
          $pass = $num;

   
    $array = [$user,$pass];

    // Verifica se o array tem pelo menos dois elementos para evitar erros
    if (count($array) > 1) {
        // Calcula o valor mínimo e máximo do array com base no comprimento das strings
        $valormin = min(array_map('strlen', $array));
       $valormax = max(array_map('strlen', $array));
        
        // Inverte o array
        $reverse = array_reverse($array);
        
        // Ordena o array
        $sorted_array = $array;
        sort($sorted_array);

        // Verifica se o valor do usuário está no array
        $search = $user; // Exemplo: pesquisando o valor do usuário
        $found = in_array($search, $sorted_array);

        echo "<h2>Detalhes do Array</h2>";
        echo "<p>Array original: " . implode(', ', $array) . "</p>";
        echo "<p>O valor mínimo (por comprimento) é $valormin</p>";?> <img src="imgs/less.png">
      <?php  echo "<p>O valor máximo (por comprimento) é $valormax</p>";?><img src="imgs/greater.png">
       <?php echo "<p>O array reverso é: " . implode(', ', $reverse) . "</p>";?><img src="imgs/reverse.png">
     <?php   echo "<p>O array ordenado é: " . implode(', ', $sorted_array) . "</p>";?><img src="imgs/order.png">

     <?php
        if ($found) {
            echo "<p>O valor procurado '$search' foi encontrado no array.</p>";?><img src="imgs/search.png"> <?php
        } else {
            echo "<p>O valor procurado '$search' não foi encontrado no array.</p>";
        }
    } else {
        echo "<p>Array não contém elementos suficientes para operação.</p>";
    }
        ?>
    </h1>
</body>
</html>