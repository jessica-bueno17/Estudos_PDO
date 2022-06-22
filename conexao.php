<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco); //'driver:informacoes_especificas_do_driver'
                                           //'sqlite:caminho_do_banco.sqlite'
                                           //'mysql:host=endereco_do_servidor;dbname=nome_do_banco'

echo 'conectei';