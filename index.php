<?php

// Array de tarefas
$tarefas = array(
    "Tarefa 1",
    "Tarefa 2",
    "Tarefa 3"
);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>
<body>

<h1>Lista de Tarefas</h1>

<ul>
    <?php foreach ($tarefas as $tarefa) { ?>
        <li><?php echo $tarefa; ?></li>
    <?php } ?>
</ul>

</body>
</html>
