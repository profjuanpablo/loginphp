<?php
session_start();
include_once('seguranca.php');
include_once('../conexao/conexao.php');


seguranca_adm();

echo "Olá ADMINSTRADOR - ".$_SESSION['usuarioNome'];

echo " - <a href='sair.php'>Sair</a>";