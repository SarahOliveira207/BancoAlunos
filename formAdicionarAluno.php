<html>
    <body>
        <form action='insertAluno.php' method='post'>

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
            <option value="2inia">2INIA</option>
            <option value="2inib">2INIB</option>
            <option value="2INF">2INF</option>
        </select> <br>

        </form>
        <button type="submit">Adicionar</button>
        
    </body>
</html>