<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <link rel="stylesheet" href="Public/css/signin.css">
        <title>Fabricio</title>
    </head>
<body class="text-center">

<?php 

    $this->CarregarViewNoTemplate($dadosView,$dados);

    session_start();
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }

?>


</body>
</html>
