<?php

    session_start();

    if(isset($_SESSION['login'])){
        header('Location: menu.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="shortcut icon" href="recursos/img/icons/addcadastro.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/css/cadastro.css">
    <link rel="stylesheet" href="recursos/css/all.min.css">
</head>

<body class="grad">
    <div class="container">
        <div class="row">
            <div class="caixa">
                <h1 class="text-center mb-4">Cadastrar</h1>
                <div class="img-user mb-3 text-center">
                    <img src="recursos/img/icons/professores.svg" class="img">
                </div>
                <form id='form-cadastro' class="form-group">
                    <label>Você é um:</label>
                    <select name='tipo-usuario' class="form-control seletor">
                        <option value="professor(a)">Professor(a)</option>
                        <option value="aluno(a)">Aluno(a)</option>
                    </select>
                    <div class="campo mt-3">
                        <input class='input' name='ra' type='text' placeholder="RA" id='ra'>
                    </div>
                    <div class="campo mt-3">
                        <input class='input' name='rm' type='text' placeholder="RM" id="rm" disabled>
                    </div>
                    <div class="campo mt-4">
                        <input class='input' name='email' type='text' id="email" placeholder="Email">
                    </div>
                    <div class="campo mt-4">
                        <input class='input' name='nome' type="text" id="nome" placeholder="Nome completo">
                    </div>
                    <div class="campo mt-4">
                        <input class='input' name='senha' type='password' id="senha" placeholder="Criar senha">
                    </div>
                    <button type="button" class="btn btn-success btn-block mt-4 font-weight-bold btn-cadastrar">
                        Cadastrar
                    </button>
                </form>
                <button type="button" class="btn btn-primary btn-block mt-3 font-weight-bold btn-voltar">
                    Já tenho uma conta
                </button>
            </div>
        </div>
    </div>
    <script src="recursos/js/jquery-3.5.1.min.js "></script>
    <script src="recursos/js/bootstrap.min.js "></script>
    <script src="recursos/libs/jQuery Mask/jquery.mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="src/usuario/controle/cadastro.js"></script>
</body>

</html>