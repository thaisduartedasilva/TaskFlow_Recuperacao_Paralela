<?php
try {$pdo=new PDO('mysql:host=localhost;dbname=taskflow;charset=utf8mb4','root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);} catch(PDOException $e){die('Erro de conexão. Importe database/taskflow.sql no phpMyAdmin.');}
