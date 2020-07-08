<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="style/global.css">
    <link rel="stylesheet" href="style/pages/login.css">

    <title>#EntreNósNaRede</title>

</head>
<body>
<div class="container container-login text-center">

    <div class="logo">
        <img src="media/img/Logo.png" alt="#EntreNósNaRede">
    </div>

    <h1 class="title">Seja bem-vindo(a)</h1>
    <p class="subtitle">ao #EntreNósNaRede</p>

    <form class="form-login">
        <div class="form-group">
            <label class="d-none" for="email">E-mail</label>
            <div class="group-input">
                <i class="far fa-user-circle"></i>
                <input class="form-control" id="email" type="text" placeholder="E-mail">
            </div>
        </div>
        <div class="form-group">
            <label for="senha" class="d-none"></label>
            <div class="group-input">
                <i class="fas fa-key"></i>
                <input class="form-control" id="senha" type="password" placeholder="Senha">
            </div>
        </div>
        <button type="button" class="btn btn-primary btn-block btn-login btn-lg">Entrar</button>
    </form>

    <div class="rodape-login">
        <p class="mb-0">Não possui conta?</p><a class="link-primary" href="?page=cadastro">Cadastre-se!</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>