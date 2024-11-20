<?php
//cadastrar.php
include "conexao.php";

$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$situacao = $_POST['situacao'];


//1º Passo - comando SQL
$sql = "INSERT INTO tb_funcionarios
    (matricula, nome, setor, situacao)
    VALUES
    ('$matricula', '$nome', '$setor', '$situacao')";

//2º Passo - prepara a conexão
$inserir = $pdo->prepare($sql);
//3º Passo - tentar executar
try{
    $inserir->execute();
    echo "Ordem de Serviço Cadastrada com sucesso!";
}catch(PDOException $erro){
    echo "Falha ao cadastrar".$erro->getMessage();
}
?>