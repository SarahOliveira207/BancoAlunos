<?php
    $string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

    $conn = new PDO($string_conexao);

    if(!$conn){
        echo "nao posso continuar";
        exit;
    } 
    $varSQL = "insert into alunos (nome,email,celular,turma) values (:nome,:email,:celular,:turma)";    

    /*usar o prepare é mais eficiente pois isere de uma vez no banco de dados*/
    $select = $conn->prepare($varSQL);
    $select->bindParam(':nome', $_POST['nome']);
    $select->bindParam(':email', $_POST['email']);
    $select->bindParam(':celular', $_POST['celular']);
    $select->bindParam(':turma', $_POST['turma']);
    

    $select->execute();

    header("Location: alunos.php"); //direciona a página para uma outra página, como href sem link
?>