<?php
require_once "action_index.php";

$sql = "SELECT empresa, cargo, localizacao, habilidades, descricao FROM dados";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_index.css">
        <title>Vagas de Emprego</title>
    </head>
    <body>
        <header>
            <h1>Vagas de Emprego</h1>
            <a href="cadastro.html" class="link-cadastro">Cadastrar vaga</a>
        </header>

        <main>
            <div class="container">
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='card'>";
                        echo "<h2>" . htmlspecialchars($row['cargo']) . "</h2>";
                        echo "<p><strong>Empresa:</strong> " . htmlspecialchars($row['empresa']) . "</p>";
                        echo "<p><strong>Localização:</strong> " . htmlspecialchars($row['localizacao']) . "</p>";
                        echo "<p><strong>Habilidades:</strong> " . htmlspecialchars($row['habilidades']) . "</p>";
                        echo "<p><strong>Descrição:</strong> " . htmlspecialchars($row['descricao']) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhuma vaga cadastrada.</p>";
                }
                $conn->close();
                ?>
            </div>
        </main>   
    </body>
</html>
