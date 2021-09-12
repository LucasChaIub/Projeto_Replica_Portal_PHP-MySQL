<?php
// include './testar.php';
include './conecta.php';
$link = conecta();
$query = "SELECT * FROM curso"; //DELETE FROM cadastrar WHERE id_aluno = '$id' $id = $_GET['id'] 
$cursos = mysqli_query($link,$query);
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> </script>
        <meta charset="UTF-8">
        <title >Curso | Sistema Escolar</title>
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
         <div class="cadturmaescrita"><a href="curso.php">Cadastrar Curso</a></div>
         <div id="innerbox">
            <table>
            <thead>
            <tr>
                <th>#/</th>
                <th>Nome</th>
                <th>Sigla</th>  
                <th>Excluir</th>  
            </tr>
            </thead>
            <tbody>
            <?php while ($curso = mysqli_fetch_array($cursos)) { ?>
                <tr>
                    <td><?=$curso['id']?>/</td>
                    <td><?=$curso['nome']?></td>
                    <td><?=$curso['sigla']?></td>
                    <td>
                        <form action="excluir_curso.php" method="post">
                            <input type="hidden" name="id" value="<?=$curso['id']?>">
                            <input type="submit" name="submit" value="Excluir">
                        </form>
                    </td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
            </div></div>        
    </body>
</html>