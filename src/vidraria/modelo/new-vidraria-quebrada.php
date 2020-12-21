<?php

    include('../../banco/conexao.php');

    if($conexao){

        $request = $_POST;
        $foto = $_FILES['foto'];

        if($request['nome'] == "" || $request['quantidade'] == "") {

            $dados = array(
                'msg' => 'Verifique os campos vazios ou se há uma imagem',
                'icone' => 'error'
            );

        }else{

            $pasta = "foto/";
            if(!file_exists('../' . $pasta)) mkdir('../' . $pasta, 0755);

            $nomeTemporario = $foto['tmp_name'];
            $nomeArquivo = $foto['name'];
            $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
            $novoNome = uniqid(time()) . '.' . $extensao; 
            $destino = $pasta . $novoNome;     
            $destino2  = '../' . $destino;

            if(move_uploaded_file($nomeTemporario, '../' . $destino)){

                if($request['laboratorio'] == 'externo'){
                    $lab = 1;
                } else if ($request['laboratorio'] == 'interno'){
                    $lab = 2;
                } else{
                    $lab = 3;
                }

                if($extensao == "jpeg" || $extensao == "JPEG" || $extensao == "jpg" || $extensao == "JPG" || $extensao == "png" || $extensao == "PNG" ){

                    if($request['relatorio'] == ""){

                        $sql = "INSERT INTO vidrarias_quebradas (nome, quantidade, foto) VALUES ('$request[nome]', $request[quantidade], '{$destino2}')";
                    
                    } else{

                         $sql = "INSERT INTO vidrarias_quebradas (nome, quantidade, foto, id_relatorio) VALUES ('$request[nome]', $request[quantidade], '{$destino2}', '$request[relatorio]')";
                    }

                    $resultado = mysqli_query($conexao, $sql);
                   
                } else{

                    $dados = array(
                        'msg' => 'Formato de arquivo não suportado',
                        'icone' => 'error'
                    );
                    unlink($destino2);
                    
                    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
                    exit;
                }
            }

            if($resultado){
                $dados = array(
                    'icone' => 'success',
                    'msg' => 'Vidraria Quebrada catalogada com êxito'
                );
            }else{
                $dados = array(
                    'icone' => 'error',
                    'msg' => 'Verifique se há uma imagem',
                    $sql
                );
                unlink($destino2);
            }

            mysqli_close($conexao);
        }
    }else{
        $dados = array(
            'mensagem' => "Erro [042]" . "<br>" . "Ocorreu um erro interno no servidor 😕",
            'icone' => 'error'
        );
        exit;
    }

    echo json_encode($dados, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);