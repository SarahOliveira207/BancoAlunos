<?php

    $string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

    $conn = new PDO($string_conexao);

    if(!$conn){
        echo "nao posso continuar";
        exit;
    }
    
    $varSQL = "update alunos set nome = :nome, celular = :celular, email = :email WHERE id = :id";
    $update = $conn -> prepare($varSQL);
    $update -> bindParam(':nome', $_POST['nome']);
    $update -> bindParam(':celular', $_POST['celular']);
    $update -> bindParam(':email', $_POST['email']);
    $update -> bindParam(':turma', $_POST['turma']);
    $update -> bindParam(':id', $_POST['id']);
    $update->execute();

    header("Location: alunos.php"); 
    //, turma = :turma
?>

