<div class="titulo">PDO: Inserir</div>

<?php
require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro (nome, email, nascimento, site, filhos, salario)
VALUES (
    'Guilherme Filho',
    'gui@gmail.com',
    '1998-07-21',
    'https://gui.com.br',
    0,
    3000
)";

$conexao = novaConexao();

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id";
} else {
    echo  $conexao->errorCode() . '<br>';
    print_r($conexao->errorInfo());
}

$conexao->close();