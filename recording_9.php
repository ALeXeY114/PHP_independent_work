<?php
    $pdo = new PDO('mysql:host=127.0.0.1; dbname=recording; charset=utf8;' , 'mysql', 'mysql');
    $text = $_POST['text'];
    
    $sql = "INSERT INTO record (text) VALUES (:text)";
    $statement = $pdo -> prepare ($sql);
    $statement -> execute(['text'=>$text]);

    header("Location: task_9.php");