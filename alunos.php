<?php
    $string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

    $conn = new PDO($string_conexao);

    if(!$conn){
        echo "nao posso continuar";
        exit;
    }
    $varSQL = "select *from alunos"; //variável 
    $select = $conn->query($varSQL);
?>

<table border=1>
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Celular</td>
        <td>E-mail</td>
        <td>Turma</td>
        <td a>Alterar</td>
        <td>Excluir</td>
    </tr>
    <?php
        while($linha = $select->fetch()){
            $id    = $linha['id'];
            $nome =  $linha['nome'];
            $celular = $linha['celular'];
            $email = $linha['email'];
            $turma = $linha['turma'];

        echo "<tr>
                <td>$id</td>
                <td>$nome</td>
                <td>$celular</td>
                <td>$email</td>
                <td>$turma</td>
                <td>
                    <a href='alterarAluno.php?id=".$linha['id']."'>Alterar</a>
                </td>
                <td>
                    <a href='excluirAluno.php?id=".$linha['id']."'>Excluir</a>
                </td>
            </tr>";
        }
    ?>
    <a href="adicionarAluno.php">Adicionar</a>
</table>

