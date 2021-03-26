
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <link rel="stylesheet" href="Public/css/signin.css">
        <title>Treinando MVC</title>
    </head>
    <body class="text-center">
            <form class="form-signin" method = "POST" action ="App/Controler/LoginControler.php">
                <img class="mb-4" src="imagens/logo.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Area Restrita</h1>
                    <div class="form-group">
                        <label>Usuário</label>
                        <input type="text" class="form-control" placeholder="Digite seu usuário">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" placeholder="Digite sua senha">
                    </div>
                <button type="submit" name ="sendLogin" class="btn btn-lg btn-primary btn-block" style="margin-bottom: 20px;">Acessar</button>
            </form>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
    </body>
</html>