<?php

    $turma = "2INIA";

    $opcao1 = ($turma=="2INIA" ? "selected" : "");
    $opcao2 = ($turma=="2INIA" ? "selected" : "");
    $opcao3 = ($turma=="2INIA" ? "selected" : "");

?>


<html>
    <body>
        <form action='insertAluno.php' method='POST'>

        Nome<br>
        <input type='text' name='nome' value=''><br>

        E-mail <br>
        <input type="text" name="email" value=''><br>

        Celular<br>
        <input type='text' name='celular' value=''><br>
        

        Sexo <br>
        <input type="text" name="sexo" value=''> <br>

        Matricula <br>
        <input type="number" name="matricula" value=''> <br>

        Turma <br>
        <select name="turma" id="turma">
            <option <?php echo $opcao1; ?> value="2INIA"> 2INIA </option>
            <option <?php echo $opcao2; ?> value="2INIB"> 2INIB </option>
            <option <?php echo $opcao3; ?> value="2INF"> 2INF </option>
        </select> <br>

        <button type="submit">Adicionar</button>

        </form>
        
        
    </body>
</html>