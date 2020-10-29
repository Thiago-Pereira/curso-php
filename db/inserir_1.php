<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'João Pereira',
    '1962-04-05',
    'joaopereira@email.com.br',
    'https://joaopereira.sites.com.br',
    2,
    1300.87
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo 'Sucesso' . '<br>';
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();