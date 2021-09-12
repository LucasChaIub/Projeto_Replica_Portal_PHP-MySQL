<?php  
//include './testar.php';
?>
<html>
       <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> </script>
        <meta charset="UTF-8">
        <title >Turma | Sistema Escolar</title>
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
            <br>
            <div class="organiza">
        <form action="turma2.php" method="POST">
            <div> Letra:
                <input type="text" name="letra">
            </div> 
<br>
            <div> Periodo:
                <input type="text" name="periodo">
            </div>
<br>
            <div> Curso:
                <?php  
                include('conecta.php');
                $con = conecta();
                $envia = mysqli_query($con, "select * from curso");?>
                    <select name="curso">
                    	<?php   
                    	while ($curso = mysqli_fetch_array($envia)) {?>
                    		<option value="<?=$curso['id'] ?>"><?=$curso['nome'] ?></option>	
                    	<?php	
                    	}
                    	?>
                    </select>
            	
            </div>
<br>
            <div> Ano:
                <input type="text" name="ano">
            </div>
            <br>

			<div> Semestre:
                <input type="number" max="10" min="1" name="semestre">
            </div>
<br>
            <div>
                <input type="submit" value="Ir" name="indo" class="cadturmaescrita">   
            </div>
<br></div>
        </form>
            </div>
    </body>
</html>

