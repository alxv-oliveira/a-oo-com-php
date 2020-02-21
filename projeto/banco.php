<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular(new Cpf('698.549.548-10'), 'Patricia'));
var_dump($segundaConta);

$outra = new Conta(new Titular(new Cpf('123.654.789-10'), 'Abcdefg'));