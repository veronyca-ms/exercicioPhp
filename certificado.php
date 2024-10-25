<?php

$nome = $_GET["nome"];
$curso = $_GET["curso"];
$turma = $_GET["turma"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Certifico para os devidos fins legais, que o aluno <?=$nome?> possui matrícula atíva no curso <?=$curso?>, regularmente ativo na turma <?=$turma?>.</p>
</body>
</html>
