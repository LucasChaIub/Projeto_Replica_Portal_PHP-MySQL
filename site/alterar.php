<?php include './conecta.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $query = "SELECT * FROM cad_aluno WHERE id_aluno = $id";
    $link = conecta();
    $alterar = mysqli_fetch_array(mysqli_query($link, $query));
}else{
    header("Location: principal.php");
}
?>
<html>
    <head>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> </script>
        
        <meta charset="UTF-8">
        
        <title >Menu | Sistema Escolar</title>
        
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
        <br><br><br><br>
        <form action="salvar_alt.php" method="POST">
            <input type="hidden" name="id" value="<?=$alterar['id_aluno']?>">
            <div> Matricula:
                <input type="text" name="matricula" value="<?=$alterar['matricula']?>" >
            </div>
            
            <div> Nome do Aluno:
                <input type="text" name="nome" value="<?=$alterar['nome']?>">
            </div> 

            <div> Telefone:
                <input type="text" name="telefone" value="<?=$alterar['telefone']?>">       
            </div>

            <div>
                <input type="submit" value="Alterar" name="submit">
            </div>

        </form>
    </body>
</html>