<?php

$idade = 17;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais que 18 anos ou a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho." . PHP_EOL;
}
else if ($idade >= 16 and $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar." . PHP_EOL;
}
else {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
}

echo PHP_EOL;
echo "Adeus!";