<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            
            $entrada = $_POST["entrada"];
            $saida = $_POST["saida"];
            $cliente = $_POST["cliente"];
            $quarto = $_POST["quarto"];
            
            $sql = "insert into reserva (dt_inicial, dt_final, cpf, id_quarto) values ('{$entrada}','{$saida}','{$cliente}','{$quarto}')";
            
            $res = $conn->query($sql);
            
            if($res == true){
                print "<script>alert('Reserva realizada com sucesso!!!');</script>";
                print "<script>location.href='?page=listar_reserva'</script>";
            }else{
                print "<script>alert('Erro ao realizar reserva!!!');</script>";
                print "<script>location.href='?page=listar_reserva'</script>";
            }
            break;
            
        case 'editar':
            
        case 'excluir':
    }
?>