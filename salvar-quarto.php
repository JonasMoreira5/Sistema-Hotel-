<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            
            $desc = $_POST["desc"];
            $categoria = $_POST["categoria"];
            
            $sql = " INTO quarto (descricao, idcategoria) VALUES ('{$desc}','{$categoria}')";
                
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Cadastro realizado com sucesso!!!');</script>";
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
            
            $sql = "DELETE FROM quarto WHERE id_quarto=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Excluido com sucesso!')</script>";
                print "<script>location.href='?page=listar_quarto';</script>";
            }else{
                print "<script>alert('Erro ao excluir!')</script>";
                print "<script>location.href='?page=listar_quarto';</script>";
            }
            
            break;
    }
?>