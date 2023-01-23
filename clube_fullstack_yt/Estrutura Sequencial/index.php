<?php

include './teste.php'; //se acontecer um erro ele continuara a aplicação
require './teste.php'; // quando ocorrer um erro ele não continuara a aplicação
include_once('./teste.php'); //ele é usado pra ter a certeza que estamos incluindo apenas uma vez.
require_once './teste.php'; //ele mostrara apenas uma vez tambem.

echo $name;
echo $idade;

