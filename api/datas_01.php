<div class="titulo">Datas #01</div>

<?php
header("Content-type: text/html; charset=utf-8");
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y H:i A')  . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
echo ucwords(strftime('%A, %d de %B de %Y', time())) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo ucwords(strftime('%A, %d de %B de %Y', $amanha)) . '<br>';

$proximaSemana = strtotime('+1 week');
echo ucwords(strftime('%A, %d de %B de %Y', $proximaSemana)) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo utf8_encode(ucwords(strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa))) . '<br>';