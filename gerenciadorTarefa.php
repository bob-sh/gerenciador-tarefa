<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=gerenciador_tarefa', '', '');

    $stmt = $conn->prepare('INSERT INTO tarefas (nome_tarefa) VALUES(:nome_tarefa)');
    $stmt->execute(array(
      ':nome_tarefa' => $_REQUEST['nome_tarefa']
    ));
  
    echo $stmt->rowCount();
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}