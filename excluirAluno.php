<?php

    $string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

    $conn = new PDO($string_conexao);

    if(!$conn){
        echo "nao posso continuar";
        exit;
    }

    $id = $_GET['id'];
    $varSQL = "DELETE FROM alunos WHERE id = :id";
    $delete = $conn->prepare($varSQL);
    $delete -> bindParam(':id', $id);

    $delete -> execute();

    header("Location: alunos.php");
?>