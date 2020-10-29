<div class="titulo">Desafio Classe Data</div>

<?php
class Data {
    public $dia = '01';
    public $mes = '01';
    public $ano = 1970;

    public function apresentar() {
        return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data1 = new Data();
echo $data1->apresentar() . '<br>';

$data2 = new Data();
$data2->dia = '24';
$data2->mes = '07';
$data2->ano = 1997;
echo $data2->apresentar() . '<br>';