<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');
// 以下為刪除
$sql="delete from students where `id`='{$_GET['id']}'";

$pdo->exec($sql);

header("location:crud.php");
?>