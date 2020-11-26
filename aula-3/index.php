<?php
// AULA 3 DE PRÁTICA DE PHP:
// - INCLUDE OU REQUIRE
// - MÉTODO SUBSTR : https://www.php.net/manual/pt_BR/function.substr.php
// - HTTP MÉTODOS PRINCIPAIS: GET, POST, PUT, DELETE
// - https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Methods
// STATUS 200 = OK
// STATUS 300 = ALTERAÇÕES
// STATUS 400 = ERRO DE CLIENTE
// STATUS 500 = ERRO DE SERVIDOR

// - MySQL BÁSICO COM PHPMYADMIN: CREATE SCHEMA, DROP SCHEMA, CREATE TABLE etc... (XAMPP: START PhpMyAdmin -> ACESSA: localhost/phpmyadmin)

// https://www.w3schools.com/sql/sql_create_table.asp    =   MODELO CODIGO CRIAR TABELA MySQL
// https://www.w3schools.com/sql/sql_alter.asp           =   MODELO CODIGO ADD, REMOVER, MODIFICAR COLUNAS NA TABELA MySQL
// https://www.w3schools.com/sql/sql_insert.asp          =   MODELO CODIGO CRIAR LINHAS TABELA MySQL
// https://www.w3schools.com/sql/sql_delete.asp          =   MODELO CODIGO DELETAR LINHAS TABELA MySQL
// https://www.w3schools.com/sql/sql_update.asp          =   MODELO CODIGO ALTERAR/MODIFICAR LINHAS TABELA MySQL
// https://www.w3schools.com/sql/sql_select.asp          =   MODELO CODIGO SELECIONAR LINHAS TABELA MySQL
// https://www.w3schools.com/sql/sql_where.asp           =   MODELO CODIGO FILTRAR RESULTADOS SELECIONADOS POR TEXTO PRECISO MySQL
// https://www.w3schools.com/sql/sql_like.asp            =   MODELO CODIGO FILTRAR RESULTADOS SELECIONADOS POR PEDAÇO DE TEXTO MySQL

// preg_match() (ou também chamado REGEX) --> Expressão regular PHP

?>

<h1>GERENTE DA EMPRESA:</h1>

<?php

require 'Gerente.php';

$gerenteRecursosHumanos = new Gerente();
$gerenteRecursosHumanos->nome = 'José de Almeida';

$nomeSemLetraInicialGerenteRH = substr($gerenteRecursosHumanos->nome, 1);
$nomeSemLetraFinalGerenteRH = substr($gerenteRecursosHumanos->nome, 0, -1);

echo $nomeSemLetraInicialGerenteRH . "<br/>";
echo $nomeSemLetraFinalGerenteRH . "<br/>";

?>