<?php 
//include './testar.php';//
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> </script>
        <meta charset="UTF-8">
        <title >Aluno | Sistema Escolar</title>
        <link href="../CSS/css.scss" rel="stylesheet" type="text/css">
    </head>
    <body> 
        
        <div id="menu">
            <h2 id="titulomenu">SISTEMA ESCOLAR</h2>
            <a href="aluno_turma.php"><div id="boxinicio"><div id="boxiniciocorzinha"><div id="Inicio">Aluno | Turma</div></div></div></a>
            <a href="escolha_aluno.php"><div id="boxprof"><div id="boxiniciocorzinha"><div id="Inicio">Aluno</div></div></div></a>
            <a href="escolha_curso.php"><div id="boxprof"><div id="boxiniciocorzinha"><div id="Inicio">Curso</div></div></div></a>
            <a href="escolha_turma.php"><div id="boxprof"><div id="boxiniciocorzinha"><div id="Inicio">Turma</div></div></div></a> 
            <a href="principal.php"><div id="boxprof"><div id="boxiniciocorzinha"><div id="Inicio">Home</div></div></div></a>
            
        </div>
        <br><br><br><br><br>
        <div id="boxfull">
            <div class="organiza">
        <form action="cad2.php" method="POST">
            <br>
            <div> Nome do Aluno:
                <input type="text" name="nome">
            </div> <br>

            <div> Matricula:
                <input type="text" name="matricula">
            </div><br>

            <div> Telefone:
                <input type="text" name="telefone">       
            </div><br>

            <div>
                <input type="submit" value="Enviar" name="aluno" class="cadturmaescrita">
            </div><br>

        </form>
            </div></div>
    </body>
</html>
