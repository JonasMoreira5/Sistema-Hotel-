<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            
            $desc = $_POST["desc"];
            $valor = $_POST["valor"];
            
            $sql = "insert into categoria (descricao, valor) values ('{$desc}','{$valor}')";
                
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Cadastro realizado com sucesso!!!');</script>";
                print "<script>location.href='?page=listar_categoria'</script>";
            }else{
                print "<script>alert('Erro ao realizar cadastro!!!');</script>";
                print "<script>location.href='?page=listar_categoria'</script>";
            }
            break;
        
        case 'editar':
            
            $desc = $_POST["desc"];
            $valor = $_POST["valor"];
            
            $sql = "update categoria set descricao='{$desc}', valor='{$valor}' where cat_id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Alteração OK')</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }else{
                print "<script>alert('ERRO!')</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }
            
            break;
            
        case 'excluir':
            
            $sql = "delete from categoria where cat_id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Excluido com sucesso!')</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }else{
                print "<script>alert('Erro ao excluir!')</script>";
                print "<script>location.href='?page=listar_categoria';</script>";
            }
            
            break;
    }
?>