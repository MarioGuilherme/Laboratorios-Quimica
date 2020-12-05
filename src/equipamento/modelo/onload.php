<?php

    include('../../conexao.php');
    
    session_start();

    if($_SESSION['login'] == Null){
        $dados = array(
            'logado' => 'não',
            'tipo_user' => $_SESSION['tipo_user']
        );
    } else{
        if($_SESSION['tipo_user'] == 'professor(a)'){
            $dados = array(
                'logado' => 'sim',
                'nome' => $_SESSION['nome'],
                'ra' => $_SESSION['ra'],
                'tipo_user' => $_SESSION['tipo_user']
            );
        } else{
            $dados = array(
                'logado' => 'sim',
                'nome' => $_SESSION['nome'],
                'rm' => $_SESSION['rm'],
                'tipo_user' => $_SESSION['tipo_user']
            );
        }
    }
    
    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);