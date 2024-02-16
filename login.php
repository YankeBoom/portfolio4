<?php
    session_start();

    try {
        $conn = new PDO('mysql:host=localhost;dbname=student_KoDanilS20','KoDanilS20','GnMrSRic');
        $zapros = 'SELECT * FROM `statement`';
        $result = $conn->query($zapros);
        $conn = NULL;
      
    } catch (PDOException $e) {
        print 'ERROR:' .$e->getmessage().'<br>';
        die();
    }
?>