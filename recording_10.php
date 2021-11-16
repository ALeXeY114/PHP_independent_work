<?php

    session_start();

    $pdo = new PDO('mysql:host=127.0.0.1; dbname=recording; charset=utf8;' , 'mysql', 'mysql');
    $text = $_POST['text'];

        $inquiry = "SELECT text FROM record";
        $sr = $pdo -> query($inquiry);
        $record = ($sr->fetchAll());

        foreach($record as $item) {
            if($item['text'] == ($text)) {
                $_SESSION['flash'] = 'You should check in on some of those fields below.';
                header("Location: task_10.php");
                exit();
            };
        };
            $sql = "INSERT INTO record (text) VALUES (:text)";
            $statement = $pdo -> prepare ($sql);
            $statement -> execute(['text'=>$text]);
            header("Location: task_10.php");
?>
