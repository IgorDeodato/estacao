<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estação do Ano</title>
    <style>
        
        /* css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #d9f7f5, #f7e7d9);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            margin-top: 20px;
            color: #1a5276;
        }

        h2 {
            margin-top: 20px;
            color: #1a5276;
            font-size: 1.8em;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            font-size: 1.2em;
            color: #1a5276;
        }

        input[type="number"] {
            padding: 10px;
            margin: 10px 0;
            font-size: 1em;
            width: 50%;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            font-size: 1em;
            background: #1a5276;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #145a77;
        }

        img {
            margin-top: 20px;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1>DESCUBRA A ESTAÇÃO DO ANO</h1>
    <form method="POST">
        <label for="dia">Dia:</label><br>
        <input type="number" id="dia" name="dia" required min="1" max="31"><br>
        <label for="mes">Mês:</label><br>
        <input type="number" id="mes" name="mes" required min="1" max="12"><br>
        <button type="submit">Ver estação</button>
    </form>
    
        <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dia = (int)$_POST['dia'];
        $mes = (int)$_POST['mes'];
        $estacao = '';
        $imagem = '';

        if (($mes == 12 && $dia >= 21) || ($mes == 1 || $mes == 2) || ($mes == 3 && $dia < 20)) {
            $estacao = 'Verão';
            $imagem = 'https://lh3.googleusercontent.com/proxy/QcugMDEg6L1XhOEXyZLPkjdUr_2XPtHC2DkBxfK5lyzNYW8tiT2oqqF11ngj7uUIpbYr2JSzQg9IQVr2XRHycnQ6v50jgoUx6jJR6FzvS7GMJa7ARUWc_HuH6hhulYSBudTitw'; 
        } elseif (($mes == 3 && $dia >= 20) || ($mes == 4 || $mes == 5) || ($mes == 6 && $dia < 21)) {
            $estacao = 'Outono';
            $imagem = 'https://recreio.com.br/media/uploads/aleatorio/outono_capa.jpg'; 
        } elseif (($mes == 6 && $dia >= 21) || ($mes == 7 || $mes == 8) || ($mes == 9 && $dia < 23)) {
            $estacao = 'Inverno';
            $imagem = 'https://static.escolakids.uol.com.br/2020/07/frio-extremo.jpg'; 
        } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 || $mes == 11) || ($mes == 12 && $dia < 21)) {
            $estacao = 'Primavera';
            $imagem = 'https://educasc.com.br/wp-content/uploads/2023/09/iStock-1394440950-scaled.webp'; 
        } else {
            echo "<p>Data inválida. Tente novamente.</p>";
            exit;
        }

        // resultado
        echo "<h2>A estação do ano é: $estacao</h2>";
        echo "<img src='$imagem' alt='Imagem da estação $estacao' style='max-width: 300px;'>";
    }
    ?>
</body>
</html>
