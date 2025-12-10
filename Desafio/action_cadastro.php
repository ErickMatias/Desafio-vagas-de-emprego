<?php
    require_once "action_index.php";


    $empresa = $conn->real_escape_string($_POST["empresa"]);
    $cargo = $conn->real_escape_string($_POST["cargo"]);
    $localizacao = $conn->real_escape_string($_POST["localizacao"]);
    $habilidades = $conn->real_escape_string($_POST["habilidades"]);
    $descricao = $conn->real_escape_string($_POST["descricao"]);
    

    $sql = "INSERT INTO dados (cargo, empresa, descricao, localizacao, habilidades) VALUES ('$cargo', '$empresa', '$descricao', '$localizacao', '$habilidades')";

    if($conn->query($sql) === TRUE){
        header("Location: index.php");
    } else{
        echo "Erro:" . $sql . "<br>" . $conn->error;
    }

$conn->close();

?>