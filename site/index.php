
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title >LOGIN | Sistema Escolar</title>
        <link href="../CSS/css.scss" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="center">
            <a href="https://www.unipacto.com.br/"><img src="../img/logo-branca.png" class="logobranca"></a>
            <a href="https://captacao.unipacto.com.br/agendamentos"><img src="../img/Banner 2_Prancheta 1.jpg" class="imgindex" href="https://captacao.unipacto.com.br/agendamentos"></a>
         <form action="logar.php" method="POST">
            <h1 class="text-monospace">Acessar o Site</h1>
            <div class="box1">
                <br>
                <label for="login">Login: <input type="logar" class="form-control" id="login" name="login" ></label>
                <br>
                <label for="pass">Senha:<input type="password" class="form-control" id="pass" name="password" minleght="7" maxlength="20" required> </label>
                <br><br>
                <a class="btn btn-dark">  <input type="submit" name="enviar" value="Logar" ></a> 
                <br> 
                <label> </label>
            </div>
         </form>
        <div class="info"> <br>Rua Engenheiro Célso Murta, 600 
        <br> Olga Correa, Teófilo Otoni
        <br> MG - 39803-087
        <br> Copyright © Braun, Chalub</div>
        </div>
    </body>
</html>
