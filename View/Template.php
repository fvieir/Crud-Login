<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="Public/imagens/logo.png">
        <!-- Bootstrap CSS -->
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <link rel="stylesheet" href="Public/css/listar_usuario.css">
        <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <!-- Font Awesome CSS-->

        <?php 
            if ($dadosView == 'ordemServico') {
             ?>
        <link rel="stylesheet" href="Public/css/listar_usuario.css">     
        <link rel="stylesheet" href="Public/css/fontawesome.min.css">
        <!-- Font awesome JS-->
        <script defer src="/Public/js/fontawesome.min.js"></script>
        <?php
            } else {
                ?>
        <link rel="stylesheet" href="../Public/css/listar_usuario.css">       
        <link rel="stylesheet" href="../Public/css/fontawesome.min.css">
        <!-- Font awesome JS-->
        <script defer src="../Public/js/fontawesome.min.js"></script>
        <?php
            }
        ?>

       

        <title>V&S</title>
    </head>
<body class="text-center">

<?php 

    $this->CarregarViewNoTemplate($dadosView,$dados);

?>


</body>
</html>
