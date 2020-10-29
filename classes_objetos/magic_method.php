<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo '<br>Liberado o objeto';
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($name, $value) {
        echo "Alterando atributo não declarado: {$name}/{$value}<br>";
    }

    public function __call($name, $arguments) {
        echo "Tentando executar método '${name}'";
        echo ", com os parametros: ";
        print_r($arguments);
    }
}

$pessoa = new Pessoa('Ricardo', 40);
$pessoa->apresentar(); //chamando o __toString
echo $pessoa . '<br>'; //chamando o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar();

$pessoa->nomeCompleto = 'Muito Legal'; //chamando o __set
$pessoa->nomeCompleto; //chamando o __get

$pessoa->exe(1, 'teste', true, [1, 2, 3]); //chamando o __call
$pessoa = null;