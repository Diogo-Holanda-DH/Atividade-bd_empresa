<?php
//consultar_adm.php
include "conexao.php";

$sql = "SELECT * FROM tb_funcionarios
        WHERE matricula = 'Ativa'";
$consultar =$pdo->prepare($sql);
try{
    $consultar->execute();
    $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
    foreach ($resultados as $item) {
        $matricula = $item['matricula'];
        $nome = $item['nome'];
        $setor = $item['setor'];
        $situacao = $item['situacao'];
       
     
        echo "
            <div class='cartoes'>
                Nº da matricula: <h1 class='matricula'>$matricula</h1> <br>
                Nome: <span class='nome'>$nome</span> <br>
                Setor: R$ <span class='setor'>$setor</span> <br>
                Situação: <span class='situacao'>$situacao</span> <br>
                <button id='btnFechar' matricula='$matricula'> Fechar OS</button>

            </div>
        
        ";
    }
}catch(PDOException $erro){
    echo "Falha ao consultar";
}

?>
