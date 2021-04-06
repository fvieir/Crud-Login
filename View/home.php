<form class="form-signin" method="POST" action="loginController">

        <?php       
            session_start();
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <img class="mb-4" src="imagens/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Area Restrita</h1>
       
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuário"  >
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha"  >
        </div>
        <input type="submit" name="sendLogin" class="btn btn-lg btn-primary btn-block" style="margin-bottom: 20px;" value="Acessar">
    </form>