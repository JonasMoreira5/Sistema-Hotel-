<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            
            $cpf = $_POST["cpf"];
            $nome = $_POST["nome"];
            $telefone = $_POST["contato"];
            $email = $_POST["email"];
            
            $sql = "insert into cliente (cpf, nome, contato, email) values ('{$cpf}','{$nome}','{$telefone}','{$email}')";
                
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Cadastro realizado com sucesso!!!');</script>";
                print "<script>location.href='?page=listar_cliente'</script>";
            }else{
                print "<script>alert('Erro ao realizar cadastro!!!');</script>";
                print "<script>location.href='?page=listar_cliente'</script>";
            }
            break;
        
        case 'editar':
            
            $cpf = $_POST["cpf"];
            $nome = $_POST["nome"];
            $telefone = $_POST["contato"];
            $email = $_POST["email"];
            
            $sql = "update cliente set nome='{$nome}', contato='{$telefone}', email='{$email}' where cpf=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Alteração OK')</script>";
                print "<script>location.href='?page=listar_cliente';</script>";
            }else{
                print "<script>alert('ERRO!')</script>";
                print "<script>location.href='?page=listar_cliente';</script>";
            }
            
            break;
            
        case 'excluir':
            
            $sql = "delete from cliente where cpf=".$_REQUEST["id"];
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Excluido com sucesso!')</script>";
                print "<script>location.href='?page=listar_cliente';</script>";
            }else{
                print "<script>alert('Erro ao excluir!')</script>";
                print "<script>location.href='?page=listar_cliente';</script>";
            }
            
            break;
    }
?>
