<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            
            $desc = $_POST["desc"];
            $categoria = $_POST["categoria"];
            
            $sql = "INSERT INTO quarto (descricao, idcategoria) VALUES ('{$desc}','{$categoria}')";
                
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Cadastro realizado com sucesso!!!')</script>";
                print "<script>location.href='?page=listar_quarto'</script>";
            }else{
                print "<script>alert('Erro ao realizar cadastro!!!');</script>";
                print "<script>location.href='?page=listar_quarto'</script>";
            }
            break;
        
        case 'editar':
            
            $desc = $_POST["desc"];
            $categoria = $_POST["categoria"];
            
            $sql = "UPDATE quarto SET descricao='{$desc}', idcategoria='{$categoria}' WHERE id_quarto=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Alteração OK')</script>";
                print "<script>location.href='?page=listar_quarto';</script>";
            }else{
                print "<script>alert('ERRO!')</script>";
                print "<script>location.href='?page=listar_quarto';</script>";
            }
            
            break;
            
        case 'excluir':
            
            // $sql = "DELETE FROM quarto WHERE id_quarto=".$_REQUEST["id"];
            
            // $res = $conn->query($sql);
            
            // if($res == true){
            //     print "<script>alert('Excluido com sucesso!')</script>";
            //     print "<script>location.href='?page=listar_quarto';</script>";
            // }else{
            //     print "<script>alert('Erro ao excluir!')</script>";
            //     print "<script>location.href='?page=listar_quarto';</script>";
            // }
            
            
            // Antes de eliminar o quarto, deverá cancelar as reservas associadas
            // Cancela reservas associadas

            $sql = "DELETE FROM reserva WHERE id_quarto =".$_REQUEST["id"];
            if ($conn->query($sql)) {
                // Agora pode excluir a sala com segurança
                print "<script>alert('Removido com sucesso!')</script>";
                print "<script>location.href='?page=listar_quarto';</script>";
                $sql = "DELETE FROM quarto WHERE id_quarto =".$_REQUEST["id"];
                if ($conn->query($sql)) {
                    print "<script>alert('O quarto e as reservas associadas foram excluídos!')</script>";
                    // O quarto e as reservas associadas foram excluídos
                } else {
                    print "<script>alert('Erro ao excluir!')</script>".$conn->error;
                    print "<script>location.href='?page=listar_quarto';</script>";
                }
            } else {
                echo "Erro ao cancelar reservas: " . $conn->error;
            }
            break;
    }