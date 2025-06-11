<html>

    <body>
        
        <?php

            $string_conexao = "pgsql:host=localhost; port=5432; dbname=cursos; user=postgres; password=postgres";

            $conn = new PDO($string_conexao);

            if(!$conn){
                echo "nao posso continuar";
                exit;
            } 
            
            $id = $_GET['id'];
            $varSQL = "SELECT *FROM alunos WHERE id = :id";
            $select = $conn->prepare($varSQL);
            $select->bindParam(':id', $id);
            $select ->execute();
            $linha = $select->fetch();

            $id      = $linha['id'];
            $nome    = $linha['nome'];
            $celular = $linha['celular'];
            $email   = $linha['email'];
            //$turma   = $linha['turma'];
        ?>

        <form action="updateAluno.php" method="post">
            Nome <br>
            <input type="hidden" name="id" value='<php? echo $id; ?>'>
            <input type="text" name="nome" value='<?php echo $nome;?>'> <br>
            Celular <br>
            <input type="numeric" name="celular" value='<?php echo $celular;?>'> <br>
            E-mail <br>
            <input type="email" name="email" value='<?php echo $email;?>'> <br>
            
           Turma <br>
            <select name="turma" id="turma">
                <option value="2INIA"> 2INIA </option>
                <option value="2INIB"> 2INIB </option>
                <option value="2INF"> 2INF </option>
            </select> <br>
            
            <button type="submit">Atualizar</button>
        </form>
    </body>
</html>

