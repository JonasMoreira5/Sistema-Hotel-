<?php
    $message="";
    $redirectTo = "?page=listar_categoria";

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $sql = "INSERT INTO categoria (descricao, valor) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $_POST["desc"], $_POST["valor"]);
            if ($stmt->execute()) {
                $message = "Cadastro realizado com sucesso!";
            } else {
                $message = "Erro ao realizar cadastro: " . $stmt->error;
            }
            break;

        case 'editar':
            $sql = "UPDATE categoria SET descricao=?, valor=? WHERE id_categoria=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssi", $_POST["desc"], $_POST["valor"], $_REQUEST["id"]);
            if ($stmt->execute()) {
                print "<script>alert('Alteração feita com sucesso!')</script>";
            } else {
                $message = "Erro ao editar: " . $stmt->error;
            }
            print "<script>location.href='?page=listar_categoria';</script>";
            break;

        case 'excluir':
            $sql = "DELETE FROM categoria WHERE id_categoria=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $_REQUEST["id"]);
            if ($stmt->execute()) {
                $message = "Excluído com sucesso!";
            } else {
                $message = "Erro ao excluir: " . $stmt->error;
            }
            break;
    }
    echo "<script>alert('$message'); location.href='$redirectTo';</script>";
?>
